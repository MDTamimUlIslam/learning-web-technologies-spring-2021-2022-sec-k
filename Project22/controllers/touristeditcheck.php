<?php 
   
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		$touristno = $_REQUEST['id'];
		$TouristName = $_REQUEST['TouristName'];
		$Address = $_REQUEST['Address'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$Email = $_REQUEST['Email'];
		$OtherInfo = $_REQUEST['OtherInfo'];
	
	
			$file = fopen('../models/tourist.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $touristno){
					$line = $touristno."|".$TouristName."|".$Address. "|" .$PhoneNo."|".$Email."|".$OtherInfo."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../models/tourist.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/touristlist.php');

		
	}
?>