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
		$sql = "select * from inq";
		$result = mysqli_query($con, $sql);
		return $result;
	}




	function getUserById($InquiryQuestion){
		$con = getConnection();
	    $sql = "select * from inq where InquiryQuestion='{$InquiryQuestion}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

    function editUser($user){
		$con = getConnection();
		$sql = "update inq set InquiryQuestion='{$user['InquiryQuestion']}', ReplyFromAdmin='{$user['ReplyFromAdmin']}' where InquiryQuestion='{$user['InquiryQuestion']}'";
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


	function deleteplace($InquiryQuestion)
{
    $con = getConnection();
    $sql = $con->prepare("DELETE FROM inq WHERE InquiryQuestion=?");
    $sql->bind_param("s", $InquiryQuestion);
    $respone = $sql->execute();
   $sql->close();
    $con->close();
    return $respone;
}

    ?>

    











<!-- Can I Have The Hotline Number?|01733558756 -->
