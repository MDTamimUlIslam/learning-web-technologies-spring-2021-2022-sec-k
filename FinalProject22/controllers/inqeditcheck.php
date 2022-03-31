<?php 
   
   require_once('../models/inq.php');

	
	if(isset($_REQUEST['update'])){
		$InquiryQuestion = $_REQUEST['InquiryQuestion'];
		$ReplyFromAdmin = $_REQUEST['ReplyFromAdmin'];

		$user = ['InquiryQuestion'=>$InquiryQuestion, 'ReplyFromAdmin'=>$ReplyFromAdmin];

		$status = editUser($user);
	
		if($status){
			header('location:../views/inq.php');
		}else{
			header('location:../views/edit.php?InquiryQuestion='.$InquiryQuestion);
		}

		
	}
?>