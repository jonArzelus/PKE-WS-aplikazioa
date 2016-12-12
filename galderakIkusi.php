<?php
	session_start();
	/*//ikus ea sesio bat hasi den eta ez bada hala guest ezarri
	if((isset($_SESSION['eposta']) && !empty($_SESSION['eposta'])) && (isset($_SESSION['konexioid']) && !empty($_SESSION['konexioid'])) && (isset($_SESSION['erabiltzaileMota']) && !empty($_SESSION['erabiltzaileMota']))) {
   		null;
	} else {
		$_SESSION['eposta'] = "Erabiltzaile Anonimoa";
		$_SESSION['konexioid'] = -1;
		$_SESSION['erabiltzaileMota'] = "GUEST";
	}*/

	
	include"dbkonexioak/dbOpen.php";

	$eposta=$_SESSION['eposta'];
	$konexioid=$_SESSION['konexioid'];
	$erabiltzailemota=$_SESSION['erabiltzaileMota'];
	
	$galdera = "SELECT * FROM quiz WHERE egilePosta='{$eposta}'";
	$emaitza = $db->query($galdera); 
	echo ('<table class="table table-striped"><tr><th> Galdera </th><th> Erantzuna </th><th> Zailtasuna </th><th> Arloa </th></tr>');
	while ($lerroa = $emaitza->fetch_assoc()){
		echo ("<tr><td>".$lerroa['galderaTestua']."</td><td>".$lerroa['erantzunTestua']."</td><td>".$lerroa['zailtasuna']."</td><td>".$lerroa['galderaArloa']."</td></td	>");
	}
	echo("</table>");

	include "dbkonexioak/dbClose.php";
	
?>