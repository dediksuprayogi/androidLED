<?php 
	include "koneksi.php";
	
	$query = mysqli_query($con,"SELECT * FROM sensor_rgb where id=1");
	
	$json = array();

	while($row = mysqli_fetch_array($query)){
		$json[] = $row;
	}
	
	echo json_encode(array('sensor_rgb' => $json));

?>