<?php 

	require('header.php');
	require('../models/bookings.php');
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
<center><img src="../Photos/book.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: green" href="bookinglist.php">Booking Info</a>
	</td>
</tr>
</table>

<table border="1">
			<tr>
				<td>Booking Number</td>
				<td>Tourist</td>
				<td>Service Provider</td>
				<td>Place</td>
				<td>Duration</td>
				<td>Cost</td>
			</tr>

	<?php while($data =mysqli_fetch_assoc($result)){ ?>
			<tr>
	<td><?=$data['id']?></td>
	<td><?=$data['tourist']?></td>
	<td><?=$data['Serviceprovider']?></td>
	<td><?=$data['Place']?></td>
	<td><?=$data['Duration']?></td>
	<td><?=$data['Cost']?></td>
	<td>
	<a href="editbookings.php?id=<?=$data['id']?>">EDIT</a> |
		<a href="../controllers/bookingsdeletecheck2.php?id=<?=$data['id']?>">DELETE</a> 
	</td>
</tr>

<?php } ?>
			
			
		</table>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>