<?php 
    session_start();
    session_destroy();
    header("Location:/ejemplomvc/view/home/login.php");

?>
