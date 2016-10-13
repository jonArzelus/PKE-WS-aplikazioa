<?php 

include 'dbkonexioak/dbOpen.php';

if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
		null;
	} else { //post eskaera landu	
		$eposta= $_POST['eposta'];
		$pass= $_POST['pasahitza'];
}
		
$erabiltzaileak = "SELECT * FROM erabiltzaileak WHERE PostaElektronikoa='$eposta' AND Pasahitza='$pass'";
$emaitza = $db->query($erabiltzaileak); 
$user = $emaitza->fetch_array(MYSQLI_BOTH);

if(empty($user)){
	echo("Eragiketa ez da ongi burutu, saiatu zaitez berriro.");
}else{
	$izena = $user['IzenAbizena'];
	$posta = $user['PostaElektronikoa'];
	echo("Zure erabiltzailea: ".$izena."</br>");
	echo("Zure emaila: ".$posta."</br>");
}

include 'dbkonexioak/dbClose.php';

?>