<?php 

require_once '../models/serviceprovider.php';

if (deleteplace($_GET['serviceproviderno'])) {
    header('Location: ../Views/serviceproviderlist.php');
}

 ?>

?>