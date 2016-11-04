<?php 
	//echo '$HTTP_POST_VARS[0]';
	
	include 'dbkonexioak/dbOpen.php';
	//konexioa sortu datubasearekin
	//$esteka = mysqli_connect("mysql.hostinger.es", "u880556081_weba", "pertsona1", "u880556081_perts"); //hostinger esteka
	//$esteka = mysqli_connect("localhost", "root", "", "erabiltzaileak"); //localhost esteka

	//konexioko erroreak ikusi
	if (!$db) {
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
			$interesak= null;

		$emaitza = mysqli_query($db,"SELECT * FROM erabiltzaileak WHERE PostaElektronikoa='$eposta'"); //ikusi ea erabiltzailea existitzen den
		if (mysqli_num_rows($emaitza) > 0) {
			echo "Dagoeneko existitzen da $eposta duen erabiltzaile bat. Mesedez, atzera eman eta sartu ezazu beste posta-elektroniko helbide bat... </br></br>";
		} else { //ez da erabiltzailerik aurkitu email horrekin

			//ikusi ea REGEXP pasatzen duen
			$esp_izena= filter_var($izena, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/([A-Z]{1}[a-z ]{1,})*/")));
			$esp_mota = filter_var($mota, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^(GUEST|USER|ADMIN)$/")));
			$esp_eposta= filter_var($eposta, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-z]+[0-9]{3}@ikasle\.ehu\.eu?s$/"))); //aurrekoa ^[a-zA-Z]{1,}+[0-9]{3}@ikasle.ehu.(eus|es)$
			$esp_pass= filter_var($pass, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/.{6,}$/")));
			$esp_tel= filter_var($tel, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[0-9]{9}/")));
		
			if((!$esp_izena==false) && (!$esp_mota==false) && (!$esp_eposta==false) && (!$esp_pass==false) && (!$esp_tel==false)) {

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
					$argazkia_helbidea = "irudiak/user-icon.png";
					$argazkia_izena = null;
				}

				echo "Kaixo $izena, hurrengo datuak gordeko dira datubasean:</br></br>
				Izena: $izena </br>
				Eposta: $eposta</br>
				Pasahitza: $pass </br>
				Telefono-zenbakia: $tel </br>
				Espezialitatea: $esp </br>";
				if(!$interesak == null)
					echo "Interesak: $interesak </br>";
				else
					echo "Ez duzu interesik adierazi, ez zaizu interesik gordeko datubasean... </br>";

				if(!$argazkia_izena == null)
					echo "Argazkia: $argazkia_izena </br>";
				else
					echo "Ez duzu argazkirik igo, ez zaizu argazkirik gordeko datubasean... </br>";
				
				//echo "Datu basean dauden erabitzaileak ikusi nahi badituzu, klikatu hurrengo estekan: <a href='http://berriogit.hol.es/ShowUsersWithImage.php'> Ikus erabiltzaileak </a></br>"; //hostingerrekoa ikusteko
				//echo "</br> Datu basean dauden erabitzaileak ikusi nahi badituzu, klikatu hurrengo estekan: <a href='ShowUsersWithImage.php'> Ikus erabiltzaileak </a></br></br>"; //localhosten ikusteko
				echo "</br> Datu basean dauden erabitzaileak ikusi nahi badituzu, klikatu hurrengo estekan: <a href='".ESTEKA."'> Ikus erabiltzaileak </a></br>";
				echo "</br> Hasierara bueltatu nahi baduzu, klikatu hurrengo estekan: <a href='".HASIERA."'> Hasiera </a></br></br>";
				
				//tauletan datuak gordetzea
				mysqli_query($db,"INSERT INTO erabiltzaileak (IzenAbizena, erabiltzaileMota, PostaElektronikoa, Pasahitza, TelefonoZenbakia, Espezialitatea, Interesak, Argazkia) VALUES ('$izena', '$mota', '$eposta', '$pass', '$tel', '$esp', '$interesak', '$argazkia_helbidea')");
			} else {
				echo "Datuak jasotzean errorea(k):</br>";
				if($esp_izena==false)
					echo "- Izena letra larriz hasi behar da eta ondoren letra xehez jarraitu. </br>"; 
				if($esp_mota==false)
					echo "- Erabiltzaile mota okerra. Kontaktatu administratzailea.</br>";
				if($esp_eposta==false)
					echo "- Posta-elektronikoa izena000@ikasle.ehu.eus motakoa izan behar da (unibertsitatekoa).</br>";
				if($esp_pass==false)
					echo "Pasahitzak gutxienez 6 letrako luzeera izan behar du.</br>";
				if($esp_tel==false)
					echo "- Telefono zenbakiak soilik 9 digitu izan ditzazte.</br>";
				echo "Jasotako datuak ez dira zuzenak. Mesedez, saiatu berriro beranduago... </br></br>";
			}
		}
		echo "Hauek dira ".$_SERVER['REQUEST_METHOD']." metodoko datuak:</br>";
		echo"<pre>";
		print_r($_SERVER);
		echo "</pre>";
	}
	//konexioa itxi
	//mysqli_close($esteka);
	include 'dbkonexioak/dbClose.php';
?>