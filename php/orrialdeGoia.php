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

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Quizz: a quizz game</title>
	<link rel="icon" type="image/png" href="irudiak/question-logo.png">
    <link rel='stylesheet' type='text/css' href='stylesPWS/style.css' />
	<link rel='stylesheet' type='text/css' media='only screen and (min-width: 767px) and (min-device-width: 696px)' href='stylesPWS/wide.css' />
	<!-- goiko erlazioa 1 = 1.101871101871102 -->
	<link rel='stylesheet' type='text/css' media='only screen and (max-width: 766px)' href='stylesPWS/smartphone.css' />

  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
