<?php 
   
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		$adminusername = $_REQUEST['adminusername'];
		$adminpass = $_REQUEST['adminpass'];
		$Address = $_REQUEST['Address'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$Email = $_REQUEST['Email'];
		$OtherInfo = $_REQUEST['OtherInfo'];
	
	
			$file = fopen('../models/adminlist.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $adminusername){
					//$line = $touristno."|".$TouristName."|".$Address. "|" .$PhoneNo."|".$Email."|".$OtherInfo."\r\n";
					$updatedContent .= $line;
				}
				//$updatedContent .= $line;
				
			}

			$file = fopen('../models/adminlist.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/adminlist.php');

		
	}
?>