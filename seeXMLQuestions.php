<?php
	$_GET['orrialdea'] = "galderakIkusi";
	include 'orrialdeGoiburua.php';
?>
    <section class="main" id="s1">
		
	
	<div>
		<?php
			include 'dbkonexioak/dbOpen.php';

			//sesio informazioa gorde ekintzetan
			//session_start();
			$eposta=$_SESSION['eposta'];
			$konexioid = $_SESSION['konexioid'];
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    			$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
    			$ip = $_SERVER['REMOTE_ADDR'];
			}
			$ekintza = "xml galderak ikusi";
			date_default_timezone_set('Europe/Madrid');
			$data = date(DATE_RSS, time());
			$sqlekintza="INSERT INTO ekintzak(konexioa, postaElektronikoa, ekintzaMota, ekintzaData, IP) VALUES ('$konexioid', '$eposta', '$ekintza', '$data', '$ip')";
			$emaitza=$db->query($sqlekintza);
			if(!$emaitza) {
				echo("Errore bat egon da ekintza gehitzean: ".$db->error);
			}
		
			echo("<h1>XML fitxategiko galderak PHP erabiliz</h1></br></br>");
			$xml = new DOMDocument();
			$xml = simplexml_load_file('xml/galderak.xml') or die('Errore bat egon da xml fitxategia kargatzean.');
			//$root = $xml->documentElement;
			echo ('<table border="1">
					<tr>
						<th style="text-align:center"> Galdera </th>
						<th style="text-align:center"> Zailtasuna </th>
						<th style="text-align:center"> Arloa </th>
					</tr> ');
		
			foreach($xml->assessmentItem as $assessmentItem){
					echo ("<tr>");	
						echo ("<td>".$assessmentItem->itemBody->p."</td>");
						echo ("<td>".$assessmentItem['complexity']."</td>");
						echo ("<td>".$assessmentItem['subject']."</td>");
					echo("</tr>");
			}
		
			echo("</table></br></br>");
			
			
		
			echo("<h1>XML fitxategiko galderak XSL erabiliz</h1></br></br>");
			
			$xml2 = new DOMDocument();
			$xml2->load("xml/galderak.xml") or die('Errore bat egon da xml2 fitxategia kargatzean');
			$xsl = new DOMDocument();
			$xsl->load("xml/seeQuestions.xsl") or die('Errore bat egon da xsl fitxategia kargatzean');
			$proc = new XSLTProcessor();
			$proc-> importStyleSheet($xsl);
			echo ($proc->transformToXML($xml2));
			
			include 'dbkonexioak/dbClose.php';
		?>
	</div>
		
    </section>
<?php include 'orrialdeOina.php'; ?>