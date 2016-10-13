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
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
      <span class="right"><a href="SignIn.php">Sign In</a> / <a href="signUp.html">Sign Up</a></span>
      <span class="right" style="display:none;"><a href="/logout">Log Out</a> </span>
	<h2>Quiz: crazy questions</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href='layout.html'>Home</a></span>
		<span><a href='Quizzes.php'>Quizzes</a></span>
		<span><a href='credits.html'>Credits</a></span>
	</nav>
    <section class="main" id="s1">
		
	
	<div>
		<?php
			include 'dbkonexioak/dbOpen.php';
		
			$sql="SELECT galderaTestua, zailtasuna FROM quiz";
			$emaitza=$db->query($sql);
			if($emaitza){
				echo '<table border=2><tr><th> GALDERA </th><th> ZAILTASUNA </th>';
				while ($lerroa = $emaitza->fetch_array(MYSQLI_BOTH)){
					echo '<tr><td>'.$lerroa['galderaTestua'].'</td><td>'.$lerroa['zailtasuna'].'</td></tr>';
				}
				echo '</table>';
			}else{
				echo("Errore bat egon da galdera gehitzean: ".$db->error);
			}
			include 'dbkonexioak/dbClose.php';
		?>
	</div>
		
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://en.wikipedia.org/wiki/Quiz" target="_blank">What is a Quiz?</a></p>
		<a href='https://github.com/berrio86/wsGit16'><img style="width:3%" src="irudiak/github-icon.png"></a>
	</footer>
</div>
</body>
</html>