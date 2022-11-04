<?php 
    session_start(); 
    if (isset($_SESSION['userLogged'])){
        unset($_SESSION['userLogged']);
    }
    session_destroy(); 
    header('Location: index.php'); 
?>