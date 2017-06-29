<?php
  //include("head-2.php");
?>
<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();

  get_aside();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid">
      <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 col-xs-12 titulo-perfil titulo-cabezera">
        <p>configuración</p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-12 padin-cero-conf">
        <div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1 ">
         <a href="index.php">
            <img title="Logo" alt="The Wedding Board"  data-wow-duration="2.5s" data-wow-delay="" src="images/recursos/logo.png"  class="wow fadeInDown logo-config"> </a>
          <!-- <img src="images/recursos/foto-perfil.png" alt=""> -->
          <div class="col-sm-12 col-md-12 texto-admin padin-cero-conf">
            <p class="texto1">Sophi<span>e D</span>ueso</p>
            <p class="texto2">Administrador</p>
          </div>
        </div>
      </div>    
      <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 linea-config"></div>
      <div class="col-sm-12 col-md-6 col-md-offset-3">
        <div class="col-sm-12 col-md-12 col-lg-12 centrado titulo2-config">
          <p>CAMBIAR CONTRASEÑA</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-lg-offset-3 centrado campos-conf">
          <p>Nueva contraseña</p>
          <input type="text" name="correo">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-lg-offset-3 centrado campos-conf">
          <p>Repetir contraseña</p>
          <input type="text" name="correo2">
        </div>
      </div>
      <div class="col-xs-12 col-md-4 col-md-offset-4 centrado">
        <a href="configuracion1.php" class="boton-config">
          <p>Guardar</p>
        </a>
      </div>
    </div>
  </section>

</div>

<div class="control-sidebar-bg"></div>
</div>


<?php
	include("footer-2.php");
?>
