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
				<li><a href="<?php echo site_url();?>/CVAR"><i class="fa fa-fw fa-images"></i> Reportes pictogramas</a></li>
			</ul>
		</div>

		<div class="content p-4">
			<h2 class="mb-4">Bienvenido:
				<?=$Curso ?>
			</h2>

			<div class="card mb-4">
				<div class="card-body">
					<div class="text-center">
						<img src="<?php echo base_url();?>img/logo.png" class="" width="20%" heigth="20%" />
					</div>
					<p class="font-weight-normal">Aqui se mostraran los reportes que han hecho los docentes sobre algun problema
						encontrado con los pictogramas:</p>
					<div class="container">
						<div class="row">
							<table class="table table-responsive table-hover">
								<thead>
									<th scope="col" class="text-center">ID</th>
									<th scope="col" class="text-center">Motivo</th>
									<th scope="col" class="text-center">Estado</th>
									<th scope="col" class="text-center">ID Pictograma</th>
									<th scope="col" class="text-center">Rut docente</th>
									<th scope="col" class="text-center">Cambiar estado</th>
								</thead>
								<tbody id="tbodyreportepictogramas"></tbody>
							</table>
						</div>
						<!-- MODAL ACTUALIZAR ESTADO -->
						<div id="ModalActualizarEstado" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
						 aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Actualizar estado</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<input type="hidden" id="idocultoReportePictograma">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text" for="selectEstadoReporte">Opciones</label>
											</div>
											<select class="custom-select" id="selectEstadoReporte">
                                                <option value="" disabled="true" >Seleccione:</option>
                                                <option value="Pendiente">Pendiente</option>
												<option value="Revisado">Revisado</option>
											</select>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary" id="btnActualizarSi">Si</button>
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
	<script src="<?php echo base_url();?>lib/js/bootstrap-notify.js"></script>
	<script>
		$(function () {
			cargarReportes();

			function cargarReportes() {
				var url = "<?php echo site_url(); ?>/GRP";
				$("#tbodyreportepictogramas").empty();
				$.getJSON(url, function (res) {
					$.each(res, function (i, o) {
						var x = "<tr><td class='text-center'>" + o.idReporte + "</td>";
						x += "<td class='text-center'>" + o.Motivo + "</td>";
						x += "<td class='text-center'>" + o.Estado + "</td>";
						x += "<td class='text-center'>" + o.idPictograma + "</td>";
						x += "<td class='text-center'>" + o.RutDocente + "</td>";
						x += '<td> <button id="ActualizarR" value="' + o.idReporte +
							'" class="btn btn-warning">Cambiar estado</button></ td></tr>';
						$("#tbodyreportepictogramas").append(x);
					});
				});
			}

			$("#tbodyreportepictogramas").on("click", "#ActualizarR", function (e) {
				e.preventDefault();
				$("#idocultoReportePictograma").val($(this).val());
				$("#ModalActualizarEstado").modal("show");
			});

			$("#btnActualizarSi").click(function () {
                var id = $("#idocultoReportePictograma").val();
                var estado = $("#selectEstadoReporte").val();
				$.ajax({
					url: "<?php echo site_url()?>/ARP",
					type: "POST",
					datatype: "json",
					data: {
                        "id": id,
                        "estado":estado
					}
				}).done(function (obj) {
					console.log(obj);
					$.notify({
						// options
						message: 'Estado actualizado'
					}, {
						// settings
						type: 'success',
						z_index: 1041,
						placement: {
							from: "top",
							align: "right"
						}
					});
					cargarReportes();
					$("#ModalActualizarEstado").modal("hide");

				});
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
