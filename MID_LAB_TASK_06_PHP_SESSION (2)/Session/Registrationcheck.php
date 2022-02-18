<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$Confirmpassword = $_REQUEST['Confirmpassword'];
		$username = $_REQUEST['username'];
		
		if($username != null && $password != null){
			$username = $_SESSION['username'];
			if($username['username'] == $username && $username['password'] == $password){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				
			}else{
				header('location: login.php');
			}

		}else{
			echo "null submission";
		}
	
	}
?>