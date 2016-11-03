<?php
if (isset($_GET['eposta'])){
//nusoap.php klasea gehitzen dugu
require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');

//soapclient mota dun objektua sortzen dugu. http://www.mydomain.com/server.php  erabiliko den SOAP zerbitzua non dagoen zehazten url horrek
$soapclient = new nusoap_client("http://wsjiparsar.esy.es/webZerbitzuak/egiaztatuMatrikula.php?wsdl", false);

//Web-Service-n inplementatu dugun funtzioari dei egiten diogu eta itzultzen diguna inprimatzen dugu
$emaitza= $soapclient->call('pasahitzaKonprobatu',array( 'x'=>$_GET['eposta']));
	if($emaitza == 'BAI'){
		echo "Pasahitz hori egokia da";
	}else{
		echo "Pasahitz hori ohizkoa da, aldatu mezedez";
	}
}
?>