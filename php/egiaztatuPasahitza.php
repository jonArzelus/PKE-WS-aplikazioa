
<?php

//nusoap.php klasea gehitzen dugu
require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');

//$URL       = "localhost";
$ns = "http://localhost/myquizz/php/egiaztatuPasahitza.php?wsdl"; 

//soap_server motako objektua sortzen dugu
$server = new soap_server;
$server->configureWSDL('pasahitzak', $ns);
$server->wsdl->schemaTargetNamespace=$ns;
//inplementatu nahi dugun funtzioa erregistratzen dugu, funtzio bat baino gehiago erregistra liteke ...
$server->register('pK',array('x'=>'xsd:string'),
				  array('z'=>'xsd:string'),
				  $ns);

//funtzioa inplementatzen da
function pK($x){
	$handle = fopen("toppasswords.txt", "r");
	if ($handle) {
    	while (($line = fgets($handle)) !== false) {
			$line=rtrim($line,"\r\n");
        	if(strcmp($line,$x)==0){
				return 'BALIOGABEA';
			} 
   		 }
		fclose($handle);
		return 'BALIOZKOA';
	} else {
   
	}
		
}

//nusoap klaseko service metodoari dei egiten diogu
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
//exit();
?>