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
		$sql = "select * from bookings";
		$result = mysqli_query($con, $sql);
		return $result;
	}






	function getUserById($id){
		$con = getConnection();
	    $sql = "select * from bookings where id='{$id}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

    function editUser($user){
		$con = getConnection();
		$sql = "update bookings set id='{$user['id']}', tourist='{$user['tourist']}', Serviceprovider='{$user['Serviceprovider']}', Place='{$user['Place']}', Duration='{$user['Duration']}', Cost='{$user['Cost']}' where id='{$user['id']}'";
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


	function deleteplace($id)
{
    $con = getConnection();
    $sql = $con->prepare("DELETE FROM bookings WHERE id=?");
    $sql->bind_param("s", $id);
    $respone = $sql->execute();
   $sql->close();
    $con->close();
    return $respone;
}

    ?>

    