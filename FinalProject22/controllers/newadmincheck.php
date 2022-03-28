<?php 

require('../models/adminlist.php');
	if(isset($_REQUEST['submit'])){

		$adminusername = $_REQUEST['adminusername'];
		$adminpass = $_REQUEST['adminpass'];
		$Address = $_REQUEST['Address'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$Email = $_REQUEST['Email'];
		$OtherInfo = $_REQUEST['OtherInfo'];
	

		if($adminusername != null && $adminpass != null && $Address != null && $PhoneNo != null && $Email != null && $OtherInfo != null){
			

			$status = signup($adminusername,$adminpass,$Address,$PhoneNo,$Email,$OtherInfo);
			if($status){
				header('location: ../views/newadmin.php');			
			}else{
				echo "Error Occured ... **Please go back and try again**";
			}
			
		}else{
			echo "**Please go back and Fill the form 1st**";
		}
	}

?>