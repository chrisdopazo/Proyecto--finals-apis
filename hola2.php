<?php   

   if($_SERVER['REQUEST_METHOD']=='POST'){

include 'conn.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $email = $_POST['email'];
 $password = $_POST['password'];
	
	$sql_query = "INSERT INTO usuarios (Usuario, PrimerNombre, Apellido, Sexo) VALUES ('$usuario', '$nombre', '$apellido', '$sexo');";
  
    mysqli_query($con, $sql_query);
    $sql_query = "SELECT Usuario from usuarios where Mail = '$mail';";
    $result = mysqli_query($con, $sql_query);
    if (mysqli_num_rows($result)>0)
    {
      echo "Registración exitosa. ";
    }
    else
    {
      echo "Error en la registración. ";
    }
    }
	?>