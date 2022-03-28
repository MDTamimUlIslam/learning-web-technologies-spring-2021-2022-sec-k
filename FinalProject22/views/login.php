<?php 

	$error = "";
	
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "invalid username/password. Please Input User Name Password Correctly";
		}
	}
	$null = "";
	
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'null'){
			$error = "Please Input First";
		}
	}

?>

<html>
<head>
	<title>Login Admin</title>
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
	<form method="POST" action="../controllers/loginCheck.php">

		<center>
		<table border="1" width="50%">
		
		<tr height=100>
			
				<td colspan="3" align="center">
				<fieldset>
                    <legend>Log In Admin</legend>
					<span class="SBoyyy" style="font-size:40px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span>
					
					<h1 class="SBoyyy">Log In </h1>
			</td>
			</tr>
			<tr>
				<td><p class="SBoyyy">Enter Your User Name :</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td><p class="SBoyyy">Enter Your Password :</td>
				<td><input type="password" name="password" value=""></td>
			
			<tr>
				<td colspan="3" align="center">
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Clear"><a href="Forgot Password.php"></td>
				<h6 class="SBoyyy" style="color: red"><?=$error?></td>
				
				
			</tr>
			<tr height="300px">
			<td colspan="3"><img src="../Photos/logo1.jpg" width="680px" height="400px"></td>
            </tr>
			<tr> <td colspan="3"align="down"><Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> </td></tr>
		</table>
	</form>
</body>
</html>