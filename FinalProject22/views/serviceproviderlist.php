<?php 

	require('header.php');
	
	require('../models/serviceprovider.php');
	
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
	
        <h1 class="font-effect-neon SBoyyy"> Welcome to Easy Travels- Admin.<?=$data['serviceproviderno']?></h1> 

	<a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |
	
	<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>

<table>
<tr>
<td height="150px">
<center><img src="../Photos/2.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: green" href="serviceproviderlist.php"> Service Providers List </a>
	</td>
</tr>
</table>


<table border="1">
			<tr>
				<td>Service Provider Number</td>
				<td>Service Type </td>
				<td>Company Name</td>
				<td>Phone No</td>
				<td>Place</td>
				<td>Other Info</td>
			</tr>
			<?php while($data =mysqli_fetch_assoc($result)){ ?>

<tr>
	<td><?=$data['serviceproviderno']?></td>
	<td><?=$data['ServiceType']?></td>
	<td><?=$data['CompanyName']?></td>
	<td><?=$data['PhoneNo']?></td>
	<td><?=$data['Place']?></td>
	<td><?=$data['OtherInfo']?></td>
	<td>
	<a href="editserviceprovider.php?serviceproviderno=<?=$data['serviceproviderno']?>">EDIT</a> |
		<a href="../controllers/serviceproviderdeletecheck2.php?serviceproviderno=<?=$data['serviceproviderno']?>">DELETE</a> 
	</td>
</tr>

<?php } ?>
			
			
		</table>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>