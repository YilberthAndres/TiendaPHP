<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
        echo (empty($_GET['id'])) 
        ? ((strpos($_SERVER['REQUEST_URI'],'create')) ? "Agregando nuevo usuario" : "Index")
        : ((strpos($_SERVER['REQUEST_URI'],'show')) ? "Detalles del registro ".$_GET['id'] : "Actualizar registro ".$_GET['id'] );
    ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/ejemplomvc/assets/css/estilos.css">
</head>
  <body>
    <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/ejemplomvc/index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Username
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ejemplomvc/view/persona/index.php">Usuarios</a></li>
                        <li><a class="dropdown-item" href="/ejemplomvc/view/persona/create.php">Agregar nuevos usuarios</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
            <?php if(empty($_SESSION['usuario'])): ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Precios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactanos</a>
                        </li>
                    </ul>
                    <a href="/ejemplomvc/view/home/login.php" class="boton">Inicia Session</a>
                    <a href="/ejemplomvc/view/home/signup.php" class="boton">Registrate</a>
                </div>
                <?php else: ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Agregar informacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Editar perfil</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#">Session de recursos</a> -->
                        </li>
                    </ul>
                    <a href="/ejemplomvc/view/home/logout.php" class="boton">Cerrar Sesion</a>
                </div>
                <?php endif ?>
        </div>
    </nav>
    </div>
<div class="container-fluid">