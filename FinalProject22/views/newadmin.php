<?php 

	require('header.php');
	
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

<table>
<tr>
<td>
<center>
<img src="../Photos/3.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: green" href="newadmin.php"> Add New Admin </a>
	</td>
</tr>
</table>

<form method="POST" action="../controllers/newadmincheck.php" enctype="multipart/form-data">

		<table border="1" width="50%">

			<tr height=100>
				<td colspan="3" align="center"><h1 class="font-effect-neon SBoyyy">Admin Registration</h1></td>
			</tr>

			<tr height=50>
				<td width="200px">Admin Unique ID</td>
				<td width="300px">
					<input type="text" name="adminusername" value="">
				</td>
			
			</tr>
			<tr height=50>
				<td>Admin Password </td>
				<td><input type="password" name="adminpass" value=""></td>
				
			</tr>
			<tr height=50>
				<td>Address</td>
				<td><input type="text" name="Address" value=""></td>
				
			</tr>
			<tr height=50>
				<td>Phone No</td>
				<td><input type="text" name="PhoneNo" value=""></td>
				
			</tr>
			<tr height=50>
				<td>Email</td>
				<td><input type="text" name="Email" value=""></td>
				
			</tr>
			<tr height=50>
				<td>Other Info</td>
				<td><input type="text" name="OtherInfo" value=""></td>
				
			</tr>
			
			
	
			<tr height=50>
				<td colspan="3" align="middle">
					<input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Reset"></td>
				
			</tr>
		</table>
		
	</form>
</center>


	
<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
</body>
</html>