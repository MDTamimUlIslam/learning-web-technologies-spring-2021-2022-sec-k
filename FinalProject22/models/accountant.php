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

    function signup($AccountantNo,$AccountantName,$password,$Phone,$education,$gender,$date,$bloodGroup){
		$con = getConnection();
		$sql = "insert into accountant values('{$AccountantNo}', '{$AccountantName}', '{$password}', '{$Phone}','{$education}','{$education}','{$date}','{$bloodGroup}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	
    function getAllUsers(){
		$con = getConnection();
		$sql = "select * from accountant";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function getUserById($AccountantNo){
		$con = getConnection();
	    $sql = "select * from accountant where AccountantNo='{$AccountantNo}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editUser($user){
		$con = getConnection();
		$sql = "update accountant set AccountantNo='{$user['AccountantNo']}', AccountantName='{$user['AccountantName']}', Password='{$user['Password']}', Phone='{$user['Phone']}', education='{$user['education']}', gender='{$user['gender']}', date='{$user['date']}', bloodGroup='{$user['bloodGroup']}' where AccountantNo='{$user['AccountantNo']}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
    }

	function deleteplace($AccountantNo)
{
    $con = getConnection();
    $sql = $con->prepare("DELETE FROM accountant WHERE AccountantNo=?");
    $sql->bind_param("s", $AccountantNo);
    $respone = $sql->execute();
   $sql->close();
    $con->close();
    return $respone;
}


    ?>


<!-- 001|Khorsed Alam|alam|01531978220|B.COM(Finance)|Male|1994-02-14|A-
002|Tanjil Amin|amin|01789561236|B.COM(Finance)|Male|1991-02-28|O+|
003|Nadia Karim|nadia|015588778458|B.COM(Finance)|Female|1997-07-28|B-|
004|Sabbir Ahsan|sabbir|01963254125|B.COM(Finance)|Male|1987-10-14|A-|
005|Ajanta Das|das|01574125896|B.COM(Finance)|Female|1984-10-05|A+ -->
