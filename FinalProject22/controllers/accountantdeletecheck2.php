<?php 

require_once '../models/accountant.php';

if (deleteplace($_GET['AccountantNo'])) {
    header('Location: ../Views/accountantlist.php');
}

 ?>

?>