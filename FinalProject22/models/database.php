<?php 
$con = mysqli_connect('localhost', 'root','','webtech');

if($con){
    echo"done";
}
else{
    echo"error";
}
?>