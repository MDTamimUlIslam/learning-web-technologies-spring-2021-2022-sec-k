<?php 	
	if(isset($_REQUEST['submit'])){

		$no = $_REQUEST['no'];
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$Phone = $_REQUEST['Phone'];
		$education = $_REQUEST['education'];
		$gender = $_REQUEST['gender'];
		$date = $_REQUEST['date'];
		$bloodGroup = $_REQUEST['bloodGroup'];
	

		if($no != null && $name != null && $password != null && $Phone != null && $education != null && $gender != null && $date != null && $bloodGroup != null){
			

			$user = $no."|".$user = $name."|".$password."|".$Phone."|".$education."|".$gender."|".$date."|".$bloodGroup."|"."\r\n";
			$file = fopen('../models/accountant.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/dash.php');
			
		}else{
			echo "null submission";
		}
	}

?>