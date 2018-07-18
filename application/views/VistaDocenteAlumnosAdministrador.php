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
    <link href="<?php echo base_url();?>lib/css/snackbar.css" rel="stylesheet">
	</head>

	<body>
		<nav class="navbar navbar-expand-md navbar-light fixed-top bg-primary" id="navAd">
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
						<a class="nav-link" href="<?php echo site_url();?>/CVAA">Alumnos
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url();?>/CVRA">Reportes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url();?>/CVCA">Gestion de contenidos</a>
					</li>
				</ul>
				<form class="form-inline mt-2 mt-md-0" action="<?php echo site_url();?>/CS">
					<button class="btn btn-danger my-2 my-sm-0" type="submit" >Salir</button>
				</form>
			</div>
		</nav>
        <main role="main" class="container" >
          <div class="col-5" >
          <h2 id="lbCurso">Administrador</h2>
        </div>
          <div class="row">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-Profesor-tab" data-toggle="pill" href="#pills-Profesor" role="tab" aria-controls="pills-home"
            aria-selected="true">profesor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-Alumno-tab" data-toggle="pill" href="#pills-Alumno" role="tab" aria-controls="pills-profile"
            aria-selected="false">Alumno</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-Profesor" role="tabpanel" aria-labelledby="pills-home-tab">
              <!--<div class="row">
        <div class="col-5">
                  
                </div>
      <div class="col-3 offset-4">
        <button id="btnAgregarProfesor" value="" class="btn btn-success" data-toggle="modal" data-target="#InsertAlumnos" >Agregar Profesor</button>
        </div>
      </div>
      -->
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
        <button id="btnAgregarAlumno" value="" class="btn btn-success" data-toggle="modal" data-target="#InsertAlumnos" >Agregar alumno</button>
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

          </div>
        </div>
      </div>
      
      

<!--<div id="InsertProfesor" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Ingresar Profesor</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <div class="modal-body">
         <label for="IngrRut">Rut</label>
         <input type="text" class="form-control" name="IngrRut" required id="txtRutP" placeholder="Rut sin guion ni puntos" onkeypress='return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 0 || event.charCode == 32'>
        <br>
        <label>Nombre </label>
          <input type="text" class="form-control" name="IngrNombre" required id="txtNombreP" placeholder="Juanito Perez">
        <br>
        <label >Descripcion </label>
          <input type="text" class="form-control" name="IngrDescripcion" required id="txtDescripcionP" placeholder="Descripcion...">
          <input type="hidden" name="IngrEstado" id="txtEstadoP" value="Activo">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="btnIngresarP">ingresar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>-->      


<div id="InsertAlumnos" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Ingresar Alumno</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <div class="modal-body">
         <label for="IngrRut">Rut</label>
         <input type="text" class="form-control" name="IngrRut" required id="txtRut" placeholder="Rut sin guion ni puntos" onkeypress='return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 0 || event.charCode == 32'>
        <br>
        <label>Nombre </label>
          <input type="text" class="form-control" name="IngrNombre" required id="txtNombre" placeholder="Juanito Perez">
        <br>
        <label >Edad </label>
          <input type="text" class="form-control" name="IngrEdad" required id="txtEdad" placeholder="Edad..." onkeypress='return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 0 || event.charCode == 32'>
        <br>
        <label >Descripcion </label>
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

<div id="ModalEliminarProfesor" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Eliminar</h4>
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

<div id="ModalActualizarProfesor" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Actualizar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idocultoActualizar">
        <label >Rut </label>
          <input type="text" disabled class="form-control" name="ActRutP" id="txtActRutP"/>
        </br>
        <label >Nombre </label>
          <input type="text" class="form-control" name="ActNombre" id="txtActNombreP"/>
          </br>
        <label >Descripcion </label>
          <input type="text" class="form-control" name="ActDecripcion" id="txtActDescripcionP"/>
          </br>
        <label >Estado </label>
          <input type="text" class="form-control" name="ActEstado" id="txtActEstadoP"/>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning" id="btnActualizarSiP">Actualizar</button>
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
          <input type="text" class="form-control" name="ActEdad" id="txtActEdad" onkeypress='return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 0 || event.charCode == 32'/>
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
      
      <div id="snackbar" style="position: absolute;z-index: 200"></div>
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
                  var idcur=0;
                  cargaDocente();
                  CargarCursos();
                  function cargaDocente(){
                    var url = "<?php echo site_url(); ?>/MostrarDocenteAdministrador";
                    $("#TablaDocente").empty();
                    $.getJSON(url, function (res) {
                        $.each(res, function (i, o) {
                            var x = "<tr><td>" + o.Rut + "</td>";
                            x += "<td>" + o.Nombre + "</td>";
                            x += "<td>" + o.Descripcion + "</td>";
                            x += "<td>" + o.Estado + "</td>";
                            x += '<td> <button id="EditP" value="' + o.Rut + "," + o.Nombre + "," + o.Descripcion + "," + o.Estado+'" class="btn btn-warning">Modificar</button>';
                            x += '<td> <button id="DeleteP" value="'+o.Rut+'" class="btn btn-danger">Borrar</button></ td></tr>';
                            $("#TablaDocente").append(x);
                        });
                    });
                  }
                  function cargarUsuarios(){
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
                            x += '<td> <button id="Edit" value="' + o.Rut + "," + o.Nombre + "," + o.Edad + "," + o.Descripcion + "," + o.Estado+'" class="btn btn-warning">Modificar</button>';
                            x += '<td> <button id="Delete" value="'+o.Rut+'" class="btn btn-danger">Borrar</button></ td></tr>';
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
                            x += '<td> <button id="Edit" value="' + o.Rut + "," + o.Nombre + "," + o.Edad + "," + o.Descripcion + "," + o.Estado+'" class="btn btn-warning">Modificar</button>';
                            x += '<td> <button id="Delete" value="'+o.Rut+'" class="btn btn-danger">Borrar</button></ td></tr>';
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

                   $("#btnIngresar").click(function () {
                    var rut = $("#txtRut").val();
                    var nombre = $("#txtNombre").val();
                    var edad = $("#txtEdad").val();
                    var descripcion = $("#txtDescripcion").val();
                    var estado = $("#txtEstado").val();
                    if (rut.length > 0 && nombre.length > 0 && descripcion.length > 0 && estado.length > 0)
                    {
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
                  
                  }else{
                    MostrarMensaje("No deben de haber campos vacios.",3000)
                  }
                    });
                  

              $("#btnActualizarSi").click(function () {
                    var rut = $("#txtActRut").val();
                    var nombre = $("#txtActNombre").val();
                    var edad = $("#txtActEdad").val();
                    var descripcion = $("#txtActDescripcion").val();
                    var estado = $("#txtActEstado").val();
                   if (rut.length > 0 && nombre.length > 0 && descripcion.length > 0 && estado.length > 0)
                    {
                      
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
                   }else{
                    MostrarMensaje("No deben de haber campos vacios.",3000)
                   }

                });

              $("#btnActualizarSiP").click(function () {
                    var rut = $("#txtActRutP").val();
                    var nombre = $("#txtActNombreP").val();
                    var descripcion = $("#txtActDescripcionP").val();
                    var estado = $("#txtActEstadoP").val();
                   if (rut.length > 0 && nombre.length > 0 && descripcion.length > 0 && estado.length > 0)
                    {
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
                   }else{
                    MostrarMensaje("No deben de haber campos vacios.",3000)
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