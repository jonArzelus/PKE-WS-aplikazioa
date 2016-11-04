<?php

			//Galderak ikusi XSL erabiliz
			echo('<div class="desktopSoilik">');
			echo("<h1>XML fitxategiko galderak XSL erabiliz</h1></br></br>");
			
			$xml2 = new DOMDocument();
			$xml2->load("xml/galderak.xml") or die('Errore bat egon da xml2 fitxategia kargatzean');
			$xsl = new DOMDocument();
			$xsl->load("xml/seeQuestions.xsl") or die('Errore bat egon da xsl fitxategia kargatzean');
			$proc = new XSLTProcessor();
			$proc-> importStyleSheet($xsl);
			echo ($proc->transformToXML($xml2));

			echo('</div>');

?>