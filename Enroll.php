<?php 
	//echo '$HTTP_POST_VARS[0]';
	echo"<pre>";
	print_r($_SERVER);
	echo "</pre>";
	if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
		null;
	} else { //post eskaera landu
		$izena= $_POST['izen-abizenak'];
		$eposta= $_POST['eposta-helbidea'];
		$esp= $_POST['espezialitatea'];
		if($esp=="besterik")
			$esp= $esp . " " . $_POST['espezializazioa'];
		echo "Kaixo $izena, $eposta da zure helbidea. $esp"."</br>";
		echo "Jasotako fitxategia: ".($_FILES['argazki-fitxategia']['name'])."</br>";
	}
?>