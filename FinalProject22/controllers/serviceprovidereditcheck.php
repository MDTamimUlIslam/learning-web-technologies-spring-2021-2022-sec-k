<?php 
    require_once('../models/serviceprovider.php');
   
 
	
	if(isset($_REQUEST['update'])){
		
		$serviceproviderno = $_REQUEST['serviceproviderno'];
		$ServiceType = $_REQUEST['ServiceType'];
		$CompanyName = $_REQUEST['CompanyName'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$Place = $_REQUEST['Place'];
		$OtherInfo = $_REQUEST['OtherInfo'];
	
	
			
		$user = ['serviceproviderno'=>$serviceproviderno, 'ServiceType'=>$ServiceType, 'CompanyName'=>$CompanyName, 'PhoneNo'=> $PhoneNo, 'Place'=> $Place,'OtherInfo'=> $OtherInfo];

		$status = editUser($user);
	
		if($status){
			header('location:../views/serviceproviderlist.php');
		}else{
			header('location:../views/edit.php?serviceproviderno='.$serviceproviderno);
		}
	

		
	}
?>