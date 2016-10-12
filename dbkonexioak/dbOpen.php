<?php
include 'dbkonexioak/dbConfig.php';
$db = new mysqli(HOST, USER, PASS, DATABASE);

	if($db->connect_error){
		die ("Datu basera konektatzean akatsa egon da: (".$db->connect_errno.")".$db->connect_error);
	}else{
		echo("Datu basera konexioa ongi burutu da:".$db->host_info."</br>");
	}

?>
