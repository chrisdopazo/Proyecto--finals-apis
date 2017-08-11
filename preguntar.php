<?php
	include 'conn.php';
        
	$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
	if ($conn->connect_error) {
 
	die("Conneccion Falllida: " . $conn->connect_error);
} 
$sql = "SELECT * FROM apuesta WHERE Usuario2 = ''";
$juego = $conn->query($sql);
if ($juego->num_rows >0) {
 
 
 echo 'Puede entrar a sala';
 
 
 }
 
else {
echo 'Ya esta la sala ocupada';
}
 echo $json;
$conn->close();
?>