<?php
error_reporting(E_ERROR | E_PARSE);
$sql_query = "INSERT INTO usuarios (nombre, apellido , email , password) VALUES ('$nombre', '$apellido', '$email', '$password');";
//$sql_query = "INSERT INTO artistas (Usuario, PrimerNombre, Apellido, Sexo, Password, Mail, FechaDeNacimiento, CiudadDeResidencia, PaisDeResidencia) VALUES ('joaco', 'joaquin', 'borovich', 'masculino', 'micaieru', 'joaco@joaco.com', '30/03/00', 'CABA', 'Arg');";
if (mysqli_query($con, $sql_query))
{
  $mensajes += "Bienvenido!";
}
/*
else
{
 $mensajes += mysqli_error($con) . "/";
}
*/
?>