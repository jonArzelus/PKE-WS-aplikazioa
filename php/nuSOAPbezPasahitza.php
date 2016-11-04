<?php
if (isset($_GET['pasahitza'])){
//nusoap.php klasea gehitzen dugu
require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');

//soapclient mota dun objektua sortzen dugu. http://www.mydomain.com/server.php  erabiliko den SOAP zerbitzua non dagoen zehazten url horrek
$soapclient = new nusoap_client("http://localhost/myquizz/php/egiaztatuPasahitza.php?wsdl", true);

//Web-Service-n inplementatu dugun funtzioari dei egiten diogu eta itzultzen diguna inprimatzen dugu
$emaitza= $soapclient->call('pasahitzaKonprobatu',array( 'x'=>$_GET['pasahitza']));

	if(strcmp($emaitza,'BALIOZKOA')==0){
		echo "Pasahitz hori egokia da".$emaitza."<br>";
	}else{
		echo "Pasahitz hori ohizkoa da, aldatu mezedez".$emaitza."<br>";

	}
}
?>