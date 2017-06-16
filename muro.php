<?php
  require("functions.php");
  get_header();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section>
  <div class="container-fluid nomargin">
    <div class="col-md-12 col-xs-12 bg-muro nomargin">
      <div class="col-md-12 col-xs-12 border-dotted">
        <div class="btn btn-file añadir-foto" style="float:right">
          <i class="fa fa-file-image-o" aria-hidden="true"></i> Añadir fotografía
          <input type="file" name="attachment">
        </div>
        <p class="iniciales">
          M & A
        </p>
      </div>
    </div>
    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
      <div class="col-md-12 col-xs-12 nomargin content-muro">
        <div class="col-md-6 col-xs-6 nomargin foto-perfil">
          <img src="images/recursos/foto-perfil.png" alt="">
          <input class="form-control no-border centers" type="text" value="Mónica" id="example-text-input">
        </div>
        <div class="col-md-6 col-xs-6 nomargin foto-perfil">
          <img src="images/recursos/foto-perfil.png" alt="">
          <input class="form-control no-border centers" type="text" value="Adán" id="example-text-input">
        </div>
      </div>
      <div class="col-md-10 col-md-offset-1 col-xs-12 titulo-perfil">
        <p>
          fecha
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="col-md-12 añade">
          <p>
            Aun no has añadido la fecha de tu evento
          </p>
        </div>
      </div>
      <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
          <!-- Calendar -->
          <div class="box box-solid  collapsed-box boton-calendar">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Añadir Fecha</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#!">Añadir nuevo evento</a></li>
                    <li><a href="#!">Borrar evento</a></li>
                    <!-- <li><a href="#!">View calendar</a></li> -->
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box -->
      </div>

      <div class="col-md-10 col-md-offset-1 col-xs-12 titulo-perfil">
        <p>
          lugar
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="col-md-12 col-xs-12 añade">
          <p>
            Aún no has añadido el lugar de tu boda.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3 col-xs-12">
        <a href="#!">
          <p class="boton-ceremonia">
            <img src="images/recursos/pin_ceremonia.svg" alt="The Wedding Board"> <span>Ubicación de la ceremonia</span>
          </p>
        </a>
      </div>
      <div class="col-md-6 col-md-offset-3 col-xs-12 top-20">
        <a href="#!">
          <p class="boton-ceremonia">
            <img src="images/recursos/pin-recepcion.png" alt="The Wedding Board"> <span>Ubicación de la recepción</span>
          </p>
        </a>
      </div>
      <div class="col-md-6 col-md-offset-3 col-xs-12 top-20">
        <a href="#!">
          <p class="boton-ceremonia">
            <img src="images/recursos/pin-recepcion.png" alt="The Wedding Board"> <span>Ubicación de Post o Pre eventos</span>
          </p>
        </a>
      </div>
    </div>
    <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-perfil">
      <p>
        mis proveedores
      </p>
      <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
    </div>
    <div class="col-md-8 col-md-offset-2 col-xs-12">
      <div class="col-md-12 añade">
        <p>
          Aún no tienes proveedores. Busca y añade.
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-md-offset-5 col-xs-10 col-xs-offset-1 top-50">
    <a href="muro-2.php">
      <p type="submit" class="btn boton-registro hvr-back-pulse bottom-100">Continuar</p>
    </a>
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

<?php
  get_footer();
?>
