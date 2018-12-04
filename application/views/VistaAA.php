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

	<nav class="navbar navbar-expand navbar-light bg-info text-dark">
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
			</ul>
		</div>

		<div class="content p-4">
			<h2 class="mb-4">Bienvenido:
				<?=$Curso ?>
			</h2>

			<div class="card mb-4">
				<div class="card-body">
					<p class="font-weight-normal">Administracion de usuarios y cursos:</p>
					<div class="container">
						<div class="row">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-Profesor-tab" data-toggle="pill" href="#pills-Profesor" role="tab"
									 aria-controls="pills-home" aria-selected="true">Profesor</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-Alumno-tab" data-toggle="pill" href="#pills-Alumno" role="tab" aria-controls="pills-profile"
									 aria-selected="false">Alumno</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-Curso-tab" data-toggle="pill" href="#pills-Curso" role="tab" aria-controls="pills-profile"
									 aria-selected="false">Curso</a>
								</li>
							</ul>
						</div>
						<div class="row">
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-Profesor" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="row">
										<div class="col-12">
											<table id="" class="table table-bordered">
												<thead>
													<th scope="col">Rut</th>
													<th scope="col">Nombre</th>
													<th scope="col">Descripcion</th>
													<th scope="col">Estado</th>
													<th scope="col">Modificar</th>
													<th scope="col">Deshabilitar</th>
												</thead>
												<tbody id="TablaDocente"></tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-Alumno" role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="row">
										<div class="col-4">
											<select id="selectCurso" class="custom-select-lg">
												<option value="" disabled="true" selected>Seleccione un Curso</option>
											</select>
											<p></p>
										</div>
										<div class="col-3 offset-4">
											<!--<button id="btnAgregarAlumno" value="" class="btn btn-success" data-toggle="modal" data-target="#InsertAlumnos" >Agregar alumno</button>-->
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
								</div>

								<div class="tab-pane fade" id="pills-Curso" role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="row">
										<div class="col-4">
										</div>
										<div class="col-3 offset-4">
											<button id="btnAgregarCurso" value="" class="btn btn-success" data-toggle="modal" data-target="#InsertCurso">Agregar
												Curso</button>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<table id="" class="table table-bordered">
												<thead>
													<th scope="col">Codigo</th>
													<th scope="col">Nombre</th>
													<th scope="col">Descripcion</th>
													<th scope="col">Estado</th>
													<th scope="col">Rut Docente</th>
													<th scope="col">Colegio</th>
													<th scope="col">Modificar</th>
													<th scope="col">Deshabilitar</th>
												</thead>
												<tbody id="TablaCurso"></tbody>
											</table>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- MODAL INSERTAR CURSO -->
						<div id="InsertCurso" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
						 aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Ingresar Curso</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<div class="modal-body">
										<label>Nombre </label>
										<input type="text" class="form-control" name="IngrNombre" required id="txtNombreC" placeholder="Nombre del curso">
										<br>
										<label>Descripcion </label>
										<input type="text" class="form-control" name="IngrDescripcion" required id="txtDescripcionC" placeholder="Descripcion">
										<br>
										<label>Seleccione Profesor</label>
										<select id="selectProfesor" class="custom-select-lg">
											<option value="" disabled="true" selected>Seleccione un Profesor</option>
										</select>
										<p></p>
										<br>
										<label>Seleccione un colegio</label>
										<select id="selectColegio" class="custom-select-lg">
											<option value="" disabled="true" selected>Seleccione un Colegio</option>
										</select>
										<p></p>
										<input type="hidden" name="IngrEstado" id="txtEstadoC" value="Activo">
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-success" id="btnIngresarC">ingresar</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>

								</div>
							</div>
						</div>
						<!-- MODAL INSERTAR ALUMNO -->
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
						<!-- MODAL ELIMINAR CURSO -->
						<div id="ModalEliminarCurso" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
						 aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Eliminar Curso</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<input type="hidden" id="idocultoC">
										<h3>¿Esta seguro que desea eliminar este Curso?</h3>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary" id="btnEliminarSiC">Si</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
									</div>
								</div>
							</div>
						</div>
						<!-- MODAL ELIMINAR ALUMNO -->
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
										<h3>¿Esta seguro que desea eliminar este Alumno?</h3>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary" id="btnEliminarSi">Si</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
									</div>
								</div>
							</div>
						</div>
						<!-- MODAL ELIMINAR PROFESOR -->
						<div id="ModalEliminarProfesor" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
						 aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Eliminar</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<input type="hidden" id="idocultoP">
										<h3>¿Esta seguro que desea eliminar este Profesor?</h3>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary" id="btnEliminarSiP">Si</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
									</div>
								</div>
							</div>
						</div>
						<!-- MODAL ACTUALIZAR CURSO -->
						<div id="ModalActualizarCurso" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
						 aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Actualizar Curso</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<input type="hidden" class="form-control" name="ActRutP" id="txtActIDC" />
										<label>Nombre </label>
										<input type="text" class="form-control" name="IngrNombre" required id="txtActNombreC">
										<br>
										<label>Descripcion </label>
										<input type="text" class="form-control" name="IngrDescripcion" required id="txtActDescripcionC">
										<br>
										<label>Estado: </label>
										<input type="input" class="form-control" id="txtActEstadoC" value="Activo">
										<br>
										<label>Seleccione Profesor</label>
										<select id="selectProfesorA" class="custom-select-lg">
											<option value="" disabled="true" selected>Seleccione un Profesor</option>
										</select>
										<p></p>
										<br>
										<label>Seleccione un colegio</label>
										<select id="selectColegioA" class="custom-select-lg">
											<option value="" disabled="true" selected>Seleccione un Colegio</option>
										</select>
										<p></p>
										<br>

									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-warning" id="btnActualizarSiC">Actualizar</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
									</div>
								</div>
							</div>
						</div>
						<!-- MODAL ACTUALIZAR PROFESOR -->
						<div id="ModalActualizarProfesor" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
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
										<input type="text" disabled class="form-control" name="ActRutP" id="txtActRutP" />
										<br />
										<label>Nombre </label>
										<input type="text" class="form-control" name="ActNombre" id="txtActNombreP" />
										<br />
										<label>Descripcion </label>
										<input type="text" class="form-control" name="ActDecripcion" id="txtActDescripcionP" />
										<br />
										<label>Estado </label>
										<input type="text" class="form-control" name="ActEstado" id="txtActEstadoP" />
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-warning" id="btnActualizarSiP">Actualizar</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
									</div>
								</div>
							</div>
						</div>
						<!-- MODAL ACTUALIZAR ALUMNO -->
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
			var idcur = 0;
			cargaDocente();
			CargarCursos();
			cargaDeCursos();
			SelectProfesores();
			SelectColegios();

			function cargaDocente() {
				var url = "<?php echo site_url(); ?>/MostrarDocenteAdministrador";
				$("#TablaDocente").empty();
				$.getJSON(url, function (res) {
					$.each(res, function (i, o) {
						var x = "<tr><td>" + o.Rut + "</td>";
						x += "<td>" + o.Nombre + "</td>";
						x += "<td>" + o.Descripcion + "</td>";
						x += "<td>" + o.Estado + "</td>";
						x += '<td> <button id="EditP" value="' + o.Rut + "," + o.Nombre + "," + o.Descripcion + "," + o.Estado +
							'" class="btn btn-warning">Modificar</button>';
						x += '<td> <button id="DeleteP" value="' + o.Rut + '" class="btn btn-danger">Borrar</button></ td></tr>';
						$("#TablaDocente").append(x);
					});
				});
			}

			function cargaDeCursos() {
				var url = "<?php echo site_url(); ?>/CCurso";
				$("#TablaCurso").empty();
				$.getJSON(url, function (res) {
					$.each(res, function (i, o) {
						var x = "<tr><td>" + o.idCurso + "</td>";
						x += "<td>" + o.Nombre + "</td>";
						x += "<td>" + o.Descripcion + "</td>";
						x += "<td>" + o.Estado + "</td>";
						x += "<td>" + o.RutDocente + "</td>";
						x += "<td>" + o.idColegio + "</td>";
						x += '<td> <button id="EditC" value="' + o.idCurso + "," + o.Nombre + "," + o.Descripcion + "," + o.Estado +
							"," + o.RutDocente + "," + o.idColegio + '" class="btn btn-warning">Modificar</button>';
						x += '<td> <button id="DeleteC" value="' + o.idCurso +
							'" class="btn btn-danger">Borrar</button></ td></tr>';
						$("#TablaCurso").append(x);
					});
				});
			}

			function SelectProfesores() {
				var url = "<?php echo site_url(); ?>/GDA";
				$.getJSON(url, function (res) {
					$.each(res, function (i, o) {
						var x = "<option value='" + o.Rut + "'>" + o.Nombre + "</option>";
						$("#selectProfesor").append(x);
						$("#selectProfesorA").append(x);
					});
				});
			}

			function SelectColegios() {
				var url = "<?php echo site_url(); ?>/GCAdmin";
				$.getJSON(url, function (res) {
					$.each(res, function (i, o) {
						var x = "<option value='" + o.idColegio + "'>" + o.Nombre + "</option>";
						$("#selectColegio").append(x);
						$("#selectColegioA").append(x);
					});
				});
			}

			function cargarUsuarios() {
				$.ajax({
					url: "<?php echo site_url()?>/GACA",
					type: "POST",
					datatype: "json",
					data: {
						"id": idcur
					}
				}).done(function (obj) {
					$("#TablaAlumnos").empty();
					$.each(JSON.parse(obj), function (i, o) {
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

			function CargarCursos() {
				var url = "<?php echo site_url(); ?>/GCA";
				$.getJSON(url, function (res) {
					$.each(res, function (i, o) {
						var x = "<option value='" + o.idCurso + "'>" + o.Nombre + "</option>";
						$("#selectCurso").append(x);
						//$("#selCatPicto").append(x);
					});
				});
			}


			$("#selectCurso").change(function () {
				idcur = $("#selectCurso").val();
				$.ajax({
					url: "<?php echo site_url()?>/GACA",
					type: "POST",
					datatype: "json",
					data: {
						"id": idcur
					}
				}).done(function (obj) {
					$("#TablaAlumnos").empty();
					$.each(JSON.parse(obj), function (i, o) {
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
			});



			$("#TablaAlumnos").on("click", "#Delete", function (e) {
				e.preventDefault();
				$("#idoculto").val($(this).val());
				$("#ModalEliminar").modal("show");
			});
			$("#TablaDocente").on("click", "#DeleteP", function (e) {
				e.preventDefault();
				$("#idocultoP").val($(this).val());
				$("#ModalEliminarProfesor").modal("show");
			});
			$("#TablaCurso").on("click", "#DeleteC", function (e) {
				e.preventDefault();
				$("#idocultoC").val($(this).val());
				$("#ModalEliminarCurso").modal("show");
			});
			$("#btnEliminarSiC").click(function () {
				var id = $("#idocultoC").val();
				$.ajax({
					url: "<?php echo site_url()?>/EliminarCurso",
					type: "POST",
					datatype: "json",
					data: {
						"idCurso": id
					}
				}).done(function (obj) {
					MostrarMensaje("Curso inactivo", 3000);
					cargaDeCursos();
					$("#ModalEliminarCurso").modal("hide");

				});
			});

			$("#btnEliminarSiP").click(function () {
				var rut = $("#idocultoP").val();
				$.ajax({
					url: "<?php echo site_url()?>/EliminarProfesor",
					type: "POST",
					datatype: "json",
					data: {
						"rut": rut
					}
				}).done(function (obj) {
					MostrarMensaje("Profesor inactivo", 3000);
					cargaDocente();
					$("#ModalEliminarProfesor").modal("hide");

				});
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

			$("#TablaCurso").on("click", "#EditC", function (e) {
				e.preventDefault();
				var datos = $(this).val();
				var fila = datos.split(",")
				$("#txtActIDC").val(fila[0]);
				$("#txtActNombreC").val(fila[1]);
				$("#txtActDescripcionC").val(fila[2]);
				$("#txtActEstadoC").val(fila[3]);
				$("#ModalActualizarCurso").modal("show");
			});

			$("#TablaDocente").on("click", "#EditP", function (e) {
				e.preventDefault();
				var datos = $(this).val();
				var fila = datos.split(",")
				$("#txtActRutP").val(fila[0]);
				$("#txtActNombreP").val(fila[1]);
				$("#txtActDescripcionP").val(fila[2]);
				$("#txtActEstadoP").val(fila[3]);
				$("#ModalActualizarProfesor").modal("show");
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

			$("#btnIngresarC").click(function () {
				var nombre = $("#txtNombreC").val();
				var descripcion = $("#txtDescripcionC").val();
				var estado = $("#txtEstadoC").val();
				var profesor = $("#selectProfesor").val();
				var colegio = $("#selectColegio").val();
				if (nombre.length > 0 && descripcion.length > 0 && estado.length > 0 &&
					profesor != "0" && colegio != "0") {
					$.ajax({
						url: "<?php echo site_url()?>/ingrCurso",
						type: "POST",
						datatype: "json",
						data: {
							"nombre": nombre,
							"descripcion": descripcion,
							"estado": estado,
							"profesor": profesor,
							"colegio": colegio
						}
					}).done(function (obj) {
						console.log("Petición terminada. Resultado", obj);
						$("#InsertCurso").modal('hide');
						$("#txtNombre").val("");
						$("#txtDescripcion").val("");
						$("#txtEstado").val("");
						$("#selectColegio").val(0);
						$("#selectProfesor").val(0);
						MostrarMensaje("Curso ingresado", 3000);
						cargaDeCursos();


					});

				} else {
					MostrarMensaje("No deben de haber campos vacios.", 3000)
				}
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
							"estado": estado,
							"idCurso": idcur
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

			$("#btnActualizarSiC").click(function () {
				var id = $("#txtActIDC").val();
				var nombre = $("#txtActNombreC").val();
				var descripcion = $("#txtActDescripcionC").val();
				var estado = $("#txtActEstadoC").val();
				var profesor = $("#selectProfesorA").val();
				var colegio = $("#selectColegioA").val();
				if (id.length > 0 && nombre.length > 0 && descripcion.length > 0 && estado.length > 0 && profesor != "0" &&
					colegio != "0") {
					$.ajax({
						url: "<?php echo site_url()?>/ActualizarCurso",
						type: "POST",
						datatype: "json",
						data: {
							"idCurso": id,
							"nombre": nombre,
							"descripcion": descripcion,
							"estado": estado,
							"RutDocente": profesor,
							"idColegio": colegio
						},
						success: function (resultados) {
							console.log("Petición terminada. Resultado", resultados);
							$("#ModalActualizarCurso").modal('hide');
							$("#txtActIDC").val("");
							$("#txtActNombreC").val("");
							$("#txtActDescripcionC").val("");
							$("#txtActEstadoC").val("");
							$("#selectColegioA").val(0);
							$("#selectProfesorA").val(0);
							MostrarMensaje("Curso Actualizado", 3000);
							cargaDeCursos();
						}
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
							"estado": estado,
							"idCurso": idcur
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

			$("#btnActualizarSiP").click(function () {
				var rut = $("#txtActRutP").val();
				var nombre = $("#txtActNombreP").val();
				var descripcion = $("#txtActDescripcionP").val();
				var estado = $("#txtActEstadoP").val();
				if (rut.length > 0 && nombre.length > 0 && descripcion.length > 0 && estado.length > 0) {
					$.ajax({
						url: "<?php echo site_url()?>/ActualizarProfesor",
						type: "POST",
						datatype: "json",
						data: {
							"rut": rut,
							"nombre": nombre,
							"descripcion": descripcion,
							"estado": estado
						},
						success: function (resultados) {
							console.log("Petición terminada. Resultado", resultados);
							$("#ModalActualizarProfesor").modal('hide');
							$("#txtActRutP").val("");
							$("#txtActNombreP").val("");
							$("#txtActDescripcionP").val("");
							$("#txtActEstadoP").val("");
							MostrarMensaje("Profesor Actualizado", 3000);
							cargaDocente();
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
