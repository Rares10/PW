<?php 
if (isset($_SERVER['SERVER_NAME'])) {
	exit('<!DOCTYPE html><html><head><meta charset="utf-8"><title>Error!</title></head><body><h1>Acest script poate rula doar in linie de comanda!</h1></body></html>');
}
require_once dirname(__FILE__) . '/config.php';
require_once dirname(__FILE__) . '/bnr_exchange_rates.php';
require_once dirname(__FILE__) . '/simple_html_dom.php';
error_log('[' . date('Y-m-d H:i:s') . '] - INFO: Incepe actualizarea preturilor si a stocurilor NOD.' . "\n", 3, dirname(__FILE__) . '/access.log');
$error_log = fopen(dirname(__FILE__) . '/error.log', 'w');
$update_log = fopen(dirname(__FILE__) . '/update_nod.log', 'w');
fclose($error_log);
fclose($update_log);
############################## NOD #################################
$update_count = 0;
$Products = array();
$Rules = array();
$qs = $dbh->query("SELECT DISTINCT id_supplier FROM price_rules WHERE supplier_name = 'NOD'") or die (error_log('[' . date('r') . '] . ERROR: MySQL Error: ' . $dbh->error . ' in file ' . __FILE__ . ', line ' . __LINE__ . "\n", 3, dirname(__FILE__) . '/error.log'));
$rs = $qs->fetch_assoc();
if (is_null($rs)) {
	error_log('[' . date('Y-m-d H:i:s') . '] - ERROR: Nu a fost gasit nici un furnizor cu numele NOD in tabelul cu regulile de pret (price_rules).' . "\n", 3, dirname(__FILE__) . '/error.log');
} else {
	$id_supplier = $rs['id_supplier'];
	$qr = $dbh->query("SELECT id_supplier, id_category, id_manufacturer, adaos FROM price_rules WHERE id_supplier = " . $id_supplier) or die (error_log('[' . date('Y-m-d H:i:s') . '] . ERROR: MySQL Error: ' . $dbh->error . ' in file ' . basename(__FILE__) . ', line ' . __LINE__ . "\n", 3, dirname(__FILE__) . '/error.log'));
	while ($rr = $qr->fetch_assoc()) {
		$Rules[$rr['id_manufacturer']][$rr['id_category']] = $rr['adaos'];
	}
	$qp = $dbh->query("SELECT id_product, reference, id_category_default, id_manufacturer, price, quantity FROM red_product WHERE id_supplier = " . $id_supplier) or die (error_log('[' . date('Y-m-d H:i:s') . '] . ERROR: MySQL Error: ' . $dbh->error . ' in file ' . basename(__FILE__) . ', line ' . __LINE__ . "\n", 3, dirname(__FILE__) . '/error.log'));
	while ($rp = $qp->fetch_assoc()) {
		if (isset($Rules[$rp['id_manufacturer']][$rp['id_category_default']])) {
			$reference = $rp['reference'];
			$Products["$reference"]['id_product'] = $rp['id_product'];
			$Products["$reference"]['price'] = round( $rp['price'], 2);
			$Products["$reference"]['quantity'] = $rp['quantity'];
			$Products["$reference"]['adaos'] = $Rules[$rp['id_manufacturer']][$rp['id_category_default']];
		}
	}
	require_once dirname(__FILE__) . '/Nod/bootstrap.php';
	$method = new Nod_Api_Methods_Products(API_USER, API_KEY, RESPONSE_MODE);
	$method->getFullFeed('json');
	$statusCode = $method->getStatusCode();
	if ($statusCode == '200') {
		$json = json_decode($method->getBody(), true);
		$products = $json['products'];
		$New = array();
		foreach ($products as $key => $value) {
			$code = trim($value['code']);
			if (isset($value['ron_promo_price']) && floatval($value['ron_promo_price']) > 0) {
				$price = floatval($value['ron_promo_price']);
			} else {
				$price = floatval($value['ron_price']);
			}
			$quantity = intval($value['stock_value']);
			$New["$code"]['price'] = $price;
			$New["$code"]['quantity'] = $quantity;
		}
	} else {
		error_log('[' . date('Y-m-d H:i:s') . '] - ERROR: API-ul Nod a returnat un cod de eroare (' . $statusCode . ').' . "\n", 3, dirname(__FILE__) . '/error.log');
	}
	foreach ($Products as $ProductKey => $ProductData) {
		if (array_key_exists($ProductKey, $New)) {
			$NewPrice = round( $New["$ProductKey"]['price']*(1+$ProductData['adaos']), 2);
			$NewQuantity = intval($New["$ProductKey"]['quantity']);
			if ($NewPrice != $ProductData['price'] || $NewQuantity != $ProductData['quantity']) {
				$dbh->query("UPDATE ps_product INNER JOIN ps_product_shop ON ps_product.id_product = ps_product_shop.id_product INNER JOIN ps_stock_available ON ps_product.id_product = ps_stock_available.id_product SET ps_product.price = " . $NewPrice . ", ps_product.quantity = " . $NewQuantity . ", ps_stock_available.quantity = " . $NewQuantity . ", ps_product_shop.price = " . $NewPrice . " WHERE ps_product.id_product = " . $ProductData['id_product']) or die (error_log('[' . date('Y-m-d H:i:s') . '] . ERROR: MySQL Error: ' . $dbh->error . ' in file ' . basename(__FILE__) . ', line ' . __LINE__ . "\n", 3, dirname(__FILE__) . '/error.log'));
				$update_count++;
				$update_log_line = 'Update for id_product ' . $ProductData['id_product'] . ': ' . $NewPrice . '=' . $New["$ProductKey"]['price'] . '*' . (1+$ProductData['adaos']) . "\n";
				error_log($update_log_line, 3, dirname(__FILE__) . '/update_nod.log');
			}
		} else {
			$dbh->query("UPDATE ps_product INNER JOIN ps_stock_available ON ps_product.id_product = ps_stock_available.id_product SET ps_product.quantity = 0, ps_stock_available.quantity = 0 WHERE ps_product.id_product = " . $ProductData['id_product']) or die ('MySQL Error: ' . $dbh->error . ' in file ' . basename(__FILE__) . ', line ' . __LINE__);
		}
	}
}
error_log( '[' . date('Y-m-d H:i:s') .  '] - Info: actualizat preturile si stocurile a ' . $update_count . ' produse NOD' . "\n", 3, dirname(__FILE__) . '/access.log' );
exit;
?>
