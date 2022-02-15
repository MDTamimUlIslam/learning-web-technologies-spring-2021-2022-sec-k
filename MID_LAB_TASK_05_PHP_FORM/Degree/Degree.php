<?php 
	$degreeerror = "";
	$degree = "";
	if(isset($_REQUEST['submit']))
    {
		if($_REQUEST['degree'] == null){
			$degreeerror = " degree is empty....";
		}else{
			$degree = $_REQUEST['degree'];
		}
	}
?>
<html>
    <head>
        <title>
            Form Page 5
        </title>
    </head>
    <body>
<form method="REQUEST" action=""> 
    
     
     <form>   
     
     
<form method="REQUEST" action=""> 
      <h3>5.</h3>
                <fieldset>
                <legend>Degree</legend>
                
                            <input type="checkbox" name="degree" value="SSC"/>SSC 
							<input type="checkbox" name="HSC" value="HSC"/>HSC
							<input type="checkbox" name="BSc" value="BSc"/>BSc                
            </fieldset> 
            <br>
            <input type="submit" name="submit" value="Submit">
            
            <input type="reset" name="reset" value="Clear">
               <hr>  
        </form>     
    </body>
</html>