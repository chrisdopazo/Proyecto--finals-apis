<?php


if($_SERVER['REQUEST_METHOD']=='POST'){

include 'conn.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $nombre = $_POST['nombre'];

 
if (strlen(trim($nombre)) < 8)) {
  echo  "Ingrese un Email Correcto"; 
  die;
}
else{

 $CheckSQL = "SELECT * FROM sala WHERE nombre='$nombre'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'Ya hay una sala este Email';

 }
else{ 
$Sql_Query = "INSERT INTO sala (nombre) values ('$nombre')";

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
}

 mysqli_close($conn);
?>