<?php 
function getConnection(){
$con = mysqli_connect('localhost', 'root','','webtech');
return $con;
}
	//require('database.php');

	// function login($username, $password){
	// 	$con = getConnection();

	// 	$sql = "select * from adminlist where adminusername='{$username}' and adminpass='{$password}'";
	// 	$result = mysqli_query($con, $sql);
	// 	if(mysqli_num_rows($result)){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

    // function signup($adminusername,$adminpass,$Address,$PhoneNo,$Email,$OtherInfo){
	// 	$con = getConnection();
	// 	$sql = "insert into adminlist values('{$adminusername}', '{$adminpass}', '{$Address}', '{$PhoneNo}','{$Email}','{$OtherInfo}')";

	// 	if(mysqli_query($con, $sql)){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }
    
    function getAllUsers(){
		$con = getConnection();
		$sql = "select * from serviceprovider";
		$result = mysqli_query($con, $sql);
		return $result;
	}

    ?>

    