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


$completa = date("Y-m-d");

$nombre_foto =$completa.'_'.$_POST['nombre'].'.jpg';
$file = $_FILES['imagen'];
// Si la propiedad "error" es cero, el archivo se subió correctamente
if($file['error'] == 0) {
    // "name" contiene el nombre real del archivo
    $foto = $nombre_foto; 
    // Mover el archivo a su ubicación final
    // Revisa que exista la carpeta y tiene permisos de escritura
    if(move_uploaded_file($file['tmp_name'], "../../img/$foto")) {
        // Ahora sí puedes insertar en base de datos
    } else {
        echo 'El archivo se subió, pero no se pudo mover a ubicación final';
    }
} else {
    echo 'No se pudo subir el archivo';
}
// exit();
$persona['nombre'] = $_POST['nombre'];
$persona['apellido'] = $_POST['apellido'];
$persona['foto'] = $nombre_foto;

$obj->guardar($persona);
?>
