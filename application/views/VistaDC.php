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

	<title>Docente SAAC Movil</title>
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
				<li><a href="#"><i class="fa fa-fw fa-clock"></i> Pendiente</a></li>
			</ul>
		</div>

		<div class="content p-4">
			<h2 class="mb-4">Bienvenido docente del curso:
				<?=$Curso ?>
			</h2>

			<div class="card mb-4">
				<div class="card-body">
					<i>Gestiones las actividades que realizaran sus alumnos y aporte a la base de datos comunitaria de pictogramas: </i><br>
					<div class="container">
						<div class="row mt-2">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-Actividades-tab" data-toggle="pill" href="#pills-Actividades" role="tab"
									 aria-controls="pills-home" aria-selected="true">Actividades</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-Pictogramas-tab" data-toggle="pill" href="#pills-Pictogramas" role="tab"
									 aria-controls="pills-profile" aria-selected="false">Pictogramas</a>
								</li>
							</ul>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-Actividades" role="tabpanel" aria-labelledby="pills-home-tab">
										<div class="row">
											<div class="col-3 offset-9">
												<button type="button" class="btn btn-success" data-toggle="modal" id="btnModalAgregarAct">
													Agregar actividad
												</button>
											</div>
										</div>
										<div class="row">
											<p></p>
										</div>
										<div class="row">
											<div class="col-12">
												<table class="table table-bordered">
													<thead>
														<th>Id</th>
														<th>Oracion</th>
														<th>Vista</th>
														<th>Alternativas</th>
														<th>Deshabilitar</th>
													</thead>
													<tbody id="tbodyactividades"></tbody>
												</table>
											</div>
										</div>

									</div>
									<div class="tab-pane fade" id="pills-Pictogramas" role="tabpanel" aria-labelledby="pills-profile-tab">
										<div class="row">
											<div class="col-4">
												<select id="selectcategorias" class="custom-select-lg">
													<option value="" disabled="true" selected>Seleccione una categoria</option>
												</select>
												<p></p>
											</div>
											<div class="col-3 offset-5">
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
													Agregar
												</button>
											</div>
										</div>
										<div class="row">
											<table class="table table-bordered col-12">
												<thead>
													<th colspan="3" class="text-center">Pictogramas existentes</th>
												</thead>
												<tbody id="tbodyPictogramas"></tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="AgregarActividad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
						 aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel1">Agregar actividad</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="container">
											<div class="form-group">
												<div class="col-12">
													<label for="txtOracion">Oracion</label>
													<input type="text" class="form-control" id="txtOracion" placeholder="Ingrese la oracion">
												</div>
											</div>
											<div class="form-group">
												<div class="col-12">
													<label for="txtbuspict">Pictograma</label>
													<input type="text" class="form-control" id="txtbuspict" placeholder="busque los pictogramas">
												</div>
												<div class="col-12">
													<div class="col-3 offset-9">
														<p></p>
														<button class="btn btn-secondary" id="btnAgregaraSelect">Agregar</button>
														<p></p>
													</div>
												</div>
												<div class="col-12">
													<select id="selectCreaVista" size="6" style="width:100%;"></select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-3">
													<label for="txtPic1">Opcion 1</label>
													<input type="text" class="form-control" id="txtPic1" placeholder="opcion 1">
												</div>
												<div class="col-3">
													<label for="txtPic2">Opcion 2</label>
													<input type="text" class="form-control" id="txtPic2" placeholder="opcion 2">
												</div>
												<div class="col-3">
													<label for="txtPic3">Opcion 3</label>
													<input type="text" class="form-control" id="txtPic3" placeholder="opcion 3">
												</div>
												<div class="col-3">
													<label for="txtPic1">Opcion 4</label>
													<input type="text" class="form-control" id="txtPic4" placeholder="opcion 4">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-12">
												<label for="txtPosRes">Posicion de la respuesta</label>
												<input type="number" min="1" max="4" class="form-control" id="txtPosRes" placeholder="Opcion">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-success" id="btnAgregarActividad">Agregar</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						 aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Subir pictograma</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label for="txtNombrePicto">Nombre del pictograma</label>
											<input type="text" class="form-control" id="txtNombrePicto" placeholder="Nombre">
											<small id="txtPictoHelp" class="form-text text-muted">Ejemplo: "Hacer"</small>
										</div>
										<div class="form-group">
											<label for="txtDescPicto">Descripcion</label>
											<input type="text" class="form-control" id="txtDescPicto" placeholder="Descripcion">
											<small id="txtPictoDHelp" class="form-text text-muted">Ejemplo: "Realizar alguna accion"</small>
										</div>
										<div class="form-group">
											<label for="txtEjemPicto">Ejemplo</label>
											<input type="text" class="form-control" id="txtEjemPicto" placeholder="Ejemplo">
											<small id="txtPictoDHelp" class="form-text text-muted">Ejemplo: "Vamos a hacer un asado"</small>
										</div>
										<div class="form-group">
											<label for="txtTagsPicto">Tags</label>
											<input type="text" class="form-control" id="txtTagsPicto" placeholder="Tags">
											<small id="txtPictoDHelp" class="form-text text-muted">Ejemplo: "accion movimiento realizar"</small>
										</div>
										<div class="form-group">
											<label for="selCatPicto">Categoria</label>
											<select name="selectCategoriasPicto" id="selCatPicto" class="custom-select">
												<option value="" disabled="true" selected>Seleccione una categoria</option>
											</select>
										</div>
										<div class="input-group mb-3">
											<p></p>
											<div class="input-group-prepend">
												<span class="input-group-text">Subir</span>
											</div>
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="filePictoImg" accept="image/*">
												<label class="custom-file-label" for="filePictoImg"> Solo imagenes, preferible .png</label>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
										<button type="button" class="btn btn-primary" id="btnSubir">Subir</button>
									</div>

								</div>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="modalVista1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
						 aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalCenterTitle">Vista oracion</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<select id="selectvistaOracion"></select>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="modalVista2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
						 aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalCenterTitle">Vista alternativas</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<select id="selectvistaAltern"></select>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal" tabindex="-1" role="dialog" id="modaldeshactividad">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">¿Esta seguro?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<input type="hidden" id="idActividadDesh">
										<p>Esta accion
											<b>NO SE PUEDE DESHACER</b>
											<p>Los progresos de los alumnos seguiran ahi, pero esta actividad no volvera a aparecer en la aplicacion.</p>
											<b>¿Desea continuar?</b>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
										<button type="button" class="btn btn-danger" id="btnDeshActividad">Si</button>
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
	<script src="<?php echo base_url();?>lib/js/popper.min.js"></script>
	<script src="<?php echo base_url();?>lib/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>lib/js/bootadmin.min.js"></script>
	<script src="<?php echo base_url();?>lib/js/image-picker.min.js"></script>
	<script>
		$(function () {
			CargarArrays();
			CargarActividades();
			CargarPictogramasCategoria();
			$("#selectvistaOracion").imagepicker({
				hide_select: false
			});
			var IMGB64 = "data:image/jpeg;base64,";
			var nombresP = [];
			var infopic = [];


			function CargarPictogramasCategoria() {
				var url = "<?php echo site_url(); ?>/GC";
				$.getJSON(url, function (res) {
					$.each(res, function (i, o) {
						var x = "<option value='" + o.idCategoria + "'>" + o.Nombre + "</option>";
						$("#selectcategorias").append(x);
						$("#selCatPicto").append(x);
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
						image.src = "<?php echo base_url(); ?>" + o.img;
						image.setAttribute("class", "card-img-top");
						x += "<td class='text-center'><div class='card bg-light' style='width: 18rem;'>"+image.outerHTML+"<div class='card-body'><h5 class='card-title'>"+ o.Nombre+" </h5><p class='card-text'>"+o.Descripcion+"</p></div><div class='card-body'><a href='#' class='card-link text-light bg-dark'>"+o.RutDocente+"</a><a href='#' class='card-link text-danger'>Reportar</a></div></div></td>";
						i = i + 1;
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

			$("#btnSubir").click(function () {
				var Nombre = $("#txtNombrePicto").val();
				var Descripcion = $("#txtDescPicto").val();
				var Ejemplo = $("#txtEjemPicto").val();
				var Tags = $("#txtTagsPicto").val();
				var categoria = $("#selCatPicto").val();
				var imagen = $("#filePictoImg");
				var archivos = imagen[0].files;
				if (archivos.length > 0 && Nombre.length > 0 && Descripcion.length > 0 && Ejemplo.length > 0 && Tags.length >
					0 && categoria != "0") {
					var foto = archivos[0]; //Sólo queremos la primera imagen, ya que el usuario pudo seleccionar más
					var lector = new FileReader();
					//Ojo: En este caso 'foto' será el nombre con el que recibiremos el archivo en el servidor
					var formData = new FormData();
					formData.append("Imagen", foto);
					formData.append("Nombre", Nombre);
					formData.append("Descripcion", Descripcion);
					formData.append("Ejemplo", Ejemplo);
					formData.append("Tags", Tags);
					formData.append("Categoria", categoria);
					$.ajax({
						url: "<?php echo site_url()?>/AP",
						data: formData,
						type: 'POST',
						contentType: false,
						processData: false,
						success: function (resultados) {
							console.log("Petición terminada. Resultados", resultados);
							$('#exampleModal').modal('hide')
							MostrarMensaje("Pictograma agregado", 4000);
							$("#txtNombrePicto").val("");
							$("#txtDescPicto").val("");
							$("#txtEjemPicto").val("");
							$("#txtTagsPicto").val("");
							$("#selCatPicto").val(0);
							$("#filePictoImg").val(null);
							CargarArrays();
							$("#selectcategorias").change();
						}

					});

				} else {
					MostrarMensaje("No deben de haber campos vacios.", 3000);
					alert("No deben de haber campos vacios");
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

			function CargarActividades() {
				$("#tbodyactividades").empty();
				var url = "<?php echo site_url(); ?>/GA";
				$.getJSON(url, function (res) {
					$.each(res, function (i, o) {
						var x = "<tr><td>" + o.idActividad + "</td>";
						x += "<td>" + o.Oracion + "</td>";
						x += '<td> <button id="Vista" value="' + o.idActividad + '" class="btn">Vista</button></ td>';
						x += '<td> <button id="Altern" value="' + o.idActividad + '" class="btn">Alternativas</button></td>';
						x += '<td> <button id="Desah" value="' + o.idActividad +
							'" class="btn">Deshabilitar</button></td></tr>';
						$("#tbodyactividades").append(x);
					});
				});
			}

			$("#tbodyactividades").on("click", "#Altern", function (e) {
				e.preventDefault();
				$("#selectvistaAltern").empty();
				var id = $(this).val();
				$.ajax({
					url: "<?php echo site_url()?>/GRA",
					type: "POST",
					datatype: "json",
					data: {
						"Id": id
					}
				}).done(function (obj) {
					var x = "";
					$.each(JSON.parse(obj), function (i, o) {
						//console.log(i);
						var src1 = "<?php echo base_url(); ?>" + o['pic1'];
						var src2 = "<?php echo base_url(); ?>" + o['pic2'];
						var src3 = "<?php echo base_url(); ?>" + o['pic3'];
						var src4 = "<?php echo base_url(); ?>" + o['pic4'];
						var nombre1 = o['pic1nombre'];
						var nombre2 = o['pic2nombre'];
						var nombre3 = o['pic3nombre'];
						var nombre4 = o['pic4nombre'];
						x += "<option data-img-src='" + src1 + "' value='1' data-img-class='selectimage1' >" + nombre1 +
							"</option>";
						x += "<option data-img-src='" + src2 + "' value='2' data-img-class='selectimage1' >" + nombre2 +
							"</option>";
						x += "<option data-img-src='" + src3 + "' value='3' data-img-class='selectimage1' >" + nombre3 +
							"</option>";
						x += "<option data-img-src='" + src4 + "' value='4' data-img-class='selectimage1' >" + nombre4 +
							"</option>";
					});
					$("#selectvistaAltern").append(x);
					$("#selectvistaAltern").imagepicker({
						show_label: true
					});
				});
				$("#modalVista2").modal("show");
			});

			$("#tbodyactividades").on("click", "#Vista", function (e) {
				e.preventDefault();
				$("#selectvistaOracion").empty();
				var id = $(this).val();
				$.ajax({
					url: "<?php echo site_url()?>/GVA",
					type: "POST",
					datatype: "json",
					data: {
						"Id": id
					}
				}).done(function (obj) {
					//console.log(obj);
					var x = "";
					$.each(JSON.parse(obj), function (i, o) {
						var src = "<?php echo base_url(); ?>" + o[0].img;
						x += "<option data-img-src='" + src + "' value='" + i + "' data-img-class='selectimage1 ' >" + i +
							"</option>";
					});
					$("#selectvistaOracion").append(x);
					$("#selectvistaOracion").imagepicker();
				});
				$("#modalVista1").modal("show");
			});

			$("#tbodyactividades").on("click", "#Desah", function (e) {
				e.preventDefault();
				var id = $(this).val();
				$("#idActividadDesh").val(id);
				$("#modaldeshactividad").modal("show");
			});

			function CargarArrays() {
				var url = "<?php echo site_url(); ?>/GIP";
				$.getJSON(url, function (res) {
					$.each(res, function (i, o) {
						nombresP[i] = o.Nombre;
						infopic[i] = o;

					});
				});
			}

			function autocomplete(inp) {
				var arr = nombresP;
				console.log(arr);
				/*the autocomplete function takes two arguments,
				the text field element and an array of possible autocompleted values:*/
				var currentFocus;
				/*execute a function when someone writes in the text field:*/
				inp.addEventListener("input", function (e) {
					var a, b, i, val = this.value;
					/*close any already open lists of autocompleted values*/
					closeAllLists();
					if (!val) {
						return false;
					}
					currentFocus = -1;
					/*create a DIV element that will contain the items (values):*/
					a = document.createElement("DIV");
					a.setAttribute("id", this.id + "autocomplete-list");
					a.setAttribute("class", "autocomplete-items");
					/*append the DIV element as a child of the autocomplete container:*/
					this.parentNode.appendChild(a);
					/*for each item in the array...*/
					for (i = 0; i < arr.length; i++) {
						/*check if the item starts with the same letters as the text field value:*/
						if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
							/*create a DIV element for each matching element:*/
							b = document.createElement("DIV");
							/*make the matching letters bold:*/
							b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
							b.innerHTML += arr[i].substr(val.length);
							/*insert a input field that will hold the current array item's value:*/
							b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
							/*execute a function when someone clicks on the item value (DIV element):*/
							b.addEventListener("click", function (e) {
								/*insert the value for the autocomplete text field:*/
								inp.value = this.getElementsByTagName("input")[0].value;
								/*close the list of autocompleted values,
								(or any other open lists of autocompleted values:*/
								closeAllLists();
							});
							a.appendChild(b);
						}
					}
				});
				/*execute a function presses a key on the keyboard:*/
				inp.addEventListener("keydown", function (e) {
					var x = document.getElementById(this.id + "autocomplete-list");
					if (x) x = x.getElementsByTagName("div");
					if (e.keyCode == 40) {
						/*If the arrow DOWN key is pressed,
						increase the currentFocus variable:*/
						currentFocus++;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 38) { //up
						/*If the arrow UP key is pressed,
						decrease the currentFocus variable:*/
						currentFocus--;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 13) {
						/*If the ENTER key is pressed, prevent the form from being submitted,*/
						e.preventDefault();
						if (currentFocus > -1) {
							/*and simulate a click on the "active" item:*/
							if (x) x[currentFocus].click();
						}
					}
				});

				function addActive(x) {
					/*a function to classify an item as "active":*/
					if (!x) return false;
					/*start by removing the "active" class on all items:*/
					removeActive(x);
					if (currentFocus >= x.length) currentFocus = 0;
					if (currentFocus < 0) currentFocus = (x.length - 1);
					/*add class "autocomplete-active":*/
					x[currentFocus].classList.add("autocomplete-active");
				}

				function removeActive(x) {
					/*a function to remove the "active" class from all autocomplete items:*/
					for (var i = 0; i < x.length; i++) {
						x[i].classList.remove("autocomplete-active");
					}
				}

				function closeAllLists(elmnt) {
					/*close all autocomplete lists in the document,
					except the one passed as an argument:*/
					var x = document.getElementsByClassName("autocomplete-items");
					for (var i = 0; i < x.length; i++) {
						if (elmnt != x[i] && elmnt != inp) {
							x[i].parentNode.removeChild(x[i]);
						}
					}
				}
				/*execute a function when someone clicks in the document:*/
				document.addEventListener("click", function (e) {
					closeAllLists(e.target);
				});
			}

			$("#btnModalAgregarAct").click(function () {
				autocomplete(document.getElementById("txtbuspict"));
				autocomplete(document.getElementById("txtPic1"));
				autocomplete(document.getElementById("txtPic2"));
				autocomplete(document.getElementById("txtPic3"));
				autocomplete(document.getElementById("txtPic4"));
				$('#AgregarActividad').modal('show');
			});

			$("#btnAgregaraSelect").click(function () {
				var picto = $("#txtbuspict").val();
				var x = "";
				$.each(infopic, function (i, o) {
					var nombre = o.Nombre;
					if (nombre == picto)
						x += "<option value='" + o.idPictograma + "' >" + o.Nombre + "</option>";
				});
				$("#selectCreaVista").append(x);
				$("#txtbuspict").val("");
			});

			$("#btnAgregarActividad").click(function () {
				var oracion = $("#txtOracion").val();
				var selectPictog = $.map($('#selectCreaVista option'), function (e) {
					return e.value;
				});
				var nompic1 = $("#txtPic1").val();
				var nompic2 = $("#txtPic2").val();
				var nompic3 = $("#txtPic3").val();
				var nompic4 = $("#txtPic4").val();
				var posres = $("#txtPosRes").val();
				if (oracion.length > 0 && selectPictog != [] && nompic1.length > 0 && nompic2.length > 0 && nompic3.length >
					0 &&
					nompic4.length > 0 && posres.length > 0) {
					console.log("ENTRA");
					var pic1 = 0;
					var pic2 = 0;
					var pic3 = 0;
					var pic4 = 0;
					var encontrados = true;
					$.each(infopic, function (i, o) {
						var nombre = o.Nombre;
						if (nombre == nompic1) {
							pic1 = o.idPictograma;
						} else if (nombre == nompic2) {
							pic2 = o.idPictograma;
						} else if (nombre == nompic3) {
							pic3 = o.idPictograma;
						} else if (nombre == nompic4) {
							pic4 = o.idPictograma;
						} else {
							//encontrados = false;
						}
					});
					if (posres > 0 && posres <= 4 && encontrados == true) {
						var jsonVista = JSON.stringify(selectPictog);
						var formData = new FormData();
						formData.append("oracion", oracion);
						formData.append("vistarr", jsonVista);
						formData.append("pic1", pic1);
						formData.append("pic2", pic2);
						formData.append("pic3", pic3);
						formData.append("pic4", pic4);
						formData.append("PosRes", posres);
						$.ajax({
							url: "<?php echo site_url()?>/AA",
							data: formData,
							type: 'POST',
							contentType: false,
							processData: false,
							success: function (resultados) {
								console.log(resultados);
								CargarActividades();
								$("#txtPic1").val("");
								$("#txtPic2").val("");
								$("#txtPic3").val("");
								$("#txtPic4").val("");
								$("#txtPosRes").val("");
								$("#selectCreaVista").empty();
								$('#AgregarActividad').modal('hide')
								MostrarMensaje("Actividad agregada", 3000);
							}

						});
					} else {
						alert("Posicion de respuesta fuera de los valores o nombres de las opciones incorrectos")
					}
				} else {
					console.log("NO ENTRA");
					MostrarMensaje("Faltan datos", 3000);
				}
			});

			$("#btnDeshActividad").click(function () {
				var idOculto = $("#idActividadDesh").val();
				var formData = new FormData();
				formData.append("id", idOculto);
				$.ajax({
					url: "<?php echo site_url()?>/DA",
					data: formData,
					type: 'POST',
					contentType: false,
					processData: false,
					success: function (resultados) {
						console.log(resultados);
						CargarActividades();
						$("#modaldeshactividad").modal("hide");
						MostrarMensaje("Deshabilitada", 3000);
					}
				});
			});

		});

	</script>

</body>

</html>
