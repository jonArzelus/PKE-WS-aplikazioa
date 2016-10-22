<?php

	session_start();
	$_SESSION['eposta'] = "guest";
	$_SESSION['konexioid'] = -1;
	header("Location:layout.php");
?>