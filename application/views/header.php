<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Agenda - Dr. Blas Rivera</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSS -->
    <!--link href="<?=base_url()?>bootstrap/assets/css/bootstrap.css" rel="stylesheet"-->
    <style type="text/css">

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }


      #wrap > .container {
        padding-top: 60px;
      }
      /*.container .credit {
        margin: 20px 0;
      }*/

      code {
        font-size: 80%;
      }
      /*.tabla3{
        font-size: 0.8em;
        border: 1px solid;
      }*/
      .tabla3 label, select{
        font-size: 12px;
        padding: 0;
        margin:0;
      }
      .tabla3 select{
        width: 120px;
      }

      .tabla3 tr:nth-child(even) {background: #DDD}
      .tabla3 tr:nth-child(odd) {background: #EEE}
      .ancho_rut{
        width: 100px;
        font-size: 12px;

      }
      .ancho_hora{
        font-size: 12px;
        width: 35px;
      }
      .ancho_1{
        width: 150px;
        font-size: 12px;
      }
      .ancho_2{
        width: 100px;
        font-size: 12px;
      }
      #tabla_listado th{
        background-color: white;
      }
      #tabla_listado{
        margin-top: 0%;
        width: 80%;
        margin-left:7%;
        margin-bottom: 5%;
      }
      #tabla_listado input{
        font-size: 12px;
        padding: 0px;
        margin-top: 2px;
        margin-bottom: 2px;
        text-align: center;
      }
      #tabla_listado select{
        font-size: 12px;
        padding: 0;
        height: 23px;
        margin-top: 2px;
        margin-bottom: 2px;
      }
      #tabla_listado button{
        /*padding: 0;*/
        margin: 0;
      }
      #tabla_listado tr:nth-child(even) {background: #EFFBF8}
      #tabla_listado tr:nth-child(odd) {background: #E0E6F8}
      .contFicha{
        margin-top:3%;
        font-size: 12px;
        margin-bottom: 5%;
      }
      .contFicha input{
        font-size: 12px;
      }
      .rut{
        width: 80px;
      }
      .edad{
        width: 20px;
      }
      .fecha{
        width: 70px;
      }
      .ancho30{
        width: 30px;
      }
      .labelmenos label{
        font-size: 10px;
      }
      .labelmenos input{
        font-size: 10px;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!--link href="<?=base_url()?>bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet"-->
    <!--link href="<?=base_url()?>../CSS/agenda.css" rel="stylesheet"-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?=base_url()?>bootstrap/assets/ico/Health.ico">
    <script type="text/javascript" src="<?=base_url()?>jqueryUI/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?=base_url()?>jqueryUI/js/jquery-ui-1.10.4.custom.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>jqueryUI/css/smoothness/jquery-ui-1.10.4.custom.css">

    <script type="text/javascript">
      base_url = "<?=base_url()?>";
    </script>
    <link rel="stylesheet" href="<?=base_url()?>csvtotable/css/csvtable.css" type="text/css" />
    <script type="text/javascript" src="<?=base_url()?>csvtotable/js/jquery.csvToTable.js" charset="utf-8"></script>
    <script type="text/javascript" src="<?=base_url()?>csvtotable/js/jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>JS/jquery.datepicker.es.js"></script>
    <script type="text/javascript" src="<?=base_url();?>JS/jquery.rut.min.js"></script>
    
    <script src="<?=base_url()?>JS/ajaxForm.js"></script>
  </head>

  <body> 
    <!--div style="margin-top: 0px; margin-right: 3%; float:right; padding: 5px 10px 0px 10px; background-color: rgb(220,220,220); box-shadow: 3px 3px 10px 0px #55f; text-align: center; font-weight: bold; border-radius: 5px;"><p>Bienvenido <font style="color:red"><?=$nombre?></font><br><a href="<?=base_url()?>Principal/logout">Cerrar Sesión</a></p></div-->
    <div class="container">
      <div class="row">
        
      <script type="text/javascript">
        $(document).ready(function(){
            var base_url = '<?=base_url();?>';
            var mydate=new Date();
            var year=mydate.getYear(); 
            if (year < 1000) year+=1900;
            var day=mydate.getDay();
            var month=mydate.getMonth();
            var daym=mydate.getDate();
            if (daym<10) daym="0"+daym;
            var dayarray=new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
            var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            
                var dia = daym;
                var mes = month+1;
                if(mes<10)
                    mes = "0"+mes;
                
        });
      </script>
