<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();

  get_aside();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid nomargin">
      <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-perfil">
        <p>
          LICITACIONES
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <!---->

        <div class="col-xs-12 col-md-12 nomargin img-twb1 centers">
          <img src="images/proveedores/2.png" class="img-circle" alt="The Wedding Board">
          <div class="col-xs-12 col-md-12 col-lg-12 text-nombre">
            <p style="margin:5px 0 0 0;">JL Eve<span>nt P</span>lanner</p>
            <p> Decoration</p>
          </div>
        </div>
        <div class="form-group row top-30 centrado">
          <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
            <div class="star-rating">
              <fieldset>
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
              </fieldset>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 linea-config"></div>
      <section class="content">
        <div class="container-fluid sinpadding-lic">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinpadding-lic">
              <div class="box-header with-border">
                <span class="box-title"></span>
                <div class="box-tools pull-right">
                  <div class="has-feedback">
                    <input type="text" class="form-control input-sm" placeholder="Buscar Licitación">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mailbox-controls">

                  <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 dropdown boton-categoria sinpadding-lic">
                    <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm ancho-completo" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-tag" aria-hidden="true"></i> Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9 dropdown boton-categoria sinpadding-lic">
                    <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm ancho-completo" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-tag" aria-hidden="true"></i> Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                    </div>
                  </div>


                  <!-- /.btn-group -->
                  <button type="button" class="btn btn-default btn-sm ancho-completo ancho-completo3"><i class="fa fa-archive" aria-hidden="true"></i>Eliminar</button>
                  <div class="pull-right pag-center">1-50/200
                    <div class="btn-group">
                      <button type="button" class="btn btn-default btn-sm "><i class="fa fa-chevron-left"></i></button>
                      <button type="button" class="btn btn-default btn-sm "><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <!-- /.btn-group -->
                  </div>
                  <!-- /.pull-right -->
                </div>
              </div>
              <!-- /.box-body -->
            <!-- /. box -->
          </div>
        </div>
      </section>

 <!--Empieza titulos-->
      <div class="col-md-12 col-sm-12 col-xs-12 confirma dotted-down centrado">
        <div class="col-md-3 col-sm-1 col-xs-5">
          <p>
            <strong class="texto-content">NEGOCIO</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-3">
          <p>
            <strong class="texto-content">CATEGORÍA</strong>
          </p>
        </div>
        <div class="col-md-3 col-sm-2 col-xs-4">
          <p>
            <strong class="texto-content">TIPO DE SOLICITUD</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4">
          <p>
            <strong class="texto-content">FECHA DE INICIO</strong>
          </p>
        </div>
      </div>


      <!---->
<?php  for ($i=0; $i <5 ; $i++) { ?>

      <div class="col-md-12 col-sm-12 col-xs-12 dotted-down centrado">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-6 nomargin centrar separacion-list">
          <span class="device-title">USUARIO<br></span>
          <span class="texto-content">Lorena Ipsum</span>
        </div>
        <div class="col-md-3 col-sm-2 col-xs-6 nomargin separacion-list">
        <span class="device-title">FECHA DE EVENTO<br></span>
          <span class="texto-content">fashion</span>
        </div>
        <div class="col-md-3 col-sm-2 col-xs-6 nomargin separacion-list">
        <span class="device-title">PRESUPUESTO<br></span>
          <span class="texto-content">Enviada</span>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-6 nomargin separacion-list">
        <span class="device-title">ESTATUS<br></span>
          <span class="texto-content">5 Abril 2017</span>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list">
        <span class="device-title">ESTATUS<br></span>
          <span class="texto-content" style="border:1px solid; background:#67cfe3; padding: 5px 20px; color: #fff;">ELIMINAR</span>
        </div>

      </div>
      <!---->
<?php } ?>

    </div>

    <!--MODAL-->
    <div class="modal fade" id="enviarInvitacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog content-popoup" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
            </button>
          </div>
          <div class="modal-body col-md-12" style="background:white;">
            <!--COLLAPSER-->
              <div class="col-md-12">
                <p class="titulo-popoup">
                  VAS A CANCELAR
                </p>
                <p class="titulo-popoup" style="text-transform:none">
                  Desea archivar tu licitación o eliminarla definitivamente
                </p>
              </div>
              <div class="col-md-12 top-20">
                <div class="col-md-2 col-md-offset-4">
                  <a href="#!">
                    <p class="editar">
                      <img src="images/recursos/archivar.png" alt="The Wedding Board"> Archivar
                    </p>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="#!">
                    <p class="editar">
                      <img src="images/recursos/trash.png" alt="The Wedding Board"> Eliminar
                    </p>
                  </a>
                </div>
              </div>
              <div class="col-md-12 top-20">
                <div class="col-md-2 col-md-offset-5">
                  <a href="#!">
                    <p class="detalle">
                      <img src="images/recursos/cerrar.png" alt="The Wedding board"> Cerrar
                    </p>
                  </a>
                </div>
              </div>
            <!--COLLAPSER-->
          </div>
        </div>
      </div>
    </div>
    <!--MODAL-->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

<?php
  get_footer();
?>
