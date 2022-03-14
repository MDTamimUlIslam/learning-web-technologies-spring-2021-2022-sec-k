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
		<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>

<table>
<tr>
<td height="150px">
<center><img src="../Photos/3.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: green" href="adminlist.php">Admin List</a>
	</td>
</tr>
</table>



<table border="1">
			<tr>
				<td>Admin Unique ID</td>
				<td>Admin Password </td>
				<td>Address</td>
				<td>Phone No</td>
				<td>Email</td>
				<td>Other Info</td>
			</tr>

			<?php 
				$file = fopen('../models/adminlist.txt', 'r');
				
				while (!feof($file)) {
					$user = fgets($file);
					if($user == null){
						break;
					}
					
					$userArray = explode("|", $user);
			?>

			<tr>
				<td><?=$userArray[0]?></td>
				<td><?=$userArray[1]?></td>
				<td><?=$userArray[2]?></td>
				<td><?=$userArray[3]?></td>
				<td><?=$userArray[4]?></td>
				<td><?=$userArray[5]?></td>
			
				<td>
					<a href="../views/editadmin.php?id=<?=$userArray[0]?>"> EDIT </a> | 
					<a href="../views/deleteadmin.php?id=<?=$userArray[0]?>"> DELETE </a>  
				</td> 
			</tr>

			<?php
				}
			?>
			
			
			
		</table>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>