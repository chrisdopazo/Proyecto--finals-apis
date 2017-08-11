<?php
	include 'conn.php';
        
	$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
	if ($conn->connect_error) {
 
	die("Conneccion Falllida: " . $conn->connect_error);
} 
$sql = "SELECT * FROM apuesta WHERE Usuario1 = 'cara'";
$juego = $conn->query($sql);
if ($juego->num_rows >0) {
 
 
 echo 'El usuario ya eligio cara , le queda elegir seca';
 
 
 }
 
else {
echo 'El usuario ya eligio seca , le queda elegir cara';
}
 echo $json;
$conn->close();
?>