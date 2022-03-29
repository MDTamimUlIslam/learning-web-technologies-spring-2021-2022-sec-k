<?php 
   
   require_once('../models/adminlist.php');
	
	if(isset($_REQUEST['update'])){
		
		$adminusername = $_REQUEST['adminusername'];
		$adminpass = $_REQUEST['adminpass'];
		$Address = $_REQUEST['Address'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$Email = $_REQUEST['Email'];
		$OtherInfo = $_REQUEST['OtherInfo'];
		
		//$user = ['adminusername'=>$adminusername, 'adminpass'=>$adminpass, 'Address'=>$Address, 'PhoneNo'=> $PhoneNo, 'Email'=> $Email,'OtherInfo'=> $OtherInfo];
		
		$status = deleteplace($adminusername);
	
		if($status){
			header('location:../views/adminlist.php');
		}else{
			header('location:../views/deleteadmin.php?adminusername='.$adminusername);
		}
	
	// 	if (deleteplace($_GET['adminusername'])) {
	// 		header('Location: ../Views/adminlist.php');
	// 	}
		
	// }
	}
?>