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
<h3 class="text-center"> INFORMACION DEL USUARIO</h3>
<div class="card" style="width: 18rem;">
  <img src="/ejemplomvc/assets/img/<?php echo $persona['foto']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Usuario</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="text-transform: uppercase;"><?php echo $persona['nombre'] ?> <?php echo $persona['apellido'] ?></li>
  </ul>
</div>
<div class="pd-3">
    <!-- <a href="/ejemplomvc/" class="btn btn-primary">Regresar</a> -->
    <a href="/ejemplomvc/view/persona/edit.php?id=<?php echo $persona['id']; ?>" class="btn btn-success"><i class="fa-solid fa-user-pen"></i> Actualizar</a>
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash"></i> Eliminar</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar este usuario?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¡Los usuarios eliminados no se pueden recuperar!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cerrar</button>
        <a href="/ejemplomvc/view/persona/delete.php?id=<?php echo $persona['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Eliminar</a>
      </div>
    </div>
  </div>
</div>
</div>

<?php 
        require_once('../head/footer.php'); 
?>