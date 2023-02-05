<?php
    require_once('../head/head.php');
    if(empty($_SESSION['usuario'])){
        header("Location:../home/login.php");
    }
?>
<?php  require_once('../head/head.php'); ?>

<div class="row ">
    <form action="store.php" method="POST"  autocomplete="off" enctype="multipart/form-data">
        <div class="col-md-12 center-block">
            <div class="form-group col-md-4 center">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre">
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="apellido">
                </div>  
            </div>  
            <div class="form-group col-md-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="apellido">
                </div>  
            </div>  
            <div class="form-group col-md-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                    <input type="password" name="pass" class="form-control" id="apellido">
                </div>  
            </div>  
            <div class="form-group col-md-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1"  class="form-label">Foto</label>
                    <input name="imagen" id="imagen" accept="image/*" type="file"/>
                </div>  
            </div>  
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/ejemplomvc/" class="btn btn-danger"> Cancelar</a>
    </form>       
</div>

<?php  require_once('../head/footer.php'); ?>