<?php
	$_GET['orrialdea'] = "galderakIkusi";
	include 'php/orrialdeGoia.php';
	echo('</head>
		<body>');
	include 'php/orrialdeNabigazioa.php';
?>
    <section class="container">
		
	
	<div>
		<?php
			include 'dbkonexioak/dbOpen.php';

			//sesio informazioa gorde ekintzetan
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
			
			//Galderak ikusi PHP erabiliz
			echo("<h1>XML fitxategiko galderak PHP erabiliz</h1></br></br>");
			$xml = new DOMDocument();
			$xml = simplexml_load_file('xml/galderak.xml') or die('Errore bat egon da xml fitxategia kargatzean.');
			//$root = $xml->documentElement;
			echo ('<table class="table table-striped">
					<tr>
						<th style="text-align:center"> Galdera </th>
						<th style="text-align:center"> Zailtasuna </th>
						<th style="text-align:center"> Arloa </th>
					</tr> ');
		
			foreach($xml->assessmentItem as $assessmentItem){
					echo ("<tr>");	
						echo ("<td>".$assessmentItem->itemBody->p."</td>");
						echo ('<td style="text-align:center">');
							switch($assessmentItem['complexity']) {
							case 1:
							echo('✪');
							break;
							case 2:
							echo('✪✪');
							break;
							case 3:
							echo('✪✪✪');
							break;
							case 4:
							echo('✪✪✪✪');
							break;
							case 5:
							echo('✪✪✪✪✪');
							break;
						}
						echo("</td>");
						echo ("<td>".$assessmentItem['subject']."</td>");
					echo("</tr>");
			}
		
			echo("</table></br></br>");
			include 'seeXSLQuestionsNoSession.php';
			include 'dbkonexioak/dbClose.php';
		?>
	</div>
		
    </section>
<?php include 'php/orrialdeOina.php'; ?>