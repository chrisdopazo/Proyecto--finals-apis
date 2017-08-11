<?php
	include 'conn.php';
        
	$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
	if ($conn->connect_error) {
 
	die("Conneccion Falllida: " . $conn->connect_error);
} 
$sql = "SELECT * FROM juego WHERE UsuGanador = 'Usuario1'";
$sql2 = "SELECT * FROM juego WHERE UsuGanador = 'Usuario2'";
$juego = $conn->query($sql);
$juego2 = $conn->query($sql2);
if ($juego->num_rows >0) {
 
 
 echo 'Gano el usuario 1 , la sala se va a eliminar';
 
 
 
 
 }
 
else if ($juego2->num_rows >0)
{
    
    echo 'Gano el usuario 2 , la sala se va a eliminar';
    
    
}
 echo $json;
$conn->close(); 
?>