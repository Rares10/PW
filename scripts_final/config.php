<?php
ini_set('display_errors', 1);
set_time_limit(0);
if ( isset($_SERVER['SERVER_NAME']) ) {
	session_start();
}

$cfg = array(
	'mysql_host' => 'localhost',
	'mysql_user' => 'root',
	'mysql_password' => 'mysql',
	'mysql_database' => 'crontab',
	'split_csv' => 1000,
	'base' => 'http://localhost/proiect',
	'replace' => array('^','<','>',';','=','#','{','}', "\n", "\r\n", "\r", "\t", '&nbsp;', '&', '&copy;', '&reg;', '&#8226;', '<![CDATA[', ']]>'),
	'manage_title' => 'Administrare Cron',
	'manage_url' => 'http://localhost/proiect/scripts/manage/',
	/* Login NOD */
	'nod_username' => 'dragos@redlinemultimedia.ro',
	'nod_password' => 'anamaria1975',
	/* Adresa email pentru update-uri */
	'management_email' => 'fpopiku@gmail.com',
	/* parametri curl */
	'curlopt_user_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13',
	'curlopt_connect_timeout' => 30,
	'curlopt_timeout' => 120,
	'curlopt_cookiefile' => dirname(__FILE__) . '/cookie.txt',
	'curlopt_cookiejar' => dirname(__FILE__) . '/cookie.txt'
);

$dbh = new mysqli($cfg['mysql_host'], $cfg['mysql_user'], $cfg['mysql_password'], $cfg['mysql_database']);
if ($dbh->errno) {
    exit('MySQL Error: ' . $dbh->error . ' in file ' . basename(__FILE__) . ', line ' . __LINE__);
}
$dbh->query("SET NAMES 'utf8'");

/* return html string with curl */
function get_html($url, $cookieless) {
	global $cfg;
	if ($cookieless == 1) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, $cfg['curlopt_user_agent']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $cfg['curlopt_connect_timeout']);
		curl_setopt($ch, CURLOPT_TIMEOUT, $cfg['curlopt_timeout']);
		$page = curl_exec($ch);
		curl_close($ch);
	} else {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, $cfg['curlopt_user_agent']);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cfg['curlopt_cookiejar']);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cfg['curlopt_cookiefile']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $cfg['curlopt_connect_timeout']);
		curl_setopt($ch, CURLOPT_TIMEOUT, $cfg['curlopt_timeout']);
		$page = curl_exec($ch);
		curl_close($ch);
	}
	return $page;
}

?>
