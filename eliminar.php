<?php
	include 'conn.php';
        
	$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
	if ($conn->connect_error) {
 
	die("Conneccion Falllida: " . $conn->connect_error);
} 
$sql = "DELETE FROM sala WHERE id = '4'";
$juego = $conn->query($sql);
if ($juego->num_rows >0) {
 
 
 echo 'Sala eliminada';
 
 
 }
 
else {
echo 'No se encontro esa sala';
}
 echo $json;
$conn->close();
?>