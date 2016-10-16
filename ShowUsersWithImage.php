<?php 

include 'dbkonexioak/dbOpen.php';


$erabiltzaileak = "SELECT * FROM erabiltzaileak";
$emaitza = $db->query($erabiltzaileak); 
echo '<table border=2><tr><th> IZEN-ABIZENAK </th><th> POSTA </th><th> TELEFONOA </th><th> ESPEZIALITATEA </th><th> IRUDIA </th>';

while ($lerroa = $emaitza->fetch_array(MYSQLI_BOTH)){
echo '<tr><td>'.$lerroa['IzenAbizena'].'</td><td>'.$lerroa['PostaElektronikoa'].'</td><td>'.$lerroa['TelefonoZenbakia'].'</td><td>'.$lerroa['Espezialitatea'].'</td><td>'.
	'<img alt="Erabiltzaile honek ez du argazkirik." src="'.$lerroa['Argazkia'].'" width="100" height="80">'.'</td></tr>';
}
echo '</table>';

echo "</br></br> Hasierara bueltatu nahi baduzu, klikatu hurrengo estekan: <a href='".HASIERA."'> Hasiera </a></br></br>";


include 'dbkonexioak/dbClose.php';

?>