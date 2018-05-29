
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sitelcom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url()?>bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
       #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

    </style>
    <link href="<?=base_url()?>bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>bootstrap/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>bootstrap/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>bootstrap/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?=base_url()?>bootstrap/assets/ico/Health.ico">
  </head>

  <body>

    <div class="container">      
      <form class="form-signin" style="background-color: rgba(200,200,250,0.7); box-shadow: 10px 10px 10px 0px #55f;" method="post" action="<?=base_url()?>Inicio">
        <h3 style="color:#55f; text-align: center;">Acceso a Sitelcom</h3>
        <input type="text" class="input-block-level" placeholder="Rut" name="rut">
        <input type="password" class="input-block-level" placeholder="Contraseña" name="clave">
        <table border="0" align="center" style="width: 100%;">
          <tr>
            <td>
              <label class="checkbox" style="color:#55f;">
          <input type="checkbox" value="Recordar"> Recordar
        </label>
            </td>
            <td align="right">
              <button class="btn btn-medium btn-primary" type="submit">Conectar</button>
            </td>
          </tr>
        </table>
        <label class="error" style="color:#f00; font-size:15px; text-align: center; font-weight: bold; margin-top: 20px;"><?=$error;?></label>
      </form>

    </div>
    <div id="footer">
      <div class="container" style="text-align:center; font-size:12px;">
        <p class="muted credit">
        Desarrollado por <a href="#">www.morelike.cl</a></p>
      </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>bootstrap/assets/js/jquery.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-transition.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-alert.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-modal.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-tab.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-popover.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-button.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-collapse.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-carousel.js"></script>
    <script src="<?=base_url()?>bootstrap/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
