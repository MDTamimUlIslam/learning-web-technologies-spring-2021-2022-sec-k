<?php 

	require('header.php');

	require('../models/accountant.php');
	$AccountantNo = $_REQUEST['AccountantNo'];
	$user = getUserById($AccountantNo);
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
<a class="font-effect-neon SBoyyy" style="color: Green" href="accountantlist.php"> Back </a>
</td></tr></table>


	<form method="POST" action="../controllers/accountanteditcheck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Update Information</legend>
		<table>
		<tr>
				<td>Accountant User ID</td>
				<td><input type="text" name="AccountantNo" value="<?=$accountant['AccountantNo']?>"></td>
			</tr>
			<tr>
				<td>Accountant Name</td>
				<td><input type="text" name="AccountantName" value="<?=$accountant['AccountantName']?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="Password" value="<?=$accountant['Password']?>"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="Phone" name="Phone" value="<?=$accountant['Phone']?>"></td>
			</tr>
			<tr>
				<td>Educational Qualification</td>
				<td><input type="text" name="education" value="<?=$accountant['education']?>"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender"  value="<?=$accountant['gender']?>"></td>
			</tr>
			
			<tr>
				<td>Date of Birth</td>
				<td><input type="text" name="date"  value="<?=$accountant['date']?>"></td>
			</tr>
			<tr>
				<td>bloodGroup</td>
				<td><input type="text" name="bloodGroup"  value="<?=$accountant['bloodGroup']?>"></td>
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