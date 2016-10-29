<?php 
	session_start();
	//ikus ea sesio bat hasi den eta ez bada hala guest ezarri
	if((isset($_SESSION['eposta']) && !empty($_SESSION['eposta'])) && (isset($_SESSION['konexioid']) && !empty($_SESSION['konexioid'])) && (isset($_SESSION['erabiltzaileMota']) && !empty($_SESSION['erabiltzaileMota']))) {
   		null;
	} else {
		$_SESSION['eposta'] = "Erabiltzaile Anonimoa";
		$_SESSION['konexioid'] = -1;
		$_SESSION['erabiltzaileMota'] = "GUEST";
	}
	include"dbkonexioak/dbOpen.php";

	$eposta = $_SESSION['eposta']; 
	$query="SELECT * FROM quiz WHERE egilePosta='{$eposta}'";
	$result = $db->query($query);
	$nireak=0;
	while($row=$result->fetch_assoc()){
		$nireak=$nireak+1;
	}

	$query2="SELECT * FROM quiz";
	$result2 = $db->query($query2);
	$guztira=0;
	while($row2=$result2->fetch_assoc()){
		$guztira=$guztira+1;
	}

	echo("Nire galdera kopurua: ".$nireak."</br>");
	echo("Galderak guztira: ".$guztira)."</br></br>";

	include "dbkonexioak/dbClose.php";
?>
