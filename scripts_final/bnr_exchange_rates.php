<?php
$cur_exchange = array();
$xml = @simplexml_load_file('http://www.bnr.ro/nbrfxrates.xml');
$data = $xml->Body;
$cube = $data->Cube;
foreach ($cube->Rate as $rate) {
	$currency = $rate->attributes()->currency;
	$value = (float)$rate;
	$cur_exchange["$currency"] = $value;
}
?>
