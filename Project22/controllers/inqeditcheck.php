<?php 
   
	session_start();
	
	if(isset($_REQUEST['update'])){
		$InquiryQuestion = $_REQUEST['InquiryQuestion'];
		$ReplyFromAdmin = $_REQUEST['ReplyFromAdmin'];
			$file = fopen('../models/inq.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $InquiryQuestion){
					$line = $InquiryQuestion."|".$ReplyFromAdmin."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;	
			}
			$file = fopen('../models/inq.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/inq.php');

		
	}
?>