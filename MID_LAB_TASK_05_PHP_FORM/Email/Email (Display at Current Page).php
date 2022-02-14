<?php 
	$uemailError = "";
	$uemail = "";
	if(isset($_REQUEST['submit']))
    {
		if($_REQUEST['email'] == null){
			$uemailError = " Email is empty....";
		}else{
			$uemail = $_REQUEST['email'];
		}
	}
?>
<html>
    <head>
        <title>
            Form Page 2
        </title>
    </head>
    <body>
        
        <form>    
      <h3>2.</h3>
      <form method="REQUEST" action="">   
               <p>Email:</p>
                
                <input type="email" name="email" value="" /> 
                <br>
                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Clear">
               <hr>   
        </form>     
    </body>
</html>