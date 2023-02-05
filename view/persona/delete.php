<?php
    require_once('../head/head.php');
    if(empty($_SESSION['usuario'])){
        header("Location:../home/login.php");
    }
?>
<?php  require_once('../../controller/personaController.php'); ?>

<?php 
$obj = new personaController();

$obj->delete($_GET['id']);
?>