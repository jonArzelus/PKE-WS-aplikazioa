<?php 
	//echo '$HTTP_POST_VARS[0]';
	

	//konexioa sortu datubasearekin
	//$esteka = mysqli_connect("mysql.hostinger.es", "u880556081_weba", "pertsona1", "u880556081_perts"); //hostinger esteka
	$esteka = mysqli_connect("localhost", "root", "", "erabiltzaileak"); //localhost esteka

	//konexioko erroreak ikusi
	if (!$esteka) {
		echo "Hutxegitea MySQLra konektatzerakoan. "."</br>";
		echo "errno depurazio katsa: ".mysqli_connect_errno()."</br>";
		echo "error depurazio akatsa: ".mysqli_connect_error()."</br>";
	}
		
	echo "</br>";

	if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
		null;
	} else { //post eskaera landu
		$izena= $_POST['izen-abizenak'];
		$mota = "USER";
		$eposta= $_POST['eposta-helbidea'];
		$pass= $_POST['pasahitza'];
		$tel= $_POST['telefono-zenbakia'];
		$esp= $_POST['espezialitatea'];
		if($esp=="besterik") {
			$esp= $_POST['espezializazioa'];
		}
		if(!$_POST['interesak']=="")
			$interesak= $_POST['interesak'];
		else
			$interesak= "INTERESIK_GABE";

		$emaitza = mysqli_query($esteka,"SELECT * FROM erabiltzaileak WHERE PostaElektronikoa='$eposta'"); //ikusi ea erabiltzailea existitzen den
		if (mysqli_num_rows($emaitza) > 0) {
			echo "Dagoeneko existitzen da $eposta duen erabiltzaile bat. Mesedez, atzera eman eta sartu ezazu beste posta-elektroniko helbide bat... </br></br>";
		} else { //ez da erabiltzailerik aurkitu email horrekin
		
			if(!empty($_FILES['argazki-fitxategia']['name'])) {
				//argazkia /irudiak karpetan gordetzen
				$izenaPosta = $eposta;
				$izenaPosta = str_replace(".", "", $izenaPosta);
				$izenaPosta = str_replace("@", "", $izenaPosta);
				$argazkia_izena = $_FILES["argazki-fitxategia"]["name"];
				$argazkia_ruta = $_FILES["argazki-fitxategia"]["tmp_name"];
				$argazkia_helbidea = "erabiltzaileIrudiak/".$izenaPosta; //erabiltzaile argazkiei izen berri bat ezarri beren emailaren arabera
				copy($argazkia_ruta,$argazkia_helbidea);
			} else {
				$argazkia_helbidea = "ARGAZKI_GABE";
				$argazkia_izena = null;
			}
			
			if(!filter_var($eposta, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z]+[0-9]{3}@ikasle.ehu.(eus|es)$/")))===false) {
			
				echo "Kaixo $izena, hurrengo datuak gordeko dira datubasean:</br></br>
				Izena: $izena </br>
				Eposta: $eposta</br>
				Pasahitza: $pass </br>
				Telefono-zenbakia: $tel </br>
				Espezialitatea: $esp </br>";
				if(!$interesak == "INTERESIK_GABE")
					echo "Interesak: $interesak </br>";
				else
					echo "Ez duzu interesik adierazi, ez zaizu interesik gordeko datubasean... </br>";

				if(!$argazkia_izena === null)
					echo "Argazkia: $argazki_izena </br>";
				else
					echo "Ez duzu argazkirik igo, ez zaizu argazkirik gordeko datubasean... </br>";
				
				//echo "Datu basean dauden erabitzaileak ikusi nahi badituzu, klikatu hurrengo estekan: <a href='http://berriogit.hol.es/ShowUsersWithImage.php'> Ikus erabiltzaileak </a></br>"; //hostingerrekoa ikusteko
				echo "</br> Datu basean dauden erabitzaileak ikusi nahi badituzu, klikatu hurrengo estekan: <a href='ShowUsersWithImage.php'> Ikus erabiltzaileak </a></br></br>"; //localhosten ikusteko

				//tauletan datuak gordetzea
				mysqli_query($esteka,"INSERT INTO erabiltzaileak (IzenAbizena, erabiltzaileMota, PostaElektronikoa, Pasahitza, TelefonoZenbakia, Espezialitatea, Interesak, Argazkia) VALUES ('$izena', '$mota', '$eposta', '$pass', '$tel', '$esp', '$interesak', '$argazkia_helbidea')");
			} else {
				echo "Idazikako eposta helbidea ez da zuzena! </br>";
			}
		}
		echo "Hauek dira ".$_SERVER['REQUEST_METHOD']." metodoko datuak:</br>";
		echo"<pre>";
		print_r($_SERVER);
		echo "</pre>";
	}
	//konexioa itxi
	mysqli_close($esteka);
?>