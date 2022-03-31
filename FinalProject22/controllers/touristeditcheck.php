<?php 
   
   require_once('../models/touristlist.php');
	
	if(isset($_REQUEST['update'])){
		
		$id = $_REQUEST['id'];
		$TouristName = $_REQUEST['TouristName'];
		$Address = $_REQUEST['Address'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$Email = $_REQUEST['Email'];
		$OtherInfo = $_REQUEST['OtherInfo'];
	
	
		$user = ['id'=>$id, 'TouristName'=>$TouristName, 'Address'=>$Address, 'PhoneNo'=> $PhoneNo, 'Email'=> $Email,'OtherInfo'=> $OtherInfo];

		$status = editUser($user);
	
		if($status){
			header('location:../views/touristlist.php');
		}else{
			header('location:../views/edit.php?adminusername='.$adminusername);
		}
	

		
	}
?>