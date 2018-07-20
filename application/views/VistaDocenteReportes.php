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
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url();?>/CVA">Alumnos</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo site_url();?>/CVR">Reportes
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url();?>/CVC">Gestion de contenidos</a>
					</li>
				</ul>
				<form class="form-inline mt-2 mt-md-0" action="<?php echo site_url();?>/CS" >
					<button class="btn btn-outline-danger my-2 my-sm-0" type="submit" >Salir</button>
				</form>
			</div>
		</nav>

		<main role="main" class="container">
				<div class="col-5">
					<h2 id="lbCurso">Curso: <?=$Curso ?></h2>
				</div>
				<div class="row">
        <div class="col-4">
                  
                </div>
      <div class="col-3">
        <select id="selectAlumno" class="custom-select-lg">
                    <option value="" disabled selected>Seleccione Alumno</option>
                  </select>
                  <p></p>
        </div>
			</div>
			<div class="row">
				<div class="col-12">
					<table id="" class="table table-bordered">
            <thead>
              <th scope="col">Tiempo</th>
              <th scope="col">Estado</th>
              <th scope="col">Actividad</th>
            </thead>
            <tbody id="TablaContenido"></tbody>
          </table>
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
			SelectAlumnos();
			function SelectAlumnos(){
                      var url = "<?php echo site_url(); ?>/MostrarAlumnos";
                      $.getJSON(url, function (res) {
                       $.each(res, function (i, o) {
                       var x = "<option value='" + o.Rut + "'>" + o.Nombre + "</option>";
                       $("#selectAlumno").append(x);
                       });
                     });
                    }
                    $("#selectAlumno").change(function () {
                      rut = $("#selectAlumno").val();
                      $.ajax({
                        url: "<?php echo site_url()?>/GContenido",
                        type: "POST",
                        datatype: "json",
                        data: {
                          "Rut": rut
                        }
                      }).done(function (obj) {
                        $("#TablaContenido").empty();
                        $.each(JSON.parse(obj), function (i, o) {
                            var x = "<tr><td>" + o.Tiempo + "</td>";
                            x += "<td>" + o.Estado + "</td>";
                            x += "<td>" + o.idActividad + "</td>";
                            $("#TablaContenido").append(x);
                        });
                    
                      });
                    });
		});
	</script>
