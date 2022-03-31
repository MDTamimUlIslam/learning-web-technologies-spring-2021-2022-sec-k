<?php 
     require_once('../models/bookings.php');
	
	if(isset($_REQUEST['update'])){
		
		$id = $_REQUEST['id'];
		$tourist = $_REQUEST['tourist'];
		$Serviceprovider = $_REQUEST['Serviceprovider'];
		$Place = $_REQUEST['Place'];
		$Duration = $_REQUEST['Duration'];
		$Cost = $_REQUEST['Cost'];
	
	
		$user = ['id'=>$id, 'tourist'=>$tourist, 'Serviceprovider'=>$Serviceprovider, 'Place'=> $Place, 'Duration'=> $Duration,'Cost'=> $Cost];

		$status = editUser($user);
	
		if($status){
			header('location:../views/bookinglist.php');
		}else{
			header('location:../views/edit.php?id='.$id);
		}
	
		
	}
?>