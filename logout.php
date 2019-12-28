<?php
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    $_SESSION['message'] = "Da login";
    header("location:login.php"); 
?>