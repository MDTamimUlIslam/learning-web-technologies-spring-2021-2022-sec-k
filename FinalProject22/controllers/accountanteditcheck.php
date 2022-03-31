<?php 
   
   require_once('../models/accountant.php');
	
	if(isset($_REQUEST['update'])){
		$AccountantNo = $_REQUEST['AccountantNo'];
		$AccountantName = $_REQUEST['AccountantName'];
		$Password = $_REQUEST['Password'];
		$Phone = $_REQUEST['Phone'];
		$education = $_REQUEST['education'];
		$gender = $_REQUEST['gender'];
		$date = $_REQUEST['date'];
		$bloodGroup = $_REQUEST['bloodGroup'];
		
	
	
		$user = ['AccountantNo'=>$AccountantNo, 'AccountantName'=>$AccountantName, 'Password'=>$Password, 'Phone'=> $Phone, 'education'=> $education,'gender'=> $gender, 'date'=> $date, 'bloodGroup'=> $bloodGroup];

		$status = editUser($user);
	
		if($status){
			header('location:../views/accountantlist.php');
		}else{
			header('location:../views/edit.php?AccountantNo='.$AccountantNo);
		}
	

		
	}
?>