<?php 

require_once '../models/bookings.php';

if (deleteplace($_GET['id'])) {
    header('Location: ../Views/bookinglist.php');
}

 ?>

?>