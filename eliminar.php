<?php
	include 'conn.php';
        
	$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
	if ($conn->connect_error) {
 
	die("Conneccion Falllida: " . $conn->connect_error);
} 
$sql = "DELETE FROM sala WHERE id = '4'";
$juego = $conn->query($sql);
{
 
 
 echo 'Sala Eliminada';
 
 
 }
 
 echo $json;
$conn->close();
?>