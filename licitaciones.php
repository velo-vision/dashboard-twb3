<?php
  require("functions.php");
  get_header();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid nomargin">
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p>
          LICITACIONES
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-6 col-md-offset-3" style="">
        <p class="lista">aún no tienes licitaciones creadas</p>
        <div class="col-md-12">
          <a href="crear-licitacion.php">
            <button type="button" class="btn btn-primary boton-invitados">
              <img src="images/recursos/open.png" alt="The Wedding Board"> Crear nueva licitación
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php
  get_footer();
?>
