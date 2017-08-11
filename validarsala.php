<?php
	include 'conn.php';
         echo 'El usuario ya eligio cara , le queda elegir seca';
	$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
	if ($conn->connect_error) {
 
	die("Conneccion Falllida: " . $conn->connect_error);
} 
$sql = "SELECT * FROM `apuesta` WHERE `Usuario1` = "cara"";
$juego = $conn->query($sql);
if ($juego->num_rows >0) {
 
 
 while($row[] = $juego->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);
 
 echo 'El usuario ya eligio cara , le queda elegir seca';
 
 
 }
 
} else {
 echo "No hay resultados.";
}
 echo $json;
$conn->close();
?>