<?php 
	require('../models/adminlist.php');

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			//$user = $_SESSION['user'];

			$status = login($username, $password);
				if($status){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/dash.php');
				}else{
					header('location: ../views/login.php?msg=error');
				}
			//echo "Invalid username/password";

		}else{
			header('location: ../views/login.php?msg=null');
		}
	}
?>