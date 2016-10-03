<?php 
	//echo '$HTTP_POST_VARS[0]';
	

	//konexioa sortu datubasearekin
	$esteka = mysqli_connect("mysql.hostinger.es", "u880556081_weba", "pertsona1", "u880556081_perts"); //hostinger esteka
	//$esteka = mysqli_connect("localhost", "root", "", "erabiltzaileak"); //localhost esteka

	//konexioko erroreak ikusi
	if (!$esteka) {
		echo "Hutxegitea MySQLra konektatzerakoan. "."</br>";
		echo "errno depurazio katsa: ".mysqli_connect_errno()."</br>";
		echo "error depurazio akatsa: ".mysqli_connect_error()."</br>";
	}
		
	$irudia=null;

	if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
		null;
	} else { //post eskaera landu
		$izena= $_POST['izen-abizenak'];
		$eposta= $_POST['eposta-helbidea'];
		$pass= $_POST['pasahitza'];
		$tel= $_POST['telefono-zenbakia'];
		$esp= $_POST['espezialitatea'];
		if($esp=="besterik") {
			$esp= $_POST['espezializazioa'];
		}
		$interesak= $_POST['interesak'];

		//prestaketak argazkia gordetzeko
		$argazkia_izena = $_FILES["argazki-fitxategia"]["name"];
		$tmpName = $_FILES["argazki-fitxategia"]["tmp_name"];
		$fp = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);

		if(!get_magic_quotes_gpc()) {
    		$fileName = addslashes($fileName);
		}
		
		echo "Kaixo $izena, $eposta da zure helbidea. Aukeratu duzun espezilaitatea $esp da.</br></br>";
		echo "Argazki-fitxategia: $argazkia_izena da.</br></br>";
		
		//$content aldagaiean gorde da irudia
		
		echo "Datu basean dauden erabitzaileak ikusi nahi badituzu, klikatu hurrengo estekan: <a href='http://berriogit.hol.es/ShowUsersWithImage.php'> Ikus erabiltzaileak </a></br>"; //hostingerrekoa ikusteko
		//echo "Datu basean dauden erabitzaileak ikusi nahi badituzu, klikatu hurrengo estekan: <a href='ShowUsersWithImage.php'> Ikus erabiltzaileak </a></br></br>"; //localhosten ikusteko

		//tauletan datuak gordetzea
		mysqli_query($esteka,"INSERT INTO erabiltzaileak (IzenAbizena, PostaElektronikoa, Pasahitza, TelefonoZenbakia, Espezialitatea, Interesak, Argazkia) VALUES ('$izena', '$eposta', '$pass', '$tel', '$esp', '$interesak', '$content')");
		echo "Hauek dira POST metodoko datuak:</br>";
		echo"<pre>";
		print_r($_SERVER);
		echo "</pre>";
	}
	//konexioa itxi
	mysqli_close($esteka);
?>