<?php 

//datu basearekin konexioa sortu
//$esteka = mysqli_connect("mysql.hostinger.es", "u880556081_weba", "pertsona1", "u880556081_perts"); //hostinger esteka
$esteka = mysqli_connect("localhost", "root", "", "erabiltzaileak"); //localhost esteka

$erabiltzaileak = "SELECT * FROM erabiltzaileak";
$emaitza = $esteka->query($erabiltzaileak); 
echo '<table border=2><tr><th> IZEN-ABIZENAK </th><th> POSTA </th><th> TELEFONOA </th><th> ESPEZIALITATEA </th><th> IRUDIA </th>';

while ($lerroa = $emaitza->fetch_array(MYSQLI_BOTH)){
echo '<tr><td>'.$lerroa['IzenAbizena'].'</td><td>'.$lerroa['PostaElektronikoa'].'</td><td>'.$lerroa['TelefonoZenbakia'].'</td><td>'.$lerroa['Espezialitatea'].'</td><td>'.
	'hemen argazkia sartuko dut geroago'.'</td></tr>';
}
echo '</table>';

$esteka -> close();

?>