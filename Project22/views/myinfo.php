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
<td>
<center>
	<a class="font-effect-neon SBoyyy" style="color: green" href="myinfo.php"> My Info </a>
</center>
<center>
<h4 class="font-effect-neon SBoyyy"><?=$_SESSION['current_user'][5]?></h4> 
</center>

 <h4 class="font-effect-neon SBoyyy">User ID    :    <?=$_SESSION['current_user'][0]?></h4> 
 <h4 class="font-effect-neon SBoyyy">Address :  <?=$_SESSION['current_user'][2]?></h4> 
 <h4 class="font-effect-neon SBoyyy">Mobile  :   <?=$_SESSION['current_user'][3]?></h4> 
 <h4 class="font-effect-neon SBoyyy">Email   :    <?=$_SESSION['current_user'][4]?></h4> 

 <center>
 <h3 class="font-effect-neon SBoyyy" style="color: Green">Upload Admin Photo</h3> 
</center>
            <form method="POST" action="../controllers/uploadphotocheck.php" enctype="multipart/form-data">
			Upload Image: <input type="file" name="myfile">
			<input type="submit" name="submit" value="Submit">	
             <center><P> *Note: File must be named as UserID</P></center>

			</form>
 

</td>
</tr>
</table>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>