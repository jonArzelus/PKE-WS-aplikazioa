<?php

	session_start();
	//echo phpinfo();
	//ikus ea sesio bat hasi den eta ez bada hala guest ezarri
	//if((isset($_SESSION['eposta']) && !empty($_SESSION['eposta'])) && (isset($_SESSION['konexioid']) && !empty($_SESSION['konexioid'])) && (isset($_SESSION['erabiltzaileMota']) && !empty($_SESSION['erabiltzaileMota']))) {
	if(empty($_SESSION['eposta']) && empty($_SESSION['erabiltzaileMota']) && empty($_SESSION['konexioid'])) {
		$_SESSION['eposta'] = "Erabiltzaile Anonimoa";
		$_SESSION['konexioid'] = -1;
		$_SESSION['erabiltzaileMota'] = "GUEST";
		$_SESSION['erabiltzaileIrudia'] = 'irudiak/user-icon.png';
	}
	if($_GET['orrialdea'] == "ikasleakIkusi" && $_SESSION['erabiltzaileMota'] != "IRAKASLEA") { //irakasleek soilik dute sarrera honera
		header("Location:layout.php");
	}
	if($_GET['orrialdea'] == "reviewingQuizes" && $_SESSION['erabiltzaileMota'] != "IRAKASLEA") { //irakasleek soilik dute sarrera honera
		header("Location:layout.php");
	}
	if($_GET['orrialdea']=="handlingQuizes" && $_SESSION['erabiltzaileMota'] == "GUEST") { //erregistratuak soilik dute sarrera honera
		header("Location:layout.php");
	}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quizz: a quizz game</title>
	<link rel="icon" type="image/png" href="irudiak/question-logo.png">
    <!--<link rel='stylesheet' type='text/css' href='stylesPWS/style.css' />
	<link rel='stylesheet' type='text/css' media='only screen and (min-width: 767px) and (min-device-width: 696px)' href='stylesPWS/wide.css' />
	<link rel='stylesheet' type='text/css' media='only screen and (max-width: 766px)' href='stylesPWS/smartphone.css' /> -->
	<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
	<link rel='stylesheet' type='text/css' href='css/bootstrap-theme.css' />
	<script src='js/jquery-3.1.1.js'></script>
	<script src='js/bootstrap.js'></script>
	

  	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> -->
