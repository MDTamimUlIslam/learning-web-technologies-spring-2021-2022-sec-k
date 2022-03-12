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
<img src="4.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: green" href="newaccountant.php"> Add New Accountant </a>
	</td>
</tr>
</table>
<center>
<form method="" action="">

		<table border="1" width="50%">

			<tr height=100>
				<td colspan="3" align="center"><h1 class="font-effect-neon SBoyyy">Accountant Registration</h1></td>
			</tr>

			<tr height=50>
				<td width="200px">Accountant ID</td>
				<td width="300px">
					<input type="text" name="id" value="">
				</td>
			
			</tr>
			<tr height=50>
				<td>Name</td>
				<td><input type="text" name="Name" value=""></td>
				
			</tr>
			<tr height=50>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
				
			</tr>
			<tr height=50>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="">Male
						<input type="radio" name="gender" value="">Female
						<input type="radio" name="gender" value="">Other
				</td>
			
			</tr>
			<tr height=50>
				<td>Date Of Birth</td>
				<td><input type="date" name="date" value=""></td>
				
			</tr>
			<tr height=50>
				<td>Blood Group</td>
				<td><select name="">
							<option value="">A+</option>
							<option value="">A-</option>
							<option value="">B+</option>
							<option value="">B-</option>
							<option value="">O+</option>
							<option value="">O-</option>
							
						</select></td>
				
			</tr>
			
	
			<tr height=50>
				<td colspan="3" align="middle">
					<input type="button" name="" value="Submit">
				<input type="button" name="" value="Reset"></td>
				
			</tr>
		</table>
		
	</form>
</center>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>