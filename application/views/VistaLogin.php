<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>lib/css/bootstrap.min.css" >

	<!-- Estilos personalizados para esta plantilla -->
    <link href="<?php echo base_url();?>lib/css/signin.css" rel="stylesheet">

	<!-- Estilos personalizados -->
	<link href="<?php echo base_url();?>lib/css/loginP.css" rel="stylesheet">
    <title>Ingresar al sistema - SAAC app Docente</title>

  </head>
  <body id="bodylogin" class="text-center">
	<form class="form-signin bg-light rounded" method="post" action="<?php base_url();?>login">
		<img class="mb-4" src="<?php echo base_url(); ?>img/logo-temporal.png" alt="" width="112" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Bienvenido</h1>
		<label for="inputRut" class="sr-only">Rut</label>
		<input type="text" name="rut" id="inputRut" class="form-control" placeholder="Rut" required autofocus>
		<label for="inputPassword" class="sr-only">Contraseña</label>
		<input type="password" name="clave" id="inputPassword" class="form-control" placeholder="Constraseña" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		<p class="mt-5 mb-3 text-muted">&copy; SAAC app 2018</p>
    <label class="error" style="color:#f00; font-size:15px; text-align: center; font-weight: bold; margin-top: 20px;"><?php if (isset($error)) {echo $error;}?></label>
		</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>lib/js/jquery-3.3.1.slim.min.js" ></script>
    <script src="<?php echo base_url();?>lib/js/popper.min.js" ></script>
    <script src="<?php echo base_url();?>lib/js/bootstrap.min.js" ></script>
  </body>
</html>