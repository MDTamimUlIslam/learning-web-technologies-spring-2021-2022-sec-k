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
	
        <h1 class="font-effect-neon SBoyyy"> Welcome to Easy Travels- Admin.</h1> 

	<a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |
	<a class="font-effect-neon SBoyyy" style="color: red" href="myinfo.php"> My Info </a> |
	<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>

<table>
<tr>
<td>
<center>
<img src="../Photos/4.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: green" href="newaccountant.php"> Add New Accountant </a>
	</td>
</tr>
<form method="POST" action="../controllers/newaccountantcheck.php" enctype="multipart/form-data">
	
		<table border="1"width="50%">
		<tr>
				<td>Accountant User ID</td>
				<td><input type="text" name="no" value=""></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=""></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="Phone" name="Phone" value=""></td>
			</tr>

			<td>Educational Qualification</td>
				<td><input type="text" name="education" value=""></td>
			</tr>

			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female">Female
						<input type="radio" name="gender" value="others">Other</td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input type="date" name="date" value=""></td>
			</tr>
			<tr>
				<td>Blood Group</td>
				<td><select name="bloodGroup">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							
						</select></td>
			</tr>
	
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit">
				    <input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</center>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>