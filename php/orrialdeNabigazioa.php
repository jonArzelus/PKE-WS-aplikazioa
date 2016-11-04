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
      <div class="navigation">
        <ul>
          <li><a href="">Hasiera</a></li>
          <li><a href="">Galderak</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="#" tabindex="1">Services<span class="arrow-down"></span></a>
            <ul class="dropdown">
              <li><a href="">Services - 1</a></li>
              <li><a href="">Services - 2</a></li>
              <li><a href="">Services - 3</a></li>
              <li><a href="">Services - 4</a></li>
              <li><a href="">Services - 5</a></li>
            </ul>
          </li>
          <li><a href="#" tabindex="1">Saioa<span class="arrow-down"></span></a>
            <ul class="dropdown">
              <li><a href="">Saioa hasi<img class="botoia"  src="irudiak/login-icon.png"></a></li>
              <li><a href="">Works - 2</a></li>
              <li><a href="">Works - 3</a></li>
              <li><a href="">Works - 4</a></li>
              <li><a href="">Works - 5</a></li>
            </ul>
          </li>
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