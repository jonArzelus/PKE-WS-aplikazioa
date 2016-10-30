<?php
	$_GET['orrialdea']="handlingQuizes";
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
	<title>Quizzes</title>
    <link rel='stylesheet' type='text/css' href='stylesPWS/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='stylesPWS/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='stylesPWS/smartphone.css' />
	  
	 <script type="text/javascript" language="javascript">
		
		xhttp = new XMLHttpRequest();
		
		function galderakIkusi(){
			xhttp.onreadystatechange = function(){
				if((xhttp.readyState==4) && (xhttp.status==200)){
					document.getElementById("erabiltzaile_galderak").innerHTML=xhttp.responseText;
				}
			}
			xhttp.open("GET","galderakIkusi.php", true);
			xhttp.send();
		}
		
		function galderaBidali(galdera, erantzuna, zailtasuna, arloa){
			xhttp.onreadystatechange = function(){
				if((xhttp.readyState==4) && (xhttp.status==200)){
					document.getElementById("mezuak").innerHTML=xhttp.responseText;
				}
					
					
				}
				xhttp.open("GET","galderakSartuAjax.php?galdera="+galdera+"&erantzuna="+erantzuna+"&zailtasuna="+zailtasuna+"&arloa="+arloa, true);
				xhttp.send();
				/*xhttp.open("POST","galderakSartuAjax.php", true);
				xhttp.send("galdera="+galdera+"&erantzuna="+erantzuna+"&zailtasuna="+zailtasuna+"&arloa="+arloa);*/
		}
		
		 
		function dbDatuakIkusi(){
			xhttp.onreadystatechange=function(){
			if((xhttp.readyState==4) && (xhttp.status==200)){
				document.getElementById("kopurua").innerHTML=xhttp.responseText;
			}
			}
			xhttp.open("GET","galderaKopurua.php",true);
			xhttp.send();
		}
		function freskatu(){
			alert("hello4");
			dbDatuakIkusi();
			setInterval(dbDatuakIkusi,5000);
		}
		
	</script>
  </head>
  <body onload="dbDatuakIkusi()">
  <div id='page-wrap'>
	<header class='main' id='h1'>

	<?php
	echo '<div class="botoia-left"> Erabiltzailea: ' . $_SESSION['eposta'] . ' - ' . $_SESSION['erabiltzaileMota'] . '</div>';
	?>
	
	<?php
	if($_SESSION['erabiltzaileMota']=="GUEST") {
      	echo'<a href="signUp.php"><div class="botoia-right">Sign Up</div></a><a href="SignIn.php"><div class="botoia-right">Sign In</div></a>';
	} else {
		echo '<a href="LogOut.php"><div class="botoia-right">Log Out</div></a>';
	}
    ?>
      
	<h2>Quiz: crazy questions</h2>
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
	
    <section class="main" id="s1">
		
	<div class='login'>
		<div class="login-header2">
			<h1>Sartu Galdera</h1>
		</div>
		<div id="kopurua">
		</div>

		<form id="galdera_sartu" name="galdera_sartu" method="POST" enctype="multipart/form-data">
			<div class="login-form">
				<h3>Galdera:</h3> 
  				<input type="text" id="galdera" name="galdera" title="Sartu zure galdera." placeholder="Sartu zure galdera" required><br>
				<h3>Erantzuna:</h3>
 				<input type="text" id="erantzuna"  name="erantzuna" title="Sartu galderaren erantzuna." placeholder="Sartu galderaren erantzuna" required><br>
 				<h3>Arloa:</h3>
 				<input type="text" id="arloa" name="arloa" title="Sartu galderaren arloa." placeholder="Sartu galderaren arloa"><br>
				<h3>Zailtasuna:</h3>
 				<select id="zailtasuna" name="zailtasuna" >
  					<option value="1">1 - Oso erraza</option>
  					<option value="2">2 - Erraza</option>
  					<option value="3">3 - Erdibidekoa</option>
  					<option value="4">4 - Zaila</option>
					<option value="5">5 - Oso zaila</option>
				</select><br>
				<input type="button" name="galderakBidali" id="galderakBidali" value="Bidali" onclick="galderaBidali(galdera.value,erantzuna.value,zailtasuna.value,arloa.value)"\>
				
				
				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
			</div>	
		</form> 
		<input type="button" name="galderakIkusi" id="galderakIkusi" value="Zure galderak ikusi" onclick="galderakIkusi()"\>
		
		<div id="erabiltzaile_galderak">
		</div>
		<div id="mezuak">
		</div>
	</div>
    </section>
<?php include 'orrialdeOina.php'; ?>

