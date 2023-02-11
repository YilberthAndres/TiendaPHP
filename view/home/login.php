<?php
    session_start();
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/ejemplomvc/assets/css/app.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="assets/img/white.png" alt="">
                    <div class="text">
                        <!-- <p>Join the community of developers <i>- ludiflex</i></p> -->
                    </div>
                </div>
                <div class="col-md-6 right">
               
                <form action="verificar.php" method="POST" class="col-9 login" autocomplete="off">
                <div class="titulo">
                    Iniciar Sesion
                </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <div class="box-eye">
                            <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                                <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                            </button>
                        </div>
                        <input type="password" name="contraseña" class="form-control" id="password">
                    </div>
                    <?php if(!empty($_GET['error'])):?>
                        <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                            <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
                        </div>
                    <?php endif;?>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
<script src="/ejemplomvc/assets/js/main.js"></script>