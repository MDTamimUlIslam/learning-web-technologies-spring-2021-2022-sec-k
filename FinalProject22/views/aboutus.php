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
		<td height="150px">
			<center><img src="../Photos/information.png"><br>
			<a class="font-effect-neon SBoyyy" style="color: green" href="aboutus.php"> About Us informations </a>
		</td>
	</tr>
</table>

<table  border="0">
	<tr>

		<td width="250px" height="100px" >
		<center>
		<img src="../Photos/u3.png"><br>
		<h4 class="font-effect-neon SBoyyy">MD Tamim Ul Islam</h4>
		<h5 class="font-effect-neon SBoyyy">19-40902-2</h5>
		</center>
		</td>

		<td width="250px">
		<center>
		<img src="../Photos/u1.png"><br>
		<h4 class="font-effect-neon SBoyyy">Linkon Ankon Sharker</h4>
		<h5 class="font-effect-neon SBoyyy">19-40895-2</h5>
		</center>
		</td>

		<td width="250px">
		<center>
		<img src="../Photos/u2.png"><br>
		<h4 class="font-effect-neon SBoyyy">SHOIBAL SAHA</h4>
		<h5 class="font-effect-neon SBoyyy">19-41802-3</h5>
		</center>
		</td>

		<td width="250px">
		<center>
		<img src="../Photos/u4.png"><br>
		<h4 class="font-effect-neon SBoyyy">RAIYAN KHADIZA SIDDIQUE </h4>
		<h5 class="font-effect-neon SBoyyy">19-41456-3</h5>
		</center>
		</td>
	</tr>
</table>

<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>