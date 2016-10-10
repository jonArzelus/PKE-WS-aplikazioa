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
		//$argazkia= $_POST['argazki-fitxategia'];
		
		//argazkia /irudiak karpetan gordetzen
		$argazkia_izena = $_FILES["argazki-fitxategia"]["name"];
		$argazkia_ruta = $_FILES["argazki-fitxategia"]["tmp_name"];
		$argazkia_helbidea = "erabiltzaileIrudiak/".$argazkia_izena; //aldatu erabiltzaile karpetarako
		copy($argazkia_ruta,$argazkia_helbidea);
		
		if(!filter_var($eposta, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z]+[0-9]{3}@ikasle.ehu.(eus|es)$/")))===false) {
		
			echo "Kaixo $izena, $eposta da zure helbidea. Aukeratu duzun espezilaitatea $esp da.</br></br>";
			echo "Argazki-fitxategia: $argazkia_izena da. Eta $argazkia_helbidea -n gordeko da. </br></br>";
			
			//argazkia mysql-n sartzen
			/*if($argazkia==null){
				echo "Ez duzu argazki fitxategirik bidali.</br></br>";
			}else{
				//echo "Jasotako fitxategia: ".($_FILES['argazki-fitxategia']['name'])."</br></br>";
				if($_FILES[$argazkia]['size'] !=0){
					if(!empty(getimagesize($_FILES[$argazkia]['tmp_name']))){
						$irudia = $esteka->real_scape_string(file_get_contents($_FILES [$argazkia]['tmp_name']));
						echo "$argazkia fitxategia igo duzu";
					}else{
						echo "Igo nahi duzun fitxategia ez da argazki bat.</br></br>";
					}
				}
			}*/
			
			echo "Datu basean dauden erabitzaileak ikusi nahi badituzu, klikatu hurrengo estekan: <a href='http://berriogit.hol.es/ShowUsersWithImage.php'> Ikus erabiltzaileak </a></br>"; //hostingerrekoa ikusteko
			//echo "Datu basean dauden erabitzaileak ikusi nahi badituzu, klikatu hurrengo estekan: <a href='ShowUsersWithImage.php'> Ikus erabiltzaileak </a></br></br>"; //localhosten ikusteko

			//tauletan datuak gordetzea
			mysqli_query($esteka,"INSERT INTO erabiltzaileak (IzenAbizena, PostaElektronikoa, Pasahitza, TelefonoZenbakia, Espezialitatea, Interesak, Argazkia) VALUES ('$izena', '$eposta', '$pass', '$tel', '$esp', '$interesak', '$argazkia_helbidea')");
		} else {
			echo "Idazikako eposta helbidea ez da zuzena! </br>";
		}
		echo "Hauek dira POST metodoko datuak:</br>";
		echo"<pre>";
		print_r($_SERVER);
		echo "</pre>";
	}
	//konexioa itxi
	mysqli_close($esteka);
?>