<?php 
   
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		$bookingsno = $_REQUEST['id'];
		$tourist = $_REQUEST['tourist'];
		$Serviceprovider = $_REQUEST['Serviceprovider'];
		$Place = $_REQUEST['Place'];
		$Duration = $_REQUEST['Duration'];
		$Cost = $_REQUEST['Cost'];
	
	
			$file = fopen('../models/bookings.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $bookingsno){
					$line = $bookingsno."|".$tourist."|".$Serviceprovider. "|" .$Place."|".$Duration."|".$Cost."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../models/bookings.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/bookinglist.php');

		
	}
?>