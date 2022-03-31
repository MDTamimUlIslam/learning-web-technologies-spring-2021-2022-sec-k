<?php 

require_once '../models/Reports.php';

if (deleteplace($_GET['ReportersId'])) {
    header('Location: ../Views/reports.php');
}

 ?>

?>