<?php 
function getConnection(){
$con = mysqli_connect('localhost', 'root','','webtech');
return $con;
}
	
    function getAllUsers(){
		$con = getConnection();
		$sql = "select * from touristlist";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUserById($id){
		$con = getConnection();
	    $sql = "select * from touristlist where id='{$id}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

    function editUser($user){
		$con = getConnection();
		$sql = "update touristlist set id='{$user['id']}', TouristName='{$user['TouristName']}', Address='{$user['Address']}', PhoneNo='{$user['PhoneNo']}', Email='{$user['Email']}', OtherInfo='{$user['OtherInfo']}' where id='{$user['id']}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
    }

	function deleteplace($id)
{
    $con = getConnection();
    $sql = $con->prepare("DELETE FROM touristlist WHERE id=?");
    $sql->bind_param("s", $id);
    $respone = $sql->execute();
   $sql->close();
    $con->close();
    return $respone;
}


    ?>

    