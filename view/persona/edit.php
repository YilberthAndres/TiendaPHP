<?php
    require_once('../head/head.php');
    if(empty($_SESSION['usuario'])){
        header("Location:../home/login.php");
    }
?>
<?php 
    require_once('../head/head.php'); 
    require_once('../../controller/personaController.php');

    $obj = new personaController();
    $persona = $obj->show($_GET['id']);
?>
<div class="row">
    <form action="update.php?id=<?php echo $persona['id'] ?>" method="POST" autocomplete="off">
        <div class="col-md-12 center-block">
            <div class="form-group col-md-4 center">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $persona['nombre'] ?>">
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="apellido" value="<?php echo $persona['apellido'] ?>">
                </div>  
            </div>  
           
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/ejemplomvc/" class="btn btn-danger"> Cancelar</a>
    </form>       
</div>
<?php 
        require_once('../head/footer.php'); 
?>