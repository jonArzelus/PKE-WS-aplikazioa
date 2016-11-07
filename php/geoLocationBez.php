<?php
//if (isset($_GET['eposta'])){
//nusoap.php klasea gehitzen dugu
require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');

//soapclient mota dun objektua sortzen dugu. http://www.mydomain.com/server.php  erabiliko den SOAP zerbitzua non dagoen zehazten url horrek
$soapclient = new nusoap_client("http://www.webservicex.net/geoipservice.asmx?WSDL", true);

//Web-Service-n inplementatu dugun funtzioari dei egiten diogu eta itzultzen diguna inprimatzen dugu
$emaitza = $soapclient->call('GetGeoIPContext');
$emaitza2 = $soapclient->call('GetGeoIP');
//echo $emaitza;
//while ($lerroa = $emaitza->fetch_assoc()){
		//echo ("<tr><td>".$lerroa['ReturnCode']."</td><td>".$lerroa['IP']."</td><td>".$lerroa['returnCodeDetails']."</td><td>".$lerroa['CountryName']."</td></td	>");
//}
echo count($emaitza)."</br>";
echo count($emaitza2)."</br>";
foreach ($emaitza as $x => $x_value){
	echo "Indizea=".$x.", balioa=".$x_value;
	echo "<br/>";
}	
foreach ($emaitza2 as $x => $x_value){
	echo "Indizea=".$x.", balioa=".$x_value;
	echo "<br/>";
}	
?>
