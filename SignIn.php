<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Sign In</title>
	<link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel='stylesheet' type='text/css' href='stylesPWS/signIn.css' />
	   
  </head>
  <body>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	  
  	<div class='login'>
	<div class="login-header">
		<h1>Sign In</h1>
	</div>
	
		<form id="logeatu" name="logeatu" method="POST" action="SignIn.php" enctype="multipart/form-data">
			<div class="login-form">
  				<h3>Posta-elektronikoa:</h3> 
  				<input type="text" name="eposta" title="Sartu zure emaila." placeholder="E-mail"><br>
				<h3>Pasahitza:</h3>
 				<input type="password" name="pasahitza" title="Sartu zure pasahitza." placeholder="Password"><br>
				<input type="submit" class="login-button" name="button" value="Bidali">
				<a class="sign-up" href="signUp.html">Erregistratu</a><br>
				<a class="no-access" href="layout.php">Hasiera</a>
			</div>
		</form>
	</div>
	<?php 

if (isset($_POST['eposta'])){
	include 'dbkonexioak/dbOpen.php';
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
			null;
		} else { //post eskaera landu	
			$eposta= $_POST['eposta'];
			$pass= $_POST['pasahitza'];
	}
	//guest izeneko erabiltzailea jarri
	$_SESSION['eposta']= $eposta;
	$erabiltzaileak = "SELECT * FROM erabiltzaileak WHERE PostaElektronikoa='$eposta' AND Pasahitza='$pass'";
	$emaitza = $db->query($erabiltzaileak); 
	$user = $emaitza->fetch_array(MYSQLI_BOTH);
if(empty($user)){

	$_SESSION['eposta']= "guest";
	$_SESSION['konexioid'] = -1;
	echo("<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
		<div class='error-page'>
				<div class='try-again'>
					Eragiketa ez da ongi burutu, saiatu zaitez berriro.</br>
					Errorea: Saiatu berriro?
				</div>
		</div>
		<script src='js/signIn.js'></script>");
}else{
	//konexio zuzena datubasean gorde
	date_default_timezone_set('Europe/Madrid');
	$data = date(DATE_RSS, time());
	$konexiolog = "INSERT INTO konexioak (postaElektronikoa, konexioData) VALUES('$eposta', '$data')"; //date(DATE_RSS, time()
	//$db->query($erabiltzaileak); 
	if ($db->query($konexiolog) === TRUE) {
    echo "New record created successfully";
	} else {
	    echo "Error: " . $konexiolog . "<br>" . $db->error;
	}
	//konexioaren emaila ezarri
	$_SESSION['eposta']= $eposta;
	$konexiosql = "SELECT ID FROM konexioak WHERE PostaElektronikoa='$eposta' AND konexioData='$data'";
	$konarray = $db->query($konexiosql);
	if (!$konarray) {
    	echo 'Could not run query: ' . $db->error;
    	exit;
	} else {
		$row = $konarray->fetch_array(MYSQL_NUM);
		$_SESSION['konexioid'] = $row[0];
		//erabiltzaile mota lortu
		$erabiltzailesql = "SELECT erabiltzaileMota FROM erabiltzaileak WHERE PostaElektronikoa='$eposta'";
		$erabiltzailearray = $db->query($erabiltzailesql);
		if (!$erabiltzailearray) {
    		echo 'Could not run query: ' . $db->error;
    		exit;
    	}
		$row = $erabiltzailearray->fetch_array(MYSQL_NUM);
		$_SESSION['erabiltzaileMota'] = $row[0];
		echo "Konexioa ondo gordeta!";
		header("Location:layout.php");
    	exit;
	}	
}
include 'dbkonexioak/dbClose.php';
}

?>  
	
		
   	<div class="footer">
		<footer class='main' id='f1'>
			<p><a href="http://en.wikipedia.org/wiki/Quiz" target="_blank">What is a Quiz?</a></p>
			<a href='https://github.com/berrio86/wsGit16'><img style="width:3%" src="irudiak/github-icon.png"></a>
		</footer>
	</div>

</body>
</html>

