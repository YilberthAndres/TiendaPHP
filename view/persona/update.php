<?php
    require_once('../head/head.php');
    if(empty($_SESSION['usuario'])){
        header("Location:../home/login.php");
    }
?>
<?php  require_once('../../controller/personaController.php'); ?>

<?php 
$obj = new personaController();

$persona = [];

$persona['id']       = $_GET['id'];
$persona['nombre']   = $_POST['nombre'];
$persona['apellido'] = $_POST['apellido'];
$obj->actualizar($persona);
?>
