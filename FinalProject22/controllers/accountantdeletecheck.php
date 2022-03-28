<?php 
   
	session_start();
	
	if(isset($_REQUEST['update'])){
		$AccountantNo = $_REQUEST['AccountantNo'];
		$AccountantName = $_REQUEST['AccountantName'];
		$Password = $_REQUEST['Password'];
		$Phone = $_REQUEST['Phone'];
		$education = $_REQUEST['education'];
		$gender = $_REQUEST['gender'];
		$date = $_REQUEST['date'];
		$bloodGroup = $_REQUEST['bloodGroup'];
		
	
	
			$file = fopen('../models/accountant.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $AccountantNo){
					//$line =$AccountantNo."|".$AccountantName."|".$Password."|".$Phone."|".$education."|".$gender."|".$date."|".$bloodGroup."\r\n";
					$updatedContent .= $line;
				}
				//$updatedContent .= $line;
				
			}

			$file = fopen('../models/accountant.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/accountantlist.php');

		
	}
?>