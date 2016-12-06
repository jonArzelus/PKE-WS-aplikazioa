<?php
	$_GET['orrialdea'] = "quizzes";
	include 'php/orrialdeGoia.php';
	echo('</head>
		<body>');
	include 'php/orrialdeNabigazioa.php';
?>
    <section class="container">
		
	
	<div>
		<?php
			include 'dbkonexioak/dbOpen.php';

			//sesio informazioa gorde ekintzetan
			//session_start();
			$eposta=$_SESSION['eposta'];
			$konexioid = $_SESSION['konexioid'];
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    			$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
    			$ip = $_SERVER['REMOTE_ADDR'];
			}
			$ekintza = "galderak ikusi";
			date_default_timezone_set('Europe/Madrid');
			$data = date(DATE_RSS, time());
			$sqlekintza="INSERT INTO ekintzak(konexioa, postaElektronikoa, ekintzaMota, ekintzaData, IP) VALUES ('$konexioid', '$eposta', '$ekintza', '$data', '$ip')";
			$emaitza=$db->query($sqlekintza);
			if(!$emaitza) {
				echo("Errore bat egon da ekintza gehitzean: ".$db->error);
			}
			$sql="SELECT galderaTestua, zailtasuna FROM quiz";
			$emaitza=$db->query($sql);
			if($emaitza){
				echo '<table class="table table-striped"><tr><th> GALDERA </th><th> ZAILTASUNA </th>';
				while ($lerroa = $emaitza->fetch_array(MYSQLI_BOTH)){
					echo '<tr><td>'.$lerroa['galderaTestua'].'</td><td>'.$lerroa['zailtasuna'].'</td></tr>';
				}
				echo '</table>';
			}else{
				echo("Errore bat egon da galdera gehitzean: ".$db->error);
			}
			/*foreach($_SESSION as $key => $value) { 
    			echo $key . " = " . $value . "<br>"; 
			}*/
			include 'dbkonexioak/dbClose.php';
		?>
	</div>
		
    </section>
<?php include 'php/orrialdeOina.php'; ?>