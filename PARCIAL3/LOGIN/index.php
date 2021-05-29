<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: frontend/principal-vista.php');
    }else{
        header('location: login.php');
    }


?>