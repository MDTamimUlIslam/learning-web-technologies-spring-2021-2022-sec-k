<?php 

	require('header.php');
	require('../models/touristlist.php');
	
	$result = getAllUsers();
	$count = mysqli_num_rows($result);
	
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
<center><img src="../Photos/1.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: green" href="touristlist.php"> Tourist list </a>
	</td>
</tr>
</table>




<table border="1">
			<tr>
				<td>Tourist Number</td>
				<td>Tourist Name </td>
				<td>Address</td>
				<td>Phone No</td>
				<td>Email</td>
				<td>Other Info</td>
			</tr>

			<?php while($data =mysqli_fetch_assoc($result)){ ?>

<tr>
	<td><?=$data['id']?></td>
	<td><?=$data['TouristName']?></td>
	<td><?=$data['Address']?></td>
	<td><?=$data['PhoneNo']?></td>
	<td><?=$data['Email']?></td>
	<td><?=$data['OtherInfo']?></td>
	<td>
		<a href="edit.php?id=<?=$data['id']?>">EDIT</a> |
		<a href="delete.php?id=1">DELETE</a> 
	</td>
</tr>

<?php } ?>	
	</table>
<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>