<?php
include 'dbkonexioak/dbOpen.php';
	
	$zenbakia=$_GET['zenbakia'];
	$galdera=$_GET['galdera'];
	$erantzuna=$_GET['erantzuna'];
	$zailtasuna=$_GET['zailtasuna'];

	$sqlekintza="UPDATE quiz SET galderaTestua='$galdera', erantzunTestua='$erantzuna', zailtasuna='$zailtasuna' WHERE galderaZenbakia='$zenbakia'";
	$emaitza=$db->query($sqlekintza);
	if(!$emaitza) {
		echo("Errore bat egon da datuak eguneratzean gehitzean: ".$db->error);
	} else {
		$message = "galdera ondo editatua. onartu berbideratzeko";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Location:reviewingQuizes.php");
	}

include 'dbkonexioak/dbClose.php';
?>