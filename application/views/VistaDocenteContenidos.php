<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion curso</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>lib/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>lib/css/navbar-top-fixed.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-warning">
      <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>img/logo-temporal.png" height="35px" width="80px" class="bg-light" style="border-style: solid;" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>/CVA">Alumnos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>/CVR">Reportes<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url();?>/CVC">Gestion de contenidos</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Salir</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container" >
      <div class="row">
        <div class="col-5" >
          <h2 id="lbCurso">Curso: ...</h2>
        </div>
      </div>
      <div class="row">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-Actividades-tab" data-toggle="pill" href="#pills-Actividades" role="tab" aria-controls="pills-home" aria-selected="true">Actividades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Pictogramas-tab" data-toggle="pill" href="#pills-Pictogramas" role="tab" aria-controls="pills-profile" aria-selected="false">Pictogramas</a>
            </li>
        </ul>
      </div>
      <div class="row">
          <div class="col-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-Actividades" role="tabpanel" aria-labelledby="pills-home-tab">
                    <h2>Contenidos actividades</h2>
                </div>
                <div class="tab-pane fade" id="pills-Pictogramas" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <h2>Contenidos pictogramas</h2>
                </div>
            </div>
          </div>
      </div>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>lib/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>lib/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>lib/js/bootstrap.min.js"></script>
  </body>
</html>