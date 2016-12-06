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
			
			//Galderak ikusi XSL erabiliz
		
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
<?php include 'php/orrialdeOina.php'; ?>