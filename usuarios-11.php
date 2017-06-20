<?php
  require("functions.php");
  get_header();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid">
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p>
          mensajes
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-12">
          <div class="box-header with-border">
            <span class="box-title"></span>
            <div class="box-tools pull-right">
              <div class="has-feedback">
                <input type="text" class="form-control input-sm" placeholder="Search Mail">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <!-- <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
              </button> -->
              <div class="dropdown boton-categoria">
                  <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-tag" aria-hidden="true"></i> Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                  </div>
                </div>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm">
                  Borrar <i class="fa fa-trash-o"></i>
                </button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              <div class="pull-right pag-center">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
            <form action="">
            <!--Empieza cuadro-->
            <div class="col-md-12 col-sm-12 col-xs-12 confirma dotted-down">
              <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
              </div>
              <div class="col-md-2 col-sm-3 col-xs-5">
                <p>
                  <strong>NOMBRE</strong>
                </p>
              </div>
              <div class="col-md-2 col-sm-3 col-xs-3">
                <p>
                  <strong>MAIL</strong>
                </p>
              </div>
              <div class="col-md-1 col-sm-2 col-xs-4">
                <p>
                  <strong>PLATAFORMA</strong>
                </p>
              </div>
              <div class="col-md-3 col-sm-2 col-xs-4 centers margin-izq confirma">
                <p>
                  <strong>MIEMBRO</strong>
                </p>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 dotted-down">
              <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                  </label>
                </div>
              </div>
              <div class="col-md-2 col-sm-3 col-xs-6 nomargin nombre-oculto centrar">
                <span>Nombre</span>
                <input class="form-control no-border centrar nomargin" type="text" value="Armando Cantona" id="example-text-input">
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6 nomargin email-oculto">
                <span>Mail</span>
                <input class="form-control no-border nomargin" type="text" value="armando@webmail.mx" id="example-text-input">
              </div>
              <div class="col-md-2 col-sm-2 col-xs-6 centers confirmar-check nomargin">
                <div class="form-check">
                  <label class="form-check-label check-cuadro">
                    <span><br>Plataforma<br></span>
                    <input class="form-control no-border nomargin" type="text" value="TWB" id="example-text-input">
                  </label>
                </div>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                <div class="form-group centrar">
                  <span><br>Miembros</span>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nomargin">
                    <input class="form-control no-border nomargin" type="text" value="30-OCT-2017" id="example-text-input">
                  </div>
                </div>
              </div>
              <div class="col-md-1 col-sm-6 col-xs-5 guardar-right nomargin">
                <a href="#"><p class="btn-detalle">
                   Detalles
                </p></a>
              </div>
              <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
                <a href="#"><p class="btn-eliminar">
                   Eliminar
                </p></a>
              </div>
            </div>
            </form>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer no-padding">
            <div class="mailbox-controls">
              <div class="pull-right pag-center">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
          </div>

        <!-- /. box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<div class="control-sidebar-bg"></div>
</div>
<?php
  get_footer();
?>
