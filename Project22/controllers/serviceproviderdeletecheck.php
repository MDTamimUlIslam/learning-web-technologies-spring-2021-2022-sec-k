<?php 
   
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		$serviceproviderno = $_REQUEST['id'];
		$ServiceType = $_REQUEST['ServiceType'];
		$CompanyName = $_REQUEST['CompanyName'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$Place = $_REQUEST['Place'];
		$OtherInfo = $_REQUEST['OtherInfo'];
	
	
			$file = fopen('../models/serviceprovider.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $serviceproviderno){
					//$line = $serviceproviderno."|".$ServiceType."|".$CompanyName. "|" .$PhoneNo."|".$Place."|".$OtherInfo."\r\n";
					$updatedContent .= $line;
				}
				//$updatedContent .= $line;
				
			}

			$file = fopen('../models/serviceprovider.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/serviceproviderlist.php');

		
	}
?>