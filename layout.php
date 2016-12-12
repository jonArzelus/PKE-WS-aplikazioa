<?php
	$_GET['orrialdea'] = "layout";
	include 'php/orrialdeGoia.php';
	echo('</head>
		<body>');
	include 'php/orrialdeNabigazioa.php';
?>
    <div class="container">
		<br>
	<!--<?php echo $_SESSION['eposta']; ?>-->

	<div class="jumbotron">
	  <h1>Ongi etorri!</h1>
	  <p>Hemengo orrialde honetan quizz-ak agertuko dira hurrengo laborategietan.</p>
	  <p><a class="btn btn-primary btn-lg" href="credits.php" role="button">Kredituak</a></p>
	</div>
		
    </div>
<?php include 'php/orrialdeOina.php'; ?>
