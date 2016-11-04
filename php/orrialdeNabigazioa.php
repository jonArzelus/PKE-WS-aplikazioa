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

	<div id="main" class="bakarrikMugikorra">
	  <div class="container">
	      <div class="navigation" style="position:absolute; z-index:10; margin-top:50px">
	        <ul>
	          <li><a href="layout.php">Hasiera</a></li>
	          <li><a href="#" tabindex="1">Galderak ikusi<span class="arrow-down"></span></a>
	            <ul class="dropdown">
	              <li><a href="seeXMLQuestions.php">Ikusi DB galderak</a></li>
	              <li><a href="seeXMLQuestions.php">Ikusi XML galderak</a></li>
	              <li><a href="seeXSLQuestions.php">Ikusi XSL galderak</a></li>
	              <li><a href="galderakIkusi.php">Ikusi erabiltzailearen galderak</a></li>
	            </ul>
	          </li>
	          <li><a href="handlingQuizes.php">Galderak txertatu</a></li>
	          <li><a href="#" tabindex="1">Saioa<span class="arrow-down"></span></a>
	            <ul class="dropdown">
	              <li><a href="SignIn.php">Saioa hasi<img src="irudiak/login-icon.png"></a></li>
	              <li><a href="LogOut.php">Saioa amaitu<img src="irudiak/logout-icon.png"></a></li>
	              <li><a href="SignUp.php">Erregistratu<img src="irudiak/signup-icon.png"></a></li>
	            </ul>
	          </li>
	          <li><a href="#">NABIGAZIOA BUKATU ETA HOBETU BEHAR DA</a></li>
	        </ul>
	      </div>
	      <div class="nav_bg">
	        <div class="nav_bar"> <span></span> <span></span> <span></span> </div>
	      </div>
	  </div>
	</div>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
	<script>
	$(document).ready(function(){
			$('.nav_bar').click(function(){
				$('.navigation').toggleClass('visible');
				$('body').toggleClass('opacity');
			});
		});
	</script>
<!-- Mugikorretan soilik agertuko da goiko zatia (<div id="main" class="bakarrikMugikorra">) -->
	
	<?php
	if($_SESSION['erabiltzaileMota']=="GUEST") {
      	echo'<a href="signUp.php"><img class="botoia"  src="irudiak/signup-icon.png"></a>
      	<a href="SignIn.php"><img class="botoia"  src="irudiak/login-icon.png"></a>';
	} else {
		echo '<a href="LogOut.php"><img class="botoia"  src="irudiak/logout-icon.png"></a>';
	}
    ?>
      
	<a href="layout.php"><img class="logo" src="irudiak/quiz-logo.png"></a>
	<?php
	//hurrengo kodeak ez du ezer erakusten, baina botoiak jartzen ditu baita ere ezkerraldean logoa zentratua egoteko
	if($_SESSION['erabiltzaileMota']=="GUEST") {
      	echo'<a href="signUp.php"><img style="float:left; visibility:hidden" class="botoia"  src="irudiak/signup-icon.png"></a>
      	<a href="SignIn.php"><img style="float:left; visibility:hidden" class="botoia"  src="irudiak/login-icon.png"></a>';
	} else {
		echo '<a href="LogOut.php"><img style="float:left; visibility:hidden" class="botoia"  src="irudiak/logout-icon.png"></a>';
	}
    ?>
    </header>
<nav class='main desktopSoilik' id='n1' role='navigation'>
	<?php 
	if($_GET['orrialdea']=="layout")
		echo ('<a href="layout.php"><span class="act-sel">Hasiera<div class="arrow-right"></div></span></a>');
	else
		echo ('<a href="layout.php"><span>Hasiera</span></a>');
	if($_GET['orrialdea']=="galderakIkusi")
		echo('<a href="seeXMLQuestions.php"><span class="act-sel">Galderak<div class="arrow-right"></div></span></a>');
	else
		echo('<a href="seeXMLQuestions.php"><span>Galderak</span></a>');
	if($_SESSION['erabiltzaileMota'] != "GUEST") {
		if($_GET['orrialdea']=="handlingQuizes")
		echo ('<a href="handlingQuizes.php"><span class="act-sel">Galderak sortu<div class="arrow-right"></div></span></a>');
	else
		echo ('<a href="handlingQuizes.php"><span>Galderak sortu</span></a>');
	}
	if($_SESSION['erabiltzaileMota'] == "IRAKASLEA") {
		if($_GET['orrialdea']=="ikasleakIkusi")
			echo'<a href="getUserInform.php"><span class="act-sel">Ikasleak ikusi<div class="arrow-right"></div></span></a>';
		else
			echo'<a href="getUserInform.php"><span>Ikasleak ikusi</span></a>';
	}
	if($_GET['orrialdea']=="erabiltzaileakIkusi")
			echo'<a href="erabiltzaileakIkusi.php"><span class="act-sel">Erabiltzaileak ikusi<div class="arrow-right"></div></span></a>';
		else
			echo'<a href="erabiltzaileakIkusi.php"><span>Erabiltzaileak ikusi</span></a>';
	if($_GET['orrialdea']=="credits")
		echo('<a href="credits.php"><span class="act-sel">Kredituak<div class="arrow-right"></div></span></a>');
	else
		echo('<a href="credits.php"><span>Kredituak</span></a>');
	?>
	</nav>