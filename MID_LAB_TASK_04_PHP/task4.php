<?php
    
    $number1=50;
     $number2=40;
      $number3=30;

    if ($number1>$number2 && $number1>$number3) 
    {
    	echo "First Number ","$number1"," is the Largest Number.";
    }
    elseif ($number2>$number1 && $number2>$number3) 
    {
        echo "Second Number ","$number2"," is the Largest Number.";
    }
    else
        echo "Third Number ","$number3"," is the Largest Number.";
    	
?>