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
   
    $personas = $obj->all();
    
?>
<link type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<div class="mb-6">
    <a href="create.php" class="btn btn-primary">Crear Usuario</a>
</div>
<!-- <div class="tabla_tipo"> -->

<div class="table_res ml-10" style="width:95%">
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if($personas){
                foreach ( $personas as $persona){
                ?>
                <tr>
                    <th scope="col"><?php echo $persona['id'] ?></th>
                    <th scope="col"><?php echo $persona['nombre'] ?></th>
                    <th scope="col"><?php echo $persona['apellido'] ?></th>
                    <th>
                        <a href="show.php?id=<?php echo $persona['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        <a href="edit.php?id=<?php echo $persona['id']; ?>" class="btn btn-success"><i class="fa-solid fa-user-pen"></i></a>
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash"></i></a>
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
                                <a href="delete.php?id=<?php echo $persona['id']; ?>" class="btn btn-danger">Eliminar</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </th>
                </tr>
                <?php 
                }
            }else{
                ?>
                <tr>
                    <th colspan="4" class="text-center"> Aun no hay usuarios registrados</th>
                </tr>
                <?php
            }?>
        </tbody>
    </table>
</div>
    
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<!-- <script src="sweetalert2/dist/sweetalert2.all.min.js"></script> -->

<script>
	

$(document).ready(function () {
    // $('#example').DataTable();

	$('#example').DataTable( {
        "order": [[0,"desc" ]]
    } );
});

</script>
<?php 
        require_once('../head/footer.php'); 
?>