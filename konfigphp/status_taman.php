<?php 
	include "koneksi.php";
	
	$query = mysqli_query($con,"SELECT * FROM lampu_taman");
	
	$json = array();

	while($row = mysqli_fetch_array($query)){
		$json[] = $row;
	}
	
	echo json_encode(array('lampu_taman' => $json));

?>