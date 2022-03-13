<?php 	
	if(isset($_REQUEST['submit'])){

		$adminusername = $_REQUEST['adminusername'];
		$adminpass = $_REQUEST['adminpass'];
		$Address = $_REQUEST['Address'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$Email = $_REQUEST['Email'];
		$OtherInfo = $_REQUEST['OtherInfo'];
	

		if($adminusername != null && $adminpass != null && $Address != null && $PhoneNo != null && $Email != null && $OtherInfo != null){
			

			$user = $adminusername."|".$user = $adminpass."|".$Address."|".$PhoneNo."|".$Email."|".$OtherInfo."|"."\r\n";
			$file = fopen('../models/adminlist.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/dash.php');
			
		}else{
			echo "null submission";
		}
	}

?>