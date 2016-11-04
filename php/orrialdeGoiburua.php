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
	<title>Quizz</title>
	<link rel="icon" type="image/png" href="irudiak/question-logo.png">
    <link rel='stylesheet' type='text/css' href='stylesPWS/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='stylesPWS/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='stylesPWS/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>

	<?php
	echo '<div class="botoia-left"> Erabiltzailea: ' . $_SESSION['eposta'] . ' - ' . $_SESSION['erabiltzaileMota'] . '</div>';
	?>
	
	<?php
	if($_SESSION['erabiltzaileMota']=="GUEST") {
      	echo'<a href="signUp.php"><img class="botoia"  src="irudiak/signup-icon.png"></a>
      	<a href="SignIn.php"><img class="botoia"  src="irudiak/login-icon.png"></a>';
	} else {
		echo '<a href="LogOut.php"><img class="botoia"  src="irudiak/logout-icon.png"></a>';
	}
    ?>
      
	<img class="logo" src="irudiak/quiz-logo.png">
    <!-- </header> -->