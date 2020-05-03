<?php  
	include "koneksi.php";
	
	date_default_timezone_set("Asia/Jakarta");
	$pukul = date("H");
    echo "Pukul : ".$pukul. "\n" ;
        
	$getdata = mysqli_query($con,"SELECT * FROM lampu_taman WHERE id ='1'"); 
	$rows = mysqli_num_rows($getdata);
	
	$respose = array();

	if($rows > 0 )
	{   
	    if ($pukul == 17){
	  
	        $query = "UPDATE lampu_taman SET status_taman='ON',mode='Manual',red='255',green='255',blue='255' WHERE id='1'";
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
		    
	    }else if ($pukul == 5){
	        
    	    $query = "UPDATE lampu_taman SET status_taman='OFF',mode='Manual',red='0',green='0',blue='0' WHERE id='1'";
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
	    }else{
	        echo "Waktu masih belum";
	    }
		
	}
	else
	{
				$respose['code'] =0;
				$respose['message'] = "Failed Update : data tidak ditemukan";
	}
	

	echo json_encode($respose);

?>

