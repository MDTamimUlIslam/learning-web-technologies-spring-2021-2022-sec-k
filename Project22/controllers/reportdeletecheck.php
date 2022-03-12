<?php 
   
	session_start();
	
	if(isset($_REQUEST['update'])){
		$ReportersId = $_REQUEST['ReportersId'];
		$ReportersName = $_REQUEST['ReportersName'];
		$ReportersPhoneNo = $_REQUEST['ReportersPhoneNo'];
		$ReportersEmail = $_REQUEST['ReportersEmail'];
		$ReportTopic = $_REQUEST['ReportTopic'];
		$Details = $_REQUEST['Details'];
		
		

			$file = fopen('../models/Reports.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $ReportersId){
					//$line =$AccountantNo."|".$AccountantName."|".$Password."|".$Phone."|".$education."|".$gender."|".$date."|".$bloodGroup."\r\n";
					$updatedContent .= $line;
				}
				//$updatedContent .= $line;
				
			}


			$file = fopen('../models/Reports.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/reports.php');

		
	}
?>