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
			<a class="navbar-brand" href="#">
				<img src="<?php echo base_url();?>img/logo-temporal.png" height="35px" width="80px" class="bg-light" style="border-style: solid;"
				/>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
			aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo site_url();?>/CVA">Alumnos
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url();?>/CVR">Reportes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url();?>/CVC">Gestion de contenidos</a>
					</li>
				</ul>
				<form class="form-inline mt-2 mt-md-0" action="<?php echo site_url();?>/CS">
					<button class="btn btn-outline-danger my-2 my-sm-0" type="submit" >Salir</button>
				</form>
			</div>
		</nav>
        <main role="main" class="container" >
      <div class="row">
        <div class="col-5" >
          <h2 id="lbCurso">Curso: <?=$Curso ?></h2>
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
      <form id="formulario" method="post" action="<?php echo site_url();?>/ingrAlumno">
      <div class="modal-body">
         <label for="IngrRut">Rut</label>
         <input type="text" class="form-control" name="IngrRut" required id="txtRut" placeholder="Rut...">
        <br>
        <label>Nombre </label>
          <input type="text" class="form-control" name="IngrNombre" required id="txtNombre" placeholder="Nombre...">
        <br>
        <label >Edad </label>
          <input type="text" class="form-control" name="IngrEdad" required id="txtEdad" placeholder="Edad...">
        <br>
        <label >Descripcion </label>
          <input type="text" class="form-control" name="IngrDescripcion" required id="txtDescripcion" placeholder="Descripcion...">
          <input type="hidden" name="IngrEstado" id="txtEstado" value="Activo">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="btnIngresar">ingresar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


      </div>
      </div>
      <div id="ModalEliminar" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Eliminar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idoculto">
        <h3>¿Esta seguro que desea eliminar este Alumnos?</h3>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="btnEliminarSi">Si</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

      <div id="ModalActualizar" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Actualizar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idocultoActualizar">
        <label >Rut </label>
          <input type="text" disabled class="form-control" name="ActRut" id="txtActRut"/>
        </br>
        <label >Nombre </label>
          <input type="text" class="form-control" name="ActNombre" id="txtActNombre"/>
          </br>
        <label >Edad </label>
          <input type="text" class="form-control" name="ActEdad" id="txtActEdad"/>
          </br>
        <label >Descripcion </label>
          <input type="text" class="form-control" name="ActDecripcion" id="txtActDescripcion"/>
          </br>
        <label >Estado </label>
          <input type="text" class="form-control" name="ActEstado" id="txtActEstado"/>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" id="btnActualizarSi">Actualizar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

      <div class="row">
        <div class="col-12">
          <table id="" class="table table-bordered">
            <thead>
              <th scope="col">Rut</th>
              <th scope="col">Nombre</th>
              <th scope="col">Edad</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Estado</th>
              <th scope="col">Modificar</th>
              <th scope="col">Deshabilitar</th>
            </thead>
            <tbody id="TablaAlumnos"></tbody>
          </table>
        </div>
      </div>
    </main>
		<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>lib/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url();?>lib/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>lib/js/bootstrap.min.js"></script>
  </body>
</html>
<script type="text/javascript">

                 $(function(){
                  
                  cargarUsuarios();
                   function cargarUsuarios() {
                    var url = "<?php echo site_url(); ?>/MostrarAlumnos";
                    $("#TablaAlumnos").empty();
                    $.getJSON(url, function (res) {
                        $.each(res, function (i, o) {
                            var x = "<tr><td>" + o.Rut + "</td>";
                            x += "<td>" + o.Nombre + "</td>";
                            x += "<td>" + o.Edad + "</td>";
                            x += "<td>" + o.Descripcion + "</td>";
                            x += "<td>" + o.Estado + "</td>";
                            x += '<td> <button id="Edit" value="' + o.Rut + "," + o.Nombre + "," + o.Edad + "," + o.Descripcion + "," + o.Estado+'" class="btn btn-warning">Modificar</button>';
                            x += '<td> <button id="Delete" value="'+o.Rut+'" class="btn btn-danger">Borrar</button></ td></tr>';
                            $("#TablaAlumnos").append(x);
                        });
                    });
                }
                 });

                 $("#TablaAlumnos").on("click", "#Delete", function (e) {
                    e.preventDefault();
                    $("#idoculto").val($(this).val());
                    $("#ModalEliminar").modal("show");
                });

                  $("#btnEliminarSi").click(function () {
                    var rut = $("#idoculto").val();
                    $.ajax({
                     url: "<?php echo site_url()?>/EliminarAlumno",
                     type: "POST",
                     datatype: "json",
                      data: {
                       "rut": rut
                      }
                    }).done(function (obj) {
                      alert(obj);
                      
                      //$("#ModalEliminar").modal("hidde");
                      location.reload();
                    });
                  });

                  $("#TablaAlumnos").on("click", "#Edit", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    var fila = datos.split(",")
                    $("#txtActRut").val(fila[0]);
                    $("#txtActNombre").val(fila[1]);
                    $("#txtActEdad").val(fila[2]);
                    $("#txtActDescripcion").val(fila[3]);
                    $("#txtActEstado").val(fila[4]);
                    $("#ModalActualizar").modal("show");
                });
              $("#btnActualizarSi").click(function () {
                    var rut = $("#txtActRut").val();
                    var nombre = $("#txtActNombre").val();
                    var edad = $("#txtActEdad").val();
                    var descripcion = $("#txtActDescripcion").val();
                    var estado = $("#txtActEstado").val();
                   
                    $.ajax({
                     url: "<?php echo site_url()?>/ActualizarAlumno",
                     type: "POST",
                     datatype: "json",
                      data: {
                       "rut": rut,
                       "nombre": nombre,
                       "edad": edad,
                       "descripcion": descripcion,
                       "estado": estado
                      }
                    }).done(function (obj) {
                      alert(obj);
                      
                      //$("#ModalEliminar").modal("hidde");
                      location.reload();
                    });
                  });
</script>