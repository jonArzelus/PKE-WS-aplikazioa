<?php
	$_GET['orrialdea'] = "erabiltzaileakIkusi";
	include 'php/orrialdeGoia.php';
	echo('</head>
		<body>');
	include 'php/orrialdeNabigazioa.php';
?>
    <section class="container">
	
    <?php
    	echo("<h1>Erabiltzaileen zerrenda osoa irudiekin</h1></br></br>");
    	include 'ShowUsersWithImage.php';
    ?>
    </section>
<?php include 'php/orrialdeOina.php'; ?>