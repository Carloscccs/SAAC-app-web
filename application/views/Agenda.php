<div class="col-lg-12 text-center color1">
          <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Lista</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">Personal</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Productos</a></li>
          </ul>
  </div>
          <div class="col-lg-12 tab-content">
            <div id="home" class="tab-pane fade in active text-center">
            <h3>Lista</h3>
            </div>
            <div id="menu1" class="tab-pane fade">
              <button class="accordion" >Ingreso</button>
              <div class="panel">
                <form id="formulario">
                  <div class="form-row">
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                      <label for="ing_rut">Rut :</label>
                      <input type="text" class="form-control" id="ing_rut" placeholder="11.222.333-4">
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <div class="controls">
                        <label for="ing_nombre">Nombre :</label>
                        <input type="text" class="form-control" id="ing_nombre" placeholder="Nombres...">
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <div class="controls">
                        <label for="ing_paterno">Apellidos :</label>
                        <input type="text" class="form-control" id="ing_apellidos" placeholder="Apellidos...">
                      </div>
                    </div>
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Fecha Nacimiento :</label>
                        <input type="date" class="form-control" id="ing_fechanacimiento">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>AFP :</label>
                        <select class="form-control" id="ing_afp">
                          <option selected disabled></option>
                          <option>Plan Vital</option>
                          <option>Capital</option>
                          <option>...</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Fonasa :</label>
                        <select class="form-control" id="ing_fonasa">
                          <option selected disabled></option>
                          <option>Si</option>
                          <option>No</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Dirección :</label>
                        <input type="text" class="form-control" id="ing_direccion" placeholder="Direccion...">
                      </div>
                    </div>
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Patente :</label>
                        <input type="text" class="form-control" id="ing_patente" placeholder="Patente...">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Categoria :</label>
                        <select class="form-control" id="ing_categoria">
                          <option selected disabled></option>
                          <option>Tecnico</option>
                          <option>Vendedor</option>
                          <option>Administrativo</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Teléfono :</label>
                        <input type="text" class="form-control" id="ing_telefono" placeholder="Teléfono...">
                      </div>
                   </div>
                   <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Hijos :</label>
                        <input type="text" class="form-control" id="ing_hijos" placeholder="Hijos...">
                      </div>
                    </div>
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Email :</label>
                        <input type="email" class="form-control" id="ing_email" placeholder="Email...">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Tipo de Contrato :</label>
                        <select class="form-control" id="ing_tipoContrato">
                          <option selected disabled></option>
                          <option>Plazo Fijo</option>
                          <option>Indefinido</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Fecha De Inicio :</label>
                        <input type="date" class="form-control" id="ing_fechainicio">
                      </div>
                    </div>
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Fecha De Termino :</label>
                        <input type="date" class="form-control" id="ing_fechatermino">
                      </div>
                    </div>
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Estado :</label>
                        <input type="text" class="form-control" id="ing_estado" placeholder="Estado...">
                      </div>
                    </div>
                    <div class="form-group col-md-3 control-group">
                      <div class="controls">
                        <label>Causal :</label>
                        <input type="text" class="form-control" id="ing_causal" placeholder="Causal...">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12 control-group text-center">
                      <button type="button" onclick="validarCampos()" id="ing_btn" class="btn btn-primary">Ingresar</button>
                    </div>
                  </div>
                  <!--rut nombres paterno materno edad  prevision direccion ciudad  comuna  fecha_nacimiento  sexo  estadoCivil telefono  celular email actividad!-->
                </form>
              </div>
              <button class="accordion">Búsqueda</button>
              <div class="panel">
                <p>Búsqueda de pacientes</p>
              </div>
            </div>
            <div id="menu2" class="tab-pane fade">
            <h3>Productos</h3>
            </div>
          </div>
<style type="text/css">
  .accordion {
    background-color: #eef;
    color: #449;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active2, .accordion:hover {
    background-color: #ccf;
}
.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
.accordion:after {
    content: '\02795'; /* Unicode character for "plus" sign (+) */
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

.active2:after {
    content: "\2796"; /* Unicode character for "minus" sign (-) */
}
.error{
  color:red;
}

</style>
<script type="text/javascript">
 $(document).ready(function(){
    $("#ing_rut").change(function(){
      if(validaRut==true){
        $.post(
          base_url+"principal/buscaPersonalPorRut",
          {rut:$(this).val()},
          function(data){
            //alert(data.ing_nombre)
            document.getElementById("formulario").reset();
            $("#ing_rut").val(data.ing_rut);
            $("#ing_nombre").val(data.ing_nombre);
            $("#ing_apellidos").val(data.ing_apellidos);
            $("#ing_afp").val(data.ing_afp);
            $("#ing_telefono").val(data.ing_telefono);
            $("#ing_fechanacimiento").val(data.ing_fechanacimiento);
            $("#ing_hijos").val((data.ing_hijos).val());
            $("#ing_direccion").val(data.ing_direccion);
            $("#ing_sexo").val(data.ing_sexo);
            $("#ing_fonasa").val(data.ing_fonasa);
            $("#ing_categoria").val(data.ing_categoria);
            $("#ing_patente").val(data.ing_patente);
            $("#ing_fechainicio").val(data.ing_fechainicio);
            $("#ing_tipoContrato").val(data.ing_tipoContrato);
            $("#ing_email").val(data.ing_email);
            $("#ing_estado_civil").val(data.ing_estado_civil);
            $("#ing_fechatermino").val(data.ing_fechatermino);
            $("#ing_causal").val(data.ing_causal);
            $("#ing_estado").val(data.ing_estado);
            $("#ing_rut").focus();
          },
          'json'
        );
      }
    });
    
  });
    var acc = document.getElementsByClassName("accordion");
  var i;
  var validaRut= false;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active2");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight){
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  }
  $("#ing_rut").rut({formatOn: 'keyup', validateOn: 'keyup change'})
  .on('rutInvalido', function(){ 
    $(this).parents(".control-group").addClass("error");
    $(this).addClass("error");
    validaRut=false;
  })
  .on('rutValido', function(){ 
    $(this).parents(".control-group").removeClass("error");
    $(this).removeClass("error");
    validaRut=true;
  });

  function validarCampos(){
    var campos = ["ing_rut","ing_nombre","ing_apellidos","ing_fechanacimiento","ing_afp","ing_direccion","ing_fonasa","ing_categoria","ing_causal","ing_tipoContrato"];
    var cuenta=0;
    campos.forEach(function(element){
      var resp = validaPorParte($("#"+element+"").val());

      if(element == "ing_rut" || element=="ing_fechanacimiento" || element == "ing_celular" || element == "ing_direccion")
        resp=true;
      if(resp==false || $("#"+element+"").val().trim().length ==0){
        $("#"+element+"").addClass("error");
        $("#"+element+"").parents(".control-group").addClass("error");
        cuenta+=1;
      }else{
        $("#"+element+"").removeClass("error");
        $("#"+element+"").parents(".control-group").removeClass("error");
      }
    });
    //Falta considerar la validacion de los campos que son solo números...
    var campos2= ["ing_hijos","ing_telefono"];
    campos2.forEach(function(element){
      var resp = validaPorParte2($("#"+element+"").val());
      if(resp==false){
        $("#"+element+"").addClass("error");
        $("#"+element+"").parents(".control-group").addClass("error");
        cuenta+=1;
      }else{
        $("#"+element+"").removeClass("error");
        $("#"+element+"").parents(".control-group").removeClass("error");
      }
    });
    if(cuenta ==0 && validaRut==true){
      //Solo en esta caso puedo almacenar...
      $.post(
        base_url+"principal/ingresarPersonal",
        {
          rut:        $("#ing_rut").val(),
          nombres:    $("#ing_nombre").val(),
          apellidos:    $("#ing_apellidos").val(),
          fecha_nacimiento:  $("#ing_fechanacimiento").val(),
          direccion:  $("#ing_direccion").val(),
          telefono:   $("#ing_telefono").val(),
          email:      $("#ing_email").val(),
          patente:    $("#ing_patente").val(),
          fonasa:    $("#ing_fona").val(),
          afp:       $("#ing_afp").val(),
          categoria:  $("#ing_categoria").val(),
          hijos:     $("#ing_hijos").val(),
          tipo_contrato:     $("#ing_tipoContrato").val(),
          fecha_inicio:  $("#ing_fechainicio").val(),
          fecha_termino:  $("#ing_fechatermino").val(),
          estado:  $("#ing_estado").val(),
          causal:  $("#ing_causal").val()
        },
        function(info){
          document.getElementById("formulario").reset();
          $("#ing_rut").focus();
          alert("Personal "+info+" correctamente!");
        },'json'
      );
    }
  }

  function validaPorParte(cadena){
    if(cadena!=null){
      for(var i =0;i<cadena.length;i++){
        if(!cadena[i].match(/[a-zA-ZáéíóúñÑ\s]/)){
          return false;
        }
      }
      return true;
    }else{
      return false;
    }
  }
  function validaPorParte2(cadena){
    if(cadena!=null){
      for(var i =0;i<cadena.length;i++){
        if(!cadena[i].match(/[0-9\s+]/)){
          return false;
        }
      }
      return true;
    }else{
      return false;
    }
  }
</script>