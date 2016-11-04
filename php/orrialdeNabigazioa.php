<?php

	//ikus ea sesio bat hasi den eta ez bada hala guest ezarri
	if((isset($_SESSION['eposta']) && !empty($_SESSION['eposta'])) && (isset($_SESSION['konexioid']) && !empty($_SESSION['konexioid'])) && (isset($_SESSION['erabiltzaileMota']) && !empty($_SESSION['erabiltzaileMota']))) {
   		null;
	} else {
		$_SESSION['eposta'] = "Erabiltzaile Anonimoa";
		$_SESSION['konexioid'] = -1;
		$_SESSION['erabiltzaileMota'] = "GUEST";
	}

?>
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
      
	<a href="layout.php"><img class="logo" src="irudiak/quiz-logo.png"></a>
    </header>
<nav class='main' id='n1' role='navigation'>
	<?php 
	if($_GET['orrialdea']=="layout")
		echo ('<a href="layout.php"><span class="act-sel">Hasiera</span></a>');
	else
		echo ('<a href="layout.php"><span>Hasiera</span></a>');
	if($_GET['orrialdea']=="galderakIkusi")
		echo('<a href="seeXMLQuestions.php"><span class="act-sel">Galderak</span></a>');
	else
		echo('<a href="seeXMLQuestions.php"><span>Galderak</span></a>');
	if($_SESSION['erabiltzaileMota'] != "GUEST") {
		if($_GET['orrialdea']=="handlingQuizes")
		echo ('<a href="handlingQuizes.php"><span class="act-sel">Galderak sortu</span></a>');
	else
		echo ('<a href="handlingQuizes.php"><span>Galderak sortu</span></a>');
	}
	if($_SESSION['erabiltzaileMota'] == "IRAKASLEA") {
		if($_GET['orrialdea']=="ikasleakIkusi")
			echo'<a href="getUserInform.php"><span class="act-sel">Ikasleak begiratu</span></a>';
		else
			echo'<a href="getUserInform.php"><span>Ikasleak begiratu</span></a>';
	}
	if($_GET['orrialdea']=="credits")
		echo('<a href="credits.php"><span class="act-sel">Kredituak</span></a>');
	else
		echo('<a href="credits.php"><span>Kredituak</span></a>');
	?>
	</nav>