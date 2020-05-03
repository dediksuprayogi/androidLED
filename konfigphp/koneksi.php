<?php
	$server		= "localhost"; //nama server
	$user		= "root"; //username
	$password	= ""; //password
	$database	= "skripsi"; //target databese
	
	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_error()) {
		echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	 }

?>