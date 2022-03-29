<?php 
function getConnection(){
$con = mysqli_connect('localhost', 'root','','webtech');
return $con;
}
	//require('database.php');

	function login($username, $password){
		$con = getConnection();

		$sql = "select * from adminlist where adminusername='{$username}' and adminpass='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

    function signup($adminusername,$adminpass,$Address,$PhoneNo,$Email,$OtherInfo){
		$con = getConnection();
		$sql = "insert into adminlist values('{$adminusername}', '{$adminpass}', '{$Address}', '{$PhoneNo}','{$Email}','{$OtherInfo}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function getAllUsers(){
		$con = getConnection();
		$sql = "select * from adminlist";
		$result = mysqli_query($con, $sql);
		return $result;
	}

    function getUserById($adminusername){
		$con = getConnection();
	    $sql = "select * from adminlist where adminusername='{$adminusername}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

    function editUser($user){
		$con = getConnection();
		$sql = "update adminlist set adminusername='{$user['adminusername']}', adminpass='{$user['adminpass']}', Address='{$user['Address']}', PhoneNo='{$user['PhoneNo']}', Email='{$user['Email']}', OtherInfo='{$user['OtherInfo']}' where adminusername='{$user['adminusername']}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
    }

	// function deleteUser($adminusername){
	// 	$con = getConnection();
	// 	$sql = "delete adminlist where adminusername='{$adminusername}'";
	// 	if(mysqli_query($con, $sql)){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }


	function deleteplace($adminusername)
{
    $con = getConnection();
    $sql = $con->prepare("DELETE FROM adminlist WHERE adminusername=?");
    $sql->bind_param("s", $adminusername);
    $respone = $sql->execute();
   $sql->close();
    $con->close();
    return $respone;
}

    ?>

    