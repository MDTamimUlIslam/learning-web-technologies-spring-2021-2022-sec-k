<?php 

require_once '../models/touristlist.php';

if (deleteplace($_GET['id'])) {
    header('Location: ../Views/touristlist.php');
}

 ?>

?>