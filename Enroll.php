<?php 
	//echo '$HTTP_POST_VARS[0]';
	echo"<pre>";
	print_r($_SERVER);
	echo "</pre>";

	//konexioa sortu datubasearekin
	$esteka = mysqli_connect("mysql.hostinger.es", "u880556081_weba", "pertsona1", "u880556081_perts");

	//konexioko erroreak ikusi
	if (!$esteka) {
		echo "Hutxegitea MySQLra konektatzerakoan. "."</br>";
		echo "errno depurazio katsa: ".mysqli_connect_errno()."</br>";
		echo "error depurazio akatsa: ".mysqli_connect_error()."</br>";
	}
	if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
		null;
	} else { //post eskaera landu
		$izena= $_POST['izen-abizenak'];
		$eposta= $_POST['eposta-helbidea'];
		$pass= $_POST['pasahitza'];
		$tel= $_POST['telefono-zenbakia'];
		$esp= $_POST['espezialitatea'];
		if($esp=="besterik") {
			$esp= $esp . " " . $_POST['espezializazioa'];
		}
		$interesak= $_POST['interesak'];
		$argazkia= $_POST['argazki-fitxategia'];
		echo "Kaixo $izena, $eposta da zure helbidea. $esp"."</br>";
		echo "Jasotako fitxategia: ".($_FILES['argazki-fitxategia']['name'])."</br>";

		//tauletan datuak gordetzea
		mysqli_query($esteka,"INSERT INTO erabiltzaileak (IzenAbizena, PostaElektronikoa, Pasahitza, TelefonoZenbakia, Espezialitatea, Interesak, Argazkia) VALUES ('$izena', '$eposta', '$pass', '$tel', '$esp', '$interesak', '$argazkia')");

	}
	//konexioa itxi
	mysqli_close($esteka);
?>