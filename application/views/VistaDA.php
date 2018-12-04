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
	<link href="<?php echo base_url();?>lib/css/snackbar.css" rel="stylesheet">

	<title>Administrador SAAC Movil</title>
</head>

<body class="bg-light">

	<nav class="navbar navbar-expand navbar-light bg-warning text-dark">
		<a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
		<a class="navbar-brand" href="#">SAAC movil</a>

		<div class="navbar-collapse collapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="<?php echo site_url();?>/CS" class="nav-link"><i class="fa fa-sign-out-alt"></i>
						Salir</a></li>
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
				<li><a href="<?php echo site_url();?>/CVDA"><i class="fa fa-fw fa-user"></i> Gestion de alumnos</a></li>
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
				<li><a href="<?php echo site_url();?>/CVDR"><i class="fa fa-fw fa-chart-line"></i> Reportes</a></li>
				<li><a href="<?php echo site_url();?>/CVDC"><i class="fa fa-fw fa-images"></i> Gestion de contenidos</a></li>
			</ul>
		</div>

		<div class="content p-4">
			<h2 class="mb-4">Bienvenido docente del curso:
				<?=$Curso ?>
			</h2>

			<div class="card mb-4">
				<div class="card-body">
					<i>Gestiones su curso aqui:</i><br>
					<div class="container">
						<div class="row">
							<div class="col-3">
								<button id="btnAgregarAlumno" value="" class="btn btn-success mb-2 mt-2" data-toggle="modal" data-target="#InsertAlumnos">Agregar
									alumno</button>
								<div id="InsertAlumnos" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
								 aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Ingresar Alumno</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body">
												<label for="IngrRut">Rut</label>
												<input type="text" class="form-control" name="IngrRut" required id="txtRut" placeholder="Rut sin guion ni puntos"
												 onkeypress='return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 0 || event.charCode == 32'>
												<br>
												<label>Nombre </label>
												<input type="text" class="form-control" name="IngrNombre" required id="txtNombre" placeholder="Juanito Perez">
												<br>
												<label>Edad </label>
												<input type="text" class="form-control" name="IngrEdad" required id="txtEdad" placeholder="Edad..."
												 onkeypress='return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 0 || event.charCode == 32'>
												<br>
												<label>Descripcion </label>
												<input type="text" class="form-control" name="IngrDescripcion" required id="txtDescripcion" placeholder="Descripcion...">
												<input type="hidden" name="IngrEstado" id="txtEstado" value="Activo">
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-success" id="btnIngresar">ingresar</button>
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<table id="" class="table table-bordered table-responsive">
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
						<div id="ModalEliminar" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
						 aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Eliminar</h4>
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
						<div id="ModalActualizar" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
						 aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Actualizar</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<input type="hidden" id="idocultoActualizar">
										<label>Rut </label>
										<input type="text" disabled class="form-control" name="ActRut" id="txtActRut" />
										<br />
										<label>Nombre </label>
										<input type="text" class="form-control" name="ActNombre" id="txtActNombre" />
										<br />
										<label>Edad </label>
										<input type="text" class="form-control" name="ActEdad" id="txtActEdad" onkeypress='return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 0 || event.charCode == 32' />
										<br />
										<label>Descripcion </label>
										<input type="text" class="form-control" name="ActDecripcion" id="txtActDescripcion" />
										<br />
										<label>Estado </label>
										<input type="text" class="form-control" name="ActEstado" id="txtActEstado" />
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-warning" id="btnActualizarSi">Actualizar</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
									</div>
								</div>
							</div>
						</div>
						<div id="snackbar" style="position: absolute;z-index: 200"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url();?>lib/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo base_url();?>lib/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>lib/js/bootadmin.min.js"></script>
	<script type="text/javascript">
		$(function () {
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
						x += '<td> <button id="Edit" value="' + o.Rut + "," + o.Nombre + "," + o.Edad + "," + o.Descripcion + "," +
							o.Estado + '" class="btn btn-warning">Modificar</button>';
						x += '<td> <button id="Delete" value="' + o.Rut + '" class="btn btn-danger">Borrar</button></ td></tr>';
						$("#TablaAlumnos").append(x);
					});
				});
			}


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
					MostrarMensaje("Alumno inactivo", 3000);
					cargarUsuarios();
					$("#ModalEliminar").modal("hide");

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
			$("#btnIngresar").click(function () {
				var rut = $("#txtRut").val();
				var nombre = $("#txtNombre").val();
				var edad = $("#txtEdad").val();
				var descripcion = $("#txtDescripcion").val();
				var estado = $("#txtEstado").val();
				if (rut.length > 0 && nombre.length > 0 && descripcion.length > 0 && estado.length > 0) {
					$.ajax({
						url: "<?php echo site_url()?>/ingrAlumno",
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
						console.log("Petición terminada. Resultado", obj);
						$("#InsertAlumnos").modal('hide');
						$("#txtRut").val("");
						$("#txtNombre").val("");
						$("#txtEdad").val("");
						$("#txtDescripcion").val("");
						$("#txtEstado").val("");
						MostrarMensaje("Alumno Ingresado", 3000);
						cargarUsuarios();
					});
				} else {
					MostrarMensaje("No deben de haber campos vacios.", 3000)
				}
			});

			$("#btnActualizarSi").click(function () {
				var rut = $("#txtActRut").val();
				var nombre = $("#txtActNombre").val();
				var edad = $("#txtActEdad").val();
				var descripcion = $("#txtActDescripcion").val();
				var estado = $("#txtActEstado").val();
				if (rut.length > 0 && nombre.length > 0 && descripcion.length > 0 && estado.length > 0) {

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
						},
						success: function (resultados) {
							console.log("Petición terminada. Resultado", resultados);
							$("#ModalActualizar").modal('hide');
							$("#txtActRut").val("");
							$("#txtActNombre").val("");
							$("#txtActEdad").val("");
							$("#txtActDescripcion").val("");
							$("#txtActEstado").val("");
							MostrarMensaje("Alumno Actualizado", 3000);
							cargarUsuarios();
						}
					});
				} else {
					MostrarMensaje("No deben de haber campos vacios.", 3000)
				}

			});

			function MostrarMensaje(msg, milisec) {
				// Get the snackbar DIV
				var x = document.getElementById("snackbar");
				x.innerHTML = "" + msg;

				// Add the "show" class to DIV
				x.className = "show";

				// After 3 seconds, remove the show class from DIV
				setTimeout(function () {
					x.className = x.className.replace("show", "");
				}, milisec);
			}
		});
	</script>

</body>

</html>
