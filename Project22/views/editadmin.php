<?php 

	require('header.php');

	$id = $_GET['id'];

	$file = fopen('../models/adminlist.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode('|', $user);
		if($userArray[0] == $id){
			break;
		}
	}
?>
<html>
<head>	
	<title>Home Page</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<style>
        *{
    background-color: rgb(199, 219, 219);
        }
		.SBoyyy{
        font-family: "Audiowide", sans-serif;
        /*font-size: 100%;*/
        font-style: italic;
        font-weight: bolder;
        color: rgb(20, 11, 29);
    }
		</style>
</head>
<body>
<span class="SBoyyy" style="font-size:40px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span>

<center>
	
        <h1 class="font-effect-neon SBoyyy"> Welcome to Easy Travels- Admin.<?=$_SESSION['current_user'][0]?></h1> 

	<a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |
	<a class="font-effect-neon SBoyyy" style="color: red" href="myinfo.php"> My Info </a> |
	<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>
	
<table><tr><td>
<a class="font-effect-neon SBoyyy" style="color: Green" href="adminlist.php"> Back </a>
</td></tr></table>


	<form method="POST" action="../controllers/admineditcheck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Update Information</legend>
		<table>
			<tr>
				<td>Admin Unique ID</td>
				<td><input type="text" name="adminusername" value="<?php echo $userArray[0] ?>"></td>
			</tr>
			<tr>
				<td>Admin Password</td>
				<td><input type="password" name="adminpass" value="<?php echo $userArray[1]?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="Address" value="<?php echo $userArray[2]?>"></td>
			</tr>
			<tr>
				<td>Phone No</td>
				<td><input type="text" name="PhoneNo" value="<?php echo $userArray[3]?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email"  value="<?php echo $userArray[4]?>"></td>
			</tr>
			<tr>
				<td>Other Info</td>
				<td><input type="text" name="OtherInfo"  value="<?php echo $userArray[5]?>"></td>
			</tr>
		
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
		</fieldset>
	</form>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>