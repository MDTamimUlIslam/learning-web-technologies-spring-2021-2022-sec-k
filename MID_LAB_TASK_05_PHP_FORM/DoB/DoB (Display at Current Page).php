<?php 
	$uDoBError = "";
	$uDoB = "";
	if(isset($_REQUEST['submit']))
    {
		if($_REQUEST['gender'] == null){
			$uDoBError = " DoB is empty....";
		}else{
			$uDoB = $_REQUEST['gender'];
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
        
     <form>   
      <h3>3.</h3>
                <fieldset>
                <legend>Gender</legend>
                
                <input type="radio" name="gender" value="<?=$uDoB?>"> Male 
							<input type="radio" name="gender" value="<?=$uDoB?>"> Female 
							<input type="radio" name="gender" value="<?=$uDoB?>"> Other 
                            <?=$uDoBError?>
                            <br>
            </fieldset> 
            <br>
            <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Clear">
               <hr>  
        </form>     
    </body>
</html>