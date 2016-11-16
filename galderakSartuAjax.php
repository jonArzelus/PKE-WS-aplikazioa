<?php 
	session_start();
	if((isset($_SESSION['eposta']) && !empty($_SESSION['eposta'])) && (isset($_SESSION['konexioid']) && !empty($_SESSION['konexioid'])) && (isset($_SESSION['erabiltzaileMota']) && !empty($_SESSION['erabiltzaileMota']))) {
   		null;
	} else {
		$_SESSION['eposta'] = "Erabiltzaile Anonimoa";
		$_SESSION['konexioid'] = -1;
		$_SESSION['erabiltzaileMota'] = "GUEST";
	}

	include 'dbkonexioak/dbOpen.php';
	
	$eposta=$_SESSION['eposta'];
	$konexioid=$_SESSION['konexioid'];
	$erabiltzailemota=$_SESSION['erabiltzaileMota'];
	/*$galdera = $_POST['galdera'];
	$erantzuna = $_POST['erantzuna'];
	$zailtasuna = $_POST['zailtasuna'];
	$arloa = $_POST['arloa'];*/
	$galdera = $_GET['galdera'];
	$erantzuna = $_GET['erantzuna'];
	$zailtasuna = $_GET['zailtasuna'];
	$arloa = $_GET['arloa'];
	

	if(($galdera=="")||($erantzuna=="")||($arloa=="")){
		echo("Mesedez bete galderak modu egokian");
	}else{
		$sartu = "INSERT INTO quiz (egilePosta, galderaTestua, erantzunTestua, zailtasuna, galderaArloa) VALUES ('{$eposta}', '{$galdera}', '{$erantzuna}', '{$zailtasuna}', '{$arloa}')";
		$emaitza=$db->query($sartu);
		if($emaitza){

			//galdera ondo gorde da, lortu galdera IDa

			$sartu = "SELECT galderaZenbakia FROM quiz WHERE egilePosta='$eposta' AND galderaTestua='$galdera' AND erantzunTestua='$erantzuna' AND zailtasuna='$zailtasuna' AND galderaArloa='$arloa'";
			$emaitza=$db->query($sartu);
			if($emaitza) { //galderaid lortu da, xml gorde
				$lerroa = $emaitza->fetch_array(MYSQLI_BOTH);
				$galderaid = $lerroa['galderaZenbakia'];

				//echo(">>>>>>>>>>>>>>>>>>>>>>>>> ".$galderaid);
				
				echo $eposta;
				$konexioid = $_SESSION['konexioid'];
				//honekl ip-a bilatuko du toki egokienean nonbaiten ez badago
				if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	    			$ip = $_SERVER['HTTP_CLIENT_IP'];
				} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	    			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
				} else {
	    			$ip = $_SERVER['REMOTE_ADDR'];
				}
				$ekintza = "galdera txertatu";
				date_default_timezone_set('Europe/Madrid');
				$data = date(DATE_RSS, time());
				$sqlekintza="INSERT INTO ekintzak(konexioa, postaElektronikoa, ekintzaMota, ekintzaData, IP) VALUES ('$konexioid', '$eposta', '$ekintza', '$data', '$ip')";
				$emaitza=$db->query($sqlekintza);
				if(!$emaitza) {
					echo("Errore bat egon da ekintza gehitzean: ".$db->error);
				}

				//sartu baita ere erantzuna xml fitxategian
				$xml = new DOMDocument('1.0',"UTF-8");
				$xml->load('xml/galderak.xml') or die("<div class='error-page'> <div class='try-again'> Ezin izan da xml-a kargatu </div> </div> <script src='js/signIn.js'></script>");
				$root = $xml->documentElement;
				$assessmentItem = $xml->createElement('assessmentItem');

				$atrgalderaId = $xml->createAttribute("questionId");
				$atrgalderaId->value=$galderaid;
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
			
				echo("Zure eposta: ".$eposta."</br>
						Zure galdera: ".$galdera."</br>
						Zure erantzuna: ".$erantzuna."</br>
						Galdera arloa: ".$arloa."</br>
						Zailtasun maila: ".$zailtasuna."</br>
						Zure galdera egoki sartu da. Sartu beste bat nahi izanez gero. </br>"); 
				echo("XML fitxategian gorde da: ".$xml->save('xml/galderak.xml')."</br>"); 
				echo("XML fitxategia bistaratu nahi baduzu sakatu hurrengo esteka: <a href='seeXMLQuestions.php'> XML galderak ikusi </a></br>");
			} else {
				echo("Errore bat egon da galdera gehitzean: ".$db->error."</br>
					Errorea: Saiatu berriro?");
			}
		}else{
			echo("Errore bat egon da galdera gehitzean: ".$db->error."</br>
					Errorea: Saiatu berriro?");
			
		}
	}
	
	include 'dbkonexioak/dbClose.php';

?>

