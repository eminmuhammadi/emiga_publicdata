<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/cache_control.php');

$server_address=" "; /* https (default https)*/
$secure_server_address=" "; /* https (default https)*/

$adsense=" "; /* Google Adsense */
$ganalytics=" "; /* Google Analytics */

$google_map_api_key=" ";/*maps.google.com*/
$who_api_key=" ";/*whoapi.com/api*/

$allowCache="1";
$hour="8765";
$sec="3600"; 

if($allowCache=="1"){
$options = array(
	'time'   => $hour*$sec,
	'dir'    => 'cache', 
	'buffer' => true,   
	'load'   => false, 
	'external'=>array('list.php','list2.php','ip-search.php'),
	'extension' => '.html' 
	);
$sCache = new sCache($options);
sleep(2);
} 

?>
