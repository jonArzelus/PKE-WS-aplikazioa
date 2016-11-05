<?php
if (isset($_GET['pasahitza'])){
$pass=$_GET['pasahitza'];
//nusoap.php klasea gehitzen dugu
//echo $pass;
require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');

//soapclient mota dun objektua sortzen dugu. http://www.mydomain.com/server.php  erabiliko den SOAP zerbitzua non dagoen zehazten url horrek

	//$soapclient = new nusoap_client("http://localhost/myquizz/php/egiaztatuPasahitza.php?wsdl", true);
$soapclient = new nusoap_client('http://igortxete.hol.es/myquiz/egiaztatuPasahitzaZerbitzari.php?wsdl', true);
	
/*$err=$soapclient->getError();
if($err){
	echo "gaizki joan da";
}else{
	echo "dena ondo";
}*/
	
//Web-Service-n inplementatu dugun funtzioari dei egiten diogu eta itzultzen diguna inprimatzen dugu
//$emaitza= $soapclient->call('pasahitzaKonprobatu',array('pass'=>$_GET['pasahitza']));
$emaitza= $soapclient->call('validatePass',array('pass'=>$_GET['pasahitza']));
//echo $emaitza;
	if(strcmp($emaitza,'BALIOZKOA')==0){
		echo "Pasahitz hori egokia da";
	}else{
		echo "Pasahitz hori ohizkoa da, aldatu mezedez";
	}
}
?>