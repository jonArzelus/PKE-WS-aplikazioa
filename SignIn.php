<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Sign In</title>
    <!--<link rel='stylesheet' type='text/css' href='stylesPWS/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='stylesPWS/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='stylesPWS/smartphone.css' />-->
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
      <span class="right"><a href="layout.html">Home</a> </span>
      
	<h2>Quiz: crazy questions</h2>
    </header>
	
    <section class="main" id="s1">
		
	
	<div>
	<form id="logeatu" name="logeatu" method="POST" action="SignIn.php" enctype="multipart/form-data">
  			Posta-elektronikoa: 
  			<input type="text" name="eposta" title="Sartu zure emaila."><br>
			Pasahitza:
 			<input type="password" name="pasahitza" title="Sartu zure pasahitza."><br>
			<input type="submit" name="button" value="Bidali">
			
			
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
<?php 

if (isset($_POST['eposta'])){
include 'dbkonexioak/dbOpen.php';

if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
		null;
	} else { //post eskaera landu	
		$eposta= $_POST['eposta'];
		$pass= $_POST['pasahitza'];
}
		
$erabiltzaileak = "SELECT * FROM erabiltzaileak WHERE PostaElektronikoa='$eposta' AND Pasahitza='$pass'";
$emaitza = $db->query($erabiltzaileak); 
$user = $emaitza->fetch_array(MYSQLI_BOTH);

if(empty($user)){
	echo("Eragiketa ez da ongi burutu, saiatu zaitez berriro.");
}else{
	header("Location:InsertQuestion.php");
    exit;
	
}

include 'dbkonexioak/dbClose.php';
}
?>