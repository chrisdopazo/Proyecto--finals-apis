<?php


if($_SERVER['REQUEST_METHOD']=='POST'){

include 'conn.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $nombre = $_POST['nombre'];
 $juego = $_POST['juego'];

 


 $CheckSQL = "SELECT * FROM sala WHERE nombre='$nombre'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'Ya hay una sala con este nombre';

 }
else{ 
$Sql_Query = "INSERT INTO sala (nombre,juego,idUsuario1,idUsuario2,ApuUsu1,ApuUsu2,idUsuGanador,Resultado) values ('$nombre','$juego','0','0','ut','ut','0','ut')";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Sala Creada . Muchas Gracias!';
}
else
{
 echo 'Hubo un Error . Intente de Nuevo';
 }
}
}
?>