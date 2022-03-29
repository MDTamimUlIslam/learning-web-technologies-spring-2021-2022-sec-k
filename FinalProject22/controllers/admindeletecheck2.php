<?php 

require_once '../models/adminlist.php';

if (deleteplace($_GET['adminusername'])) {
    header('Location: ../Views/adminlist.php');
}

 ?>

?>