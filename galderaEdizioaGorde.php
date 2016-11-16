<?php
include 'dbkonexioak/dbOpen.php';
	
	$zenbakia=$_GET['zenbakia'];
	$galdera=$_GET['galdera'];
	$erantzuna=$_GET['erantzuna'];
	$zailtasuna=$_GET['zailtasuna'];
	$arloa=$_GET['arloa'];

	//galdera ezabatu xml-tikan
	$doc=new SimpleXMLElement("xml/galderak.xml",null,true);
	$assessmentItems=$doc->xpath('//assessmentItem[@questionId='.$zenbakia.']');
	if (count($assessmentItems)>=1) {
    	$assessmentItemZ=$assessmentItems[0];
    	$dom=dom_import_simplexml($assessmentItemZ);
    	$dom->parentNode->removeChild($dom);
	}
	$doc->asXml("xml/galderak.xml");
	
	//sartu baita ere erantzuna xml fitxategian
	$xml = new DOMDocument('1.0',"UTF-8");
	$xml->load('xml/galderak.xml') or die("<div class='error-page'> <div class='try-again'> Ezin izan da xml-a kargatu </div> </div> <script src='js/signIn.js'></script>");
	$root = $xml->documentElement;
	$assessmentItem = $xml->createElement('assessmentItem');

	$atrgalderaId = $xml->createAttribute("questionId");
	$atrgalderaId->value=$zenbakia;
	$assessmentItem->appendChild($atrgalderaId);

	$atrZailtasuna = $xml->createAttribute("complexity");
	$atrZailtasuna->value=$zailtasuna;
	$assessmentItem->appendChild($atrZailtasuna);

	$atrArloa = $xml->createAttribute("subject");
	$atrArloa->value=$arloa;
	$assessmentItem->appendChild($atrArloa);
	
	$itemBody=$xml->createElement('itemBody');
	$p=$xml->createElement('p',$galdera);
	$itemBody->appendChild($p);
	
	$correctResponse=$xml->createElement('correctResponse');
	$value=$xml->createElement('value',$erantzuna);
	$correctResponse->appendChild($value);
	
		
	$assessmentItem->appendChild($itemBody);
	$assessmentItem->appendChild($correctResponse);

	$root->appendChild($assessmentItem);
	$xml->appendChild($root);
	$xml->save("xml/galderak.xml");

	//db-ko galderak eguneratu
	$sqlekintza="UPDATE quiz SET galderaTestua='$galdera', erantzunTestua='$erantzuna', zailtasuna='$zailtasuna' WHERE galderaZenbakia='$zenbakia'";
	$emaitza=$db->query($sqlekintza);
	if(!$emaitza) {
		echo("Errore bat egon da datuak eguneratzean gehitzean: ".$db->error);
	} else {
		$message = "galdera ondo editatua. onartu berbideratzeko";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Location:reviewingQuizes.php");
	}

include 'dbkonexioak/dbClose.php';
?>