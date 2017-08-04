
<?php
require 'conn.php';
$nombre =$_POST["nombre"];
$apellido =$_POST["apellido"];
$email =$_POST["email"];
$password =$_POST["password"];


$query="select * form usuario where email like '".$email."';";

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result)>0)
{
	
	$response=array();
	$code="Reg_fail";
	$message="Ya exsite un nombre de usuario";
	array_push($response,array("code"=>$code,"Message"=>$message));
	echo json_encode(array("server_response"=>$response));
	
}
else {
	
	$query="insert into usuario values ('".$nombre."','".$apellido."','".$email."','".$password.");";
	$result = mysqli_query($con,$query);
	if(!result)
	{
		$response=array();
	$code="Reg_fail";
	$message="Error en el servidor ";
	array_push($response,array("code"=>$code,"Message"=>$message));
	echo json_encode(array("server_response"=>$response));
	}
else
	{
	$response=array();
	$code="Reg_true";
	$message="Registracion Completa";
	array_push($response,array("code"=>$code,"Message"=>$message));
	echo json_encode(array("server_response"=>$response));
		
	}
			}
	
	

mysqli_close($con);


?>?