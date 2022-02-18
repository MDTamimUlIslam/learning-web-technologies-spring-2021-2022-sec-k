<?php 
	$unameError = "";
	$username = "";
	if(isset($_REQUEST['submit']))
    {
		if($_REQUEST['name'] == null){
			$unameError = " username is empty....";
		}else{
			$username = $_REQUEST['name'];
		}
	}
?>
<html>
    <head>
        <title>Page 1</title>
    </head>
    <body>
        <table border="1" width="100%">
            
            <tr height="100px">
                <td colspan="2">    
                <Center> 
                 <span style="font-size:40px;color:green"><b>X</b></span><span style="font-size:25px">Company</span> &nbsp &nbsp &nbsp 
</Center> 
<Center>
                 Log In As<a href="Name.php"> Name  |</a>
                <a href="Home.php">Log Out </a>

                 
</Center>       
                </td>
            </tr>
            <tr>
            <td width="175px">
                <h4>Accounts</h4>
                <h4>________________________</h4>
                <a href="Dashboard.php"><li> Dashboard    </a>
                <a href="View Profile.php"><li> View Profile    </a>
                <a href="Edit Profile.php"><li> Edit Profile   </a>
                <a href="Profile Picture.php"><li> Change Profile Picture  </a>
                <a href="Change Password.php"><li> Change Password </a>
                <a href="Public Home.php"><li> Log Out </a>

                
            </td>
            <td> <center>     
            <fieldset>
                    <legend>Profile</legend>
                    <form method="REQUEST" action=""> 
                   <table>
                    <tr>
                    <td><p>Name .:
                    <input type="text" name="name" value="<?=$username?>" /> 
                    <?$unameError?>
                    </p>
                    <hr>
                    <p>Email .:
                    <input type="text" name="email" value="" /> 
                    </p>
                    <hr>
                    Gender :
                  <input type="radio" name="gender" value=""> Male 
                    <input type="radio" name="gender" value=""> Female 
                    <input type="radio" name="gender" value=""> Other
                    <hr>
                DoB :
                  <input type="date" name="dob" value="" />
                    </p>
                    <hr> 
                    <br>
                    <input type="submit" name="submit" value="Submit">
                   
</td>    


</table>
</form>
</fieldset> 
         </td>

</tr>    
                
            </tr>
            <tr height="50px">
                <td colspan="3"><Center> CopyRight@X-Company(tamim)2022</Center> </td>
            </tr>
        
        </table>
    </body>
</html>