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
        <title>
            Form Page 1
        </title>
    </head>
    <body>
        
    <form> 
        <form method="REQUEST" action="">   
      <h3>1.</h3>
            
               <p>Name:</p>
                <input type="text" name="name" value="<?=$username?>"/> 
              
                <?=$unameError?>
                <br>
                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Clear">
               <hr>   
        </form>     
    </body>
</html>