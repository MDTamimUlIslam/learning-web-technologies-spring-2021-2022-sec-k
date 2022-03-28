<?php 	

require('../models/accountant.php');
	if(isset($_REQUEST['submit'])){

		$AccountantNo = $_REQUEST['no'];
		$AccountantName = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$Phone = $_REQUEST['Phone'];
		$education = $_REQUEST['education'];
		$gender = $_REQUEST['gender'];
		$date = $_REQUEST['date'];
		$bloodGroup = $_REQUEST['bloodGroup'];
	

		if($AccountantNo != null && $AccountantName != null && $password != null && $Phone != null && $education != null && $gender != null && $date != null && $bloodGroup != null){
			
			$status = signup($AccountantNo,$AccountantName,$password,$Phone,$education,$gender,$date,$bloodGroup);
			if($status){
				header('location: ../views/newaccountant.php');			
			}else{
				echo "Error Occured ... **Please go back and try again**";
			}
			
		}else{
			echo "**Please go back and Fill the form 1st**";
		}
	}

?>