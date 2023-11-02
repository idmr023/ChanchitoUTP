<?php
    include 'php/conexion.php';

    error_reporting(0);
    $dni = $_SESSION['dni'];

    
        if ($dni == null || $dni == '') {   
            echo '<h1>Usted no tiene autorización</h1>';
            header('Location: ../index.php');
            die();
        }
        session_destroy();
?>