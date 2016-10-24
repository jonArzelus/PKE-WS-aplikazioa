<?php

	session_start();
	//ikus ea sesio bat hasi den eta ez bada hala guest ezarri
	if(isset($_SESSION['konexioid']) && !empty($_SESSION['konexioid'])) {
   		null;
	} else {
		$_SESSION['eposta'] = "guest";
		$_SESSION['konexioid'] = -1;
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
	<script type="text/javascript">
		function begiratu(){
			
			var dago=false;
			var xmlDoc = document.getElementById('datuak').contentDocument;
			
			var kor = document.getElementById("emaila").value;
			var epostenZer=xmlDoc.getElementsByTagName("eposta");
			var tfnoZer=xmlDoc.getElementsByTagName("telefonoa");
			var izenZer=xmlDoc.getElementsByTagName("izena");
			var AbizenZer=xmlDoc.getElementsByTagName("abizena1");
			var Abizen2Zer=xmlDoc.getElementsByTagName("abizena2");
			
			
			for (var i = 0; i < epostenZer.length; i++) {
				if (kor==epostenZer[i].childNodes[0].nodeValue){
					document.getElementById('tfonoa').value=tfnoZer[i].childNodes[0].nodeValue;
					document.getElementById('izena').value=izenZer[i].childNodes[0].nodeValue +"  " + AbizenZer[i].childNodes[0].nodeValue + "  " + Abizen2Zer[i].childNodes[0].nodeValue ;
					dago=true;
					break;
				}
			}
			if(!dago){
				alert("Eposta hau ez dago UPV/EHUn erregistraturik. Sar ezazu beste bat");
			}

		}
	</script>
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>

	<?php
	echo '<div class="botoia-left"> Erabiltzailea: ' . $_SESSION['eposta'] . '</div>';
	?>
	
	<?php
	if($_SESSION['eposta']=="guest") {
      	//echo'<span class="right"><a href="SignIn.php">Sign In</a> / <a href="signUp.html">Sign Up</a></span>';
      	echo'<a href="SignIn.php"><div class="botoia-right">Sign In</div></a><a href="signUp.php"><div class="botoia-right">Sign Up</div></a>';
	} else {
		//echo '<span class="right"><a href="LogOut.php">Log Out</a> </span>';
		echo '<a href="LogOut.php"><div class="botoia-right">Log Out</div></a>';
	}
    ?>
      
	<h2>Quiz: crazy questions</h2>
	<OBJECT id="datuak" data="xml/erabiltzaileak.xml" type="text/xml" style="display:none"></OBJECT>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<a href='layout.php'><span >Hasiera</span></a>
		<a href='Quizzes.php'><span>Galderak</span></a>
	<?php
	if($_SESSION['eposta'] != "guest")
		echo'<a href="InsertQuestion.php"><span>Galdera Sortu</span></a>';
	if($_SESSION['eposta'] == "rosa123@ikasle.ehu.eus")
		echo'<a href="getUserInform.php"><span class="act-sel">Ikaslea begiratu</span></a>';
	?>
		<a href='credits.php'><span>Kredituak</span></a>
	</nav>
    <section class="main" id="s1">
		
	<h1>Sartu ikaslearen e-maila</h1> <br/>
	<div>
		<form id="ikasle_emaila" name="ikasle_emaila">
			
  				<h3>Posta-elektronikoa:</h3> 
  				<input type="text" id="emaila" name="emaila" required  title="Sartu ikasle emaila" placeholder="E-mail" oninvalid="this.setCustomValidity('Sartu ikasle baten e-posta')"><br><br>
				<h3>Ikaslearen izena:</h3>
 				<input type="text" id="izena" name="ikasle_izena" title="Hau da ikaslearen izena." placeholder="Ikasle izena"><br><br>
				<h3>Telefono zenbakia:</h3>
 				<input type="text" id="tfonoa" name="telefono_zenbakia" title="Hau da ikaslearen telefono zenbakia." placeholder="Telfono zenbakia"><br><br>
				<br><br>
				<input type="button" class="ikasle-botoia" name="button" value="Begiratu" onClick="begiratu()">
			
		</form>
	</div>
		
		
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://en.wikipedia.org/wiki/Quiz" target="_blank">What is a Quiz?</a></p>
		<a href='https://github.com/berrio86/wsGit16'><img style="width:3%" src="irudiak/github-icon.png"></a>
	</footer>
</div>
</body>
</html>