<?php 
	$udoberror = "";
	$udob = "";
	if(isset($_REQUEST['submit']))
    {
		if($_REQUEST['udob'] == null){
			$udoberror = " dob is empty....";
		}else{
			$udob = $_REQUEST['udob'];
		}
	}
?>
<html>
    <head>
        <title>
            Form Page 4
        </title>
    </head>
    <body>
        
     <form>   
     <form method="REQUEST" action=""> 
      <h3>4.</h3>
                <fieldset>
                <legend>Date Of Birth</legend>
                
                <td><input type="DATE" name="udob" value="<?=$udob?>" /></td>
                <hr>
                <?=$udoberror?>
                            <br>
                            <br>
            <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Clear">
            </fieldset> 
               <hr>  
        </form>     
    </body>
</html>