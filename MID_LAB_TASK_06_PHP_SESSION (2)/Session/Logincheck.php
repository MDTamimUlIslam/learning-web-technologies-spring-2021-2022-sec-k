<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];

		if($name != null && $password != null){
			$name = $_SESSION['user'];
			if($user['name'] == $name && $user['password'] == $password){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');

				header('location: Dashboard.php');
			}else{
				header('location: Dashboard.php');
			}

		}else{
			echo "null submission";
		}
	}
?>