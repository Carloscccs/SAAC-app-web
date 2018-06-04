<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>lib/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<!-- Estilos personalizados para esta plantilla -->
    <link href="<?php echo base_url();?>lib/css/signin.css" rel="stylesheet">

	<!-- Estilos personalizados -->
	<link href="<?php echo base_url();?>lib/css/loginP.css" rel="stylesheet">
    <title>Ingresar al sistema - SAAC app Docente</title>

  </head>
  <body id="bodylogin" class="text-center">
	<form class="form-signin bg-light rounded">
		<img class="mb-4" src="<?php echo base_url(); ?>img/logo-temporal.png" alt="" width="112" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Bienvenido</h1>
		<label for="inputRut" class="sr-only">Rut</label>
		<input type="text" id="inputRut" class="form-control" placeholder="Rut" required autofocus>
		<label for="inputPassword" class="sr-only">Contraseña</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Constraseña" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		<p class="mt-5 mb-3 text-muted">&copy; SAAC app 2018</p>
		</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>lib/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>lib/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>lib/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>