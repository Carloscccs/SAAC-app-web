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
					<i>Revise el estado de sus alumnos: </i><br>
					<div class="container">
						<div class="row">
							<div class="col-3 mt-2 mb-2">
								<select id="selectAlumno" class="custom-select-lg">
									<option value="" disabled selected>Seleccione Alumno</option>
								</select>
								<p></p>
							</div>
							<div class="col-3 offset-3 mt-2 mb-2">
								<input id="btnDescargarTodo" type="button" value="Descargar todos" class="btn btn-success">
							</div>
							<div class="col-3 mt-2 mb-2">
								<input id="btnDescargarSolo" type="button" disabled="true" value="Descargar este alumno" class="btn btn-warning">
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
							</div>
						</div>
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
			SelectAlumnos();
			var jsonAlumno = "";
			var nombreAlumno = "";
			function SelectAlumnos() {
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
				nombreAlumno = $("#selectAlumno option:selected").text();
				$.ajax({
					url: "<?php echo site_url()?>/GContenido",
					type: "POST",
					datatype: "json",
					data: {
						"Rut": rut
					}
				}).done(function (obj) {
					$("#TablaContenido").empty();
					$("#btnDescargarSolo").prop( "disabled",false);
					jsonAlumno = JSON.parse(obj);
					$.each(JSON.parse(obj), function (i, o) {
						var x = "<tr><td>" + o.Tiempo + "</td>";
						x += "<td>" + o.Estado + "</td>";
						x += "<td>" + o.idActividad + "</td>";
						$("#TablaContenido").append(x);
					});

				});
			});

			$("#btnDescargarTodo").click(function () {
				var rut = "0";
				$.ajax({
					url: "<?php echo site_url()?>/GR",
					type: "POST",
					datatype: "json",
					data: {
						"rut": rut
					}

				}).done(function (obj) {
					console.log(obj);
					JSONToCSVConvertor(obj,"Reporte alumnos",true);
					alert("Descargado");
				});
			});

			$("#btnDescargarSolo").click(function () {
				var nombre = "Reporte alumno: "+nombreAlumno;
				JSONToCSVConvertor(jsonAlumno,nombre,true);
				alert("Descargado");
			});

			function JSONToCSVConvertor(JSONData, ReportTitle, ShowLabel) {
				//If JSONData is not an object then JSON.parse will parse the JSON string in an Object
				var arrData = typeof JSONData != 'object' ? JSON.parse(JSONData) : JSONData;

				var CSV = '';
				//Set Report title in first row or line

				CSV += ReportTitle + '\r\n\n';

				//This condition will generate the Label/Header
				if (ShowLabel) {
					var row = "";

					//This loop will extract the label from 1st index of on array
					for (var index in arrData[0]) {

						//Now convert each value to string and comma-seprated
						row += index + ';';
					}

					row = row.slice(0, -1);

					//append Label row with line break
					CSV += row + '\r\n';
				}

				//1st loop is to extract each row
				for (var i = 0; i < arrData.length; i++) {
					var row = "";

					//2nd loop will extract each column and convert it in string comma-seprated
					for (var index in arrData[i]) {
						row += '"' + arrData[i][index] + '";';
					}

					row.slice(0, row.length - 1);

					//add a line break after each row
					CSV += row + '\r\n';
				}

				if (CSV == '') {
					alert("Invalid data");
					return;
				}

				//Generate a file name
				var fileName = "MyReport_";
				//this will remove the blank-spaces from the title and replace it with an underscore
				fileName += ReportTitle.replace(/ /g, "_");

				//Initialize file format you want csv or xls
				var uri = 'data:text/csv;charset=utf-8,' + escape(CSV);

				// Now the little tricky part.
				// you can use either>> window.open(uri);
				// but this will not work in some browsers
				// or you will not get the correct file extension    

				//this trick will generate a temp <a /> tag
				var link = document.createElement("a");
				link.href = uri;

				//set the visibility hidden so it will not effect on your web-layout
				link.style = "visibility:hidden";
				link.download = fileName + ".csv";

				//this part will append the anchor tag and remove it after automatic click
				document.body.appendChild(link);
				link.click();
				document.body.removeChild(link);
			}


		});

	</script>

</body>

</html>
