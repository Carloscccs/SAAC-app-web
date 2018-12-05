<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url();?>lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>lib/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>lib/css/bootadmin.min.css">

    <title>Administrador SAAC Movil</title>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand navbar-light bg-info text-dark">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="#">SAAC movil</a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?php echo site_url();?>/CS" class="nav-link"><i class="fa fa-sign-out-alt"></i> Salir</a></li>
            <!-- DROPDOWN ITEM
            <li class="nav-item dropdown">
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Doe</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </li>
            -->
        </ul>
    </div>
</nav>

<div class="d-flex">
    <div class="sidebar sidebar-dark bg-secondary">
        <ul class="list-unstyled">
            <li><a href="<?php echo site_url();?>/CVAA"><i class="fa fa-fw fa-user"></i> Gestion de usuarios/cursos</a></li>
            <!--CON SUB-ITEMS
            <li>
                <a href="#sm_expand_1" data-toggle="collapse">
                    <i class="fa fa-fw fa-link"></i> Expandable Menu Item
                </a>
                <ul id="sm_expand_1" class="list-unstyled collapse">
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                </ul>
            -->
            </li>
            <li><a href="<?php echo site_url();?>/CVAC"><i class="fa fa-fw fa-images"></i> Pictogramas</a></li>
            <li><a href="<?php echo site_url();?>/CVAR"><i class="fa fa-fw fa-images"></i> Reportes pictogramas</a></li>
        </ul>
    </div>

    <div class="content p-4">
        <h2 class="mb-4">Bienvenido: <?=$Curso ?> </h2>

        <div class="card mb-4">
            <div class="card-body">
                <div class="text-center">
                    <img src="<?php echo base_url();?>img/logo.png" class="" width="20%" heigth="20%"/>
                </div>
                <p class="font-weight-normal">Bienvenido al sistema de administracion de la aplicacion "SAAC movil", aqui
                usted podra:</p>
                <ul>
                    <li>Gestionar los docentes, cursos, alumnos</li>
                    <li>Agregar y ver pictogramas</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>lib/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>lib/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>lib/js/bootadmin.min.js"></script>

</body>
</html>