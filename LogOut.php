<?php

	session_start();
	$_SESSION['eposta'] = "guest";
	$_SESSION['konexioid'] = -1;
	$_SESSION['erabiltzaileMota'] = "GUEST";
	header("Location:layout.php");
?>