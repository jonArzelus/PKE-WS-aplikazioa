
<?php

//nusoap.php klasea gehitzen dugu
require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');

$URL       = "localhost";
$namespace = $URL.'?wsdl';

//soap_server motako objektua sortzen dugu
$server = new soap_server;
$server->configureWSDL('hellotesting', $namespace);

//inplementatu nahi dugun funtzioa erregistratzen dugu, funtzio bat baino gehiago erregistra liteke ...
$server->register('pasahitzaKonprobatu');

//funtzioa inplementatzen da
function pasahitzaKonprobatu($eposta){
	//hemen konprobatu behar da pasahitza fitxategian dagoen. kontuz fgets funtzioaren zuriuneekin
	//for(){
		$myfile = fopen("toppaswords.txt", "r")or die("Unable to open file!");
		echo fread($myfile,filesize("toppaswords.txt"));
		fclose($myfile);
		return 1;
	//}
}

//nusoap klaseko service metodoari dei egiten diogu
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
exit();
?>