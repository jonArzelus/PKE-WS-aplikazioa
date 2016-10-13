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
		<form id="galdera_sartu" name="galdera_sartu" method="POST" action="InsertQuestion.php" enctype="multipart/form-data">
  			Galdera: 
  			<input type="text" name="galdera" title="Sartu zure galdera."><br>
			Erantzuna:
 			<input type="text" name="erantzuna" title="Sartu galderaren erantzuna."><br>
			Zailtasuna:
 			<select id="zail" name="zailtasuna" >
  				<option value="1">1</option>
  				<option value="2">2</option>
  				<option value="3">3</option>
  				<option value="4">4</option>
				<option value="5">5</option>
			</select><br>
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
if(isset($_POST['galdera']) && isset($_POST['erantzuna'])){
	include 'dbkonexioak/dbOpen.php';
	session_start();
	$eposta=$_SESSION['eposta'];
	
	if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
		null;
	} else { //post eskaera landu	
		$galdera= $_POST['galdera'];
		$erantzuna= $_POST['erantzuna'];
		$zailtasuna= $_POST['zailtasuna'];
	}
	
	
	if(($galdera=="")||($erantzuna=="")){
		echo("Mesedez bete galderak modu egokian.</br>");
	}else{
		$sartu = "INSERT INTO quiz (egilePosta, galderaTestua, erantzunTestua, zailtasuna) VALUES ('{$eposta}', '{$galdera}', '{$erantzuna}', '{$zailtasuna}')";
		$emaitza=$db->query($sartu);
		if($emaitza){
			echo("Zure eposta: ".$eposta."</br>");
			echo("Zure galdera: ".$galdera."</br>");
			echo("Zure erantzuna: ".$erantzuna."</br>");
			echo("Zailtasun maila: ".$zailtasuna."</br>");
			echo("Zure galdera egoki sartu da. Sartu beste bat nahi izanez gero. </br>");
		}else{
			echo("Errore bat egon da galdera gehitzean: ".$db->error);
		}	
	}
	
	
	
	
	
	
	include 'dbkonexioak/dbClose.php';
}

?>
