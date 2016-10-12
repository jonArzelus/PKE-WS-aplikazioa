<?php 

include 'dbkonexioak/dbOpen.php';



//datu basearekin konexioa sortu
//$esteka = mysqli_connect("mysql.hostinger.es", "u880556081_weba", "pertsona1", "u880556081_perts"); //hostinger esteka
//$esteka = mysqli_connect("localhost", "root", "", "erabiltzaileak"); //localhost esteka

$erabiltzaileak = "SELECT * FROM erabiltzaileak";
$emaitza = $db->query($erabiltzaileak); 
echo '<table border=2><tr><th> IZEN-ABIZENAK </th><th> POSTA </th><th> TELEFONOA </th><th> ESPEZIALITATEA </th><th> IRUDIA </th>';

while ($lerroa = $emaitza->fetch_array(MYSQLI_BOTH)){
echo '<tr><td>'.$lerroa['IzenAbizena'].'</td><td>'.$lerroa['PostaElektronikoa'].'</td><td>'.$lerroa['TelefonoZenbakia'].'</td><td>'.$lerroa['Espezialitatea'].'</td><td>'.
	'<img alt="Erabiltzaile honek ez du argazkirik." src="'.$lerroa['Argazkia'].'" width="100" height="80">'.'</td></tr>';
}
echo '</table>';

echo "</br></br> Hasierara bueltatu nahi baduzu, klikatu hurrengo estekan: <a href='layout.html'> Hasiera </a></br></br>";

//$esteka -> close();

include 'dbkonexioak/dbClose.php';

?>