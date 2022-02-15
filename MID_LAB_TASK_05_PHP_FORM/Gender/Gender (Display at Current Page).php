<?php 
	$uGenderError= "";
	$uGender= "";
	if(isset($_REQUEST['submit']))
    {
		if($_REQUEST['gender']==null) {
			$uGenderError = " Gender is empty....";
		}
        else
        {
			$uGender=$_REQUEST['gender'];
		}
	}
?>
<html>
    <head>
        <title>
            Form Page 3
        </title>
    </head>
    <body>
        
     <form method="REQUEST" action="">
      <h3>3.</h3>
                <fieldset>
                <legend>Gender</legend>
    
                            <input type="radio" name="gender" value="<?=$uGender?>"> Male
							<input type="radio" name="gender" value="<?=$uGender?>"> Female 
							<input type="radio" name="gender" value="<?=$uGender?>"> Other 
                            
                            <br>
            </fieldset> 
            <br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Clear">
              
        </form>     
    </body>
</html>