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
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url();?>/CVR">Reportes
							<span class="sr-only">(current)</span>
						</a>
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

		<main role="main" class="container">
			<div class="row">
				<div class="col-5">
					<h2 id="lbCurso">Curso: <?=$Curso ?></h2>
				</div>
			</div>
			<div class="row">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-Actividades-tab" data-toggle="pill" href="#pills-Actividades" role="tab" aria-controls="pills-home"
						aria-selected="true">Actividades</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-Pictogramas-tab" data-toggle="pill" href="#pills-Pictogramas" role="tab" aria-controls="pills-profile"
						aria-selected="false">Pictogramas</a>
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
							<div class="row">
								<div class="col-4">
									<select id="selectcategorias" class="custom-select-lg">
										<option value="" disabled="true" selected>Seleccione una categoria</option>
									</select>
									<p></p>
								</div>
								<div class="col-4 offset-4">

								</div>
							</div>
							<div class="row">
								<table class="table table-bordered col-12">
									<thead>
										<th colspan="3" class="text-center" >Pictogramas existentes</th>
									</thead>
									<tbody id="tbodyPictogramas"></tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<!-- Bootstrap core JavaScript
    ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo base_url();?>lib/js/jquery-3.1.1.min.js"></script>
		<script src="<?php echo base_url();?>lib/js/popper.min.js"></script>
		<script src="<?php echo base_url();?>lib/js/bootstrap.min.js"></script>
		<script>
			$(function () {
				CargarPictogramasCategoria();

				function CargarPictogramasCategoria() {
					var url = "<?php echo site_url(); ?>/GC";
					$.getJSON(url, function (res) {
						$.each(res, function (i, o) {
							var x = "<option value='" + o.idCategoria + "'>" + o.Nombre + "</option>";
							$("#selectcategorias").append(x);
						});
					});
				}

				$("#selectcategorias").change(function () {
					var id = $("#selectcategorias").val();
					$.ajax({
						url: "<?php echo site_url()?>/GPC",
						type: "POST",
						datatype: "json",
						data: {
							"id": id
						}
					}).done(function (obj) {
						$("#tbodyPictogramas").empty();
						var i = 1;
						var x = "<tr>";
						$.each(JSON.parse(obj), function (i, o) {
							var image = new Image();
							image.src = o.img;
							image.setAttribute("class","img-thumbnail");
							image.setAttribute("width","200px");
							image.setAttribute("heigth","200px");
							x += "<td class='text-center'>" + image.outerHTML + "<p class=''>" + o.Nombre + "</p></td>";
							i = i+1;
							if (i == 3) {
								x += "</tr><tr>";
								i = 1;
							}
						});
						x += "</tr>";
						$("#tbodyPictogramas").append(x);
					}).fail(function (jqXHR, textStatus, errorThrown) {
						if (jqXHR.status === 0) {
							alert('Not connect: Verify Network.');
						} else if (jqXHR.status == 404) {
							alert('Requested page not found [404]');
						} else if (jqXHR.status == 500) {
							alert('Internal Server Error [500].');
						} else if (textStatus === 'parsererror') {
							alert('Requested JSON parse failed.');
						} else if (textStatus === 'timeout') {
							alert('Time out error.');
						} else if (textStatus === 'abort') {
							alert('Ajax request aborted.');
						} else {
							alert('Uncaught Error: ' + jqXHR.responseText);
						}
					});
				});
			});

		</script>
	</body>

	</html>
