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

	<a class="font-effect-neon SBoyyy" style="color: green" href="dash.php"> Home </a> |
	<a class="font-effect-neon SBoyyy" style="color: red" href="myinfo.php"> My Info </a> |
	<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>

<table border="0">
	<tr>
	<td colspan="3" align="center" height=150px width=350px>
	<center><img src="addacc.png"><br>
	<center><a class="font-effect-neon SBoyyy" style="color: red" href="newaccountant.php"> Add New Accountant </a> </td>
	<td >
	<center><img src="addadmin.png"><br>
		<center><a class="font-effect-neon SBoyyy" style="color: red" href="newadmin.php"> Add New Admin </a> </center>
	</td>
	</tr>
</table>
<table  border="0">
<tr>
	<td width="250px" height="100px" >
	<center>
		<img src="3.png"><br>
		<a class="font-effect-neon SBoyyy" style="color: red" href="adminlist.php"> Admin list </a> 
</center>
	</td>
		<td width="250px">
		<center>
		<img src="1.png"><br>
		<a class="font-effect-neon SBoyyy" style="color: red" href="touristlist.php"> Tourist list </a> </td>
		<td width="250px"> 
		<center>
		<img src="2.png"><br>
		<a class="font-effect-neon SBoyyy" style="color: red" href="serviceproviderlist.php"> Service Provider list </a></td>
		<td width="250px">
		<center>
		<img src="4.png"><br>
		<a class="font-effect-neon SBoyyy" style="color: red" href="accountantlist.php"> Accountant list </a> 
		</td>
	</tr>
</table>
<table>
<tr>
<td width="250px" height="150px" >
<center><img src="book.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: red" href="Bookinglist.php"> Booking Details </a>
	</td>
</tr>
</table>
<table>
<tr>
		<td width="250px"> 
		<center><img src="inq.png"><br>
		<a class="font-effect-neon SBoyyy" style="color: red" href="inq.php"> Inquiries </a></td>
		<td width="250px" height="100px" >
		<center><img src="information.png"><br>
		<a class="font-effect-neon SBoyyy" style="color: red" href="aboutus.php"> About Us </a> </td>
		<td width="250px">
		<center><img src="report.png"><br>
		<a class="font-effect-neon SBoyyy" style="color: red" href="reports.php"> Report Issue </a>

		</td>
</tr>
</table>
<table>
	<tr>
		<td width="250px" height="100px" >
<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
</td>
</tr>
</table>
	
</body>
</html>