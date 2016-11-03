<?php
$bezeroa = new SoapClient("http://wsjiparsar.esy.es/webZerbitzuak/egiaztatuMatrikula.php?wsdl");
$datuak = array('maila'=>'1','sarrera'=>base64_encode($eposta));
$emaitza = $bezeroa->konprobatuEtik_pasa($datuak);
$testua = base64_decode($emaitza->morfeusetik_pasaResult);
print_r($testua);
?>