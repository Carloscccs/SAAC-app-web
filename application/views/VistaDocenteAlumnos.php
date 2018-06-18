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
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url();?>/CVA">Alumnos<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>/CVR">Reportes</a>
          </li>
          <li class="nav-item">
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
          <h2 id="lbCurso">No tiene curso</h2>
        </div>
      <div class="col-3 offset-4">
        <button id="btnAgregarAlumno" value="" class="btn btn-success" data-toggle="modal" data-target="#InsertAlumnos" >Agregar alumno</button>

<div id="InsertAlumnos" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Ingresar Alumno</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form id="formulario" method="post" action="<?php echo base_url()?>/ingrAlumno">
      <div class="modal-body">
        <div class="input-group">
         <label for="IngrRut">Rut :</label>
         <div class="col-md-10">
         <input type="text" class="form-control" name="IngrRut" required id="txtRut" placeholder="Rut...">
        </div>
      </div>
        <br>
        <div class="input-group">
        <label>Nombre :</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="IngrNombre" required id="txtNombre" placeholder="Nombre...">
        </div>
      </div>
        <br>
        <div class="input-group">
        <label >Edad :</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="IngrEdad" required id="txtEdad" placeholder="Edad...">
        </div>
      </div>
        <br>
        <div class="input-group">
        <label >Descripcion :</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="IngrDescripcion" required id="txtDescripcion" placeholder="Descripcion...">
        </div>
      </div>
        <br>
        <div class="input-group">
        <label >Curso :</label>
        <div class="col-md-10">
          
          <select class="form-control" name="IngrCurso" id="selectCurso">
                          <option selected disabled></option>
                          <option>3A</option>
                          <option>3B</option>
                        </select>  
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnIngresar" data-dismiss="modal">ingresar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


      </div>
      </div>

      <div class="row">
        <div class="col-12">
          <table class="table table-bordered">
            <thead>
              <th scope="col">Rut</th>
              <th scope="col">Nombre</th>
              <th scope="col">Edad</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Modificar</th>
              <th scope="col">Deshabilitar</th>
            </thead>
          </table>
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
<script type="text/javascript">
  var base_url = '<?=base_url();?>';
  $("#btnIngresar").click(function () {});
       /*var rut = $("#txtRut").val();
       var nombre = $("#txtNombre").val();
       var edad = $("#txtEdad").val();
       var descripcion = $("#txtDescripcion").val();
       var curso = $("#selectCurso").val();*/
/*
       $.post(
       base_url +"welcome/IngresarAlumnos",
        {
          rut:        $("#txtRut").val(),
          nombre:    $("#txtNombre").val(),
          edad:    $("#txtEdad").val(),
          descripcion:  $("#txtDescripcion").val(),
          curso:  $("#selectCurso").val()
        }
      );
  }); */
</script>