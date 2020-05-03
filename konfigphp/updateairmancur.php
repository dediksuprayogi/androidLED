<?php  
	include "koneksi.php";
	
	$status_airmancur 	= $_POST['status_airmancur'];
	$mode	 		= $_POST['mode'];
	$red 			= $_POST['red'];
	$green 			= $_POST['green'];
	$blue			= $_POST['blue'];

	$getdata = mysqli_query($con,"SELECT * FROM lampu_airmancur WHERE id ='1'"); 
	$rows = mysqli_num_rows($getdata);
	

	$respose = array();

	if($rows > 0 )
	{
		$query = "UPDATE lampu_airmancur SET status_airmancur='$status_airmancur',mode='$mode',red='$red',green='$green',blue='$blue' WHERE id='1'";
		$exequery = mysqli_query($con,$query);
		if($exequery)
		{
				$respose['code'] =1;
				$respose['message'] = "Update Success";
		}
		else
		{
				$respose['code'] =0;
				$respose['message'] = "Failed Update";
		}
	}
	else
	{
				$respose['code'] =0;
				$respose['message'] = "Failed Update : data tidak ditemukan";
	}
	

	echo json_encode($respose);
?>

