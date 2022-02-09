<?php 
    
    $Num=["1","2","3","4","5","6","7","8","9","10"];
    echo "Lets Search for the number 8 in the array\n";	
    for ($i=0; $i <=10 ; $i++) { 
    	if ($i==8) 
        {
    		echo "The number is "." ".$i;
            echo "\nNumber Found Between ";	
        echo " ",$i-1;	
        echo " and ",$i+1;	
    	}
    }
?>