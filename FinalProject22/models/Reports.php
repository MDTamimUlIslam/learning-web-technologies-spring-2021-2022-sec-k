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
		$sql = "select * from Reports";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function deleteplace($ReportersId)
	{
		$con = getConnection();
		$sql = $con->prepare("DELETE FROM Reports WHERE ReportersId=?");
		$sql->bind_param("s", $ReportersId);
		$respone = $sql->execute();
	   $sql->close();
		$con->close();
		return $respone;
	}

    ?>

    






















<!-- T315|Farah Jannat|01584526794|farahjannat@gmail.com|Cancel Booking|Please Cancel My Booking(Booking Number Dhaka8292)
R205|Grand Sultan|02586973|gs@gmail.com|Change Phone Number|New Number 02586999
T309|Mahedi Hasan|012525252578|mahedi@gmail.com|Change Email Id|New Email mahedi@outlook.com
T310|Kuddus Ali|017585828528|kuddus@gmail.com|Delete ID|Delete This Account(I Have another ID) -->