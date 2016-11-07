<?php

$client = new SoapClient("http://www.webservicex.net/geoipservice.asmx?WSDL");
$params = new stdClass;
 
$params->IPAddress = $_SERVER['REMOTE_ADDR'];
echo "Bezeroaren IP helbidea: " .$params->IPAddress;
$result = $client->GetGeoIP($params);
// Check for errors...
$countryName = $result->GetGeoIPResult->CountryName;
$countryCode = $result->GetGeoIPResult->CountryCode;
 
echo "<br/>Bere herrialde izena: " . $countryName . "<br/>Herrialde kodea: " . $countryCode;

?>