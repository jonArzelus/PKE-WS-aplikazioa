<?php
	$_GET['orrialdea'] = "erabiltzaileakIkusi";
	include 'php/orrialdeGoia.php';
	echo('</head>
		<body>');
	include 'php/orrialdeNabigazioa.php';
?>
    <div class="container">
	<div class="panel panel-default col-md-12">
			  <div class="panel-heading"><h1>Erabiltzaileen zerrenda osoa irudiekin</h1></div>
			  <div class="panel-body">
    <?php
    	include 'ShowUsersWithImage.php';
    ?>
    </div>
			</div>
    </div>
<?php include 'php/orrialdeOina.php'; ?>