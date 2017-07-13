<?php
include 'conn.php';

$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

    $id = $_GET["id"];
	$query = "Select * from sala where id between ($id+1) and ($id+4)";
	$result = mysqli_query($conn,$query);
	while ($row = mysqli_fetch_assoc($result)) {
			
		$array[] = $row;	
	}
	header('Content-Type:Application/json');
	echo json_encode($array);
  
 ?>