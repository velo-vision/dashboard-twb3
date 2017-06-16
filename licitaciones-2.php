<?php
  require("functions.php");
  get_header();
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
      <div class="col-md-12 col-lg-12 top-50">
        <div class="col-md-3 margin-cat">
          <div class="dropdown boton-categoria2">
            <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm boton-licitacion" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-tag" aria-hidden="true"></i> Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Lorem Ipsum</a>
              <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Lorem Ipsum</a>
              <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Lorem Ipsum</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 margin-cat">
          <div class="dropdown boton-categoria2">
            <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm boton-licitacion" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-calendar" aria-hidden="true"></i> Ordena por fecha <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Más recientes</a>
              <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Más antiguas</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 margin-cat">
          <div class="dropdown boton-categoria2">
            <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm boton-licitacion" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-sitemap" aria-hidden="true"></i> Estatus <i class="fa fa-caret-down" aria-hidden="true"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
              <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Activas</a>
              <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Inactivas</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 margin-cat">
          <a data-toggle="modal" data-target="#enviarInvitacion" data-whatever="@mdo">
            <p class="editar editar1">
              <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Cancelar Licitación
            </p>
          </a>
          <!-- <button type="button" class="editar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
            <img src="images/recursos/enviar-invitacion.png" alt="The Wedding Board"> Enviar mi invitación
          </button> -->
        </div>
      </div>
      <form action="">

      <!---->
      <div class="col-md-12 col-xs-12 dotted-down">
        <div class="col-md-1 col-xs-1 centers">
          <div class="form-check">
            <label class="form-check-label check-left" style="margin-top: 7px;">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-2 col-xs-4 nomargin">
          <input class="form-control no-border centrar1 cen" type="text" value="Licitación 01" id="example-text-input">
        </div>
        <div class="col-md-2 col-xs-3 nomargin centrar1">
          <p class="top-5" style="margin-left:-35px;"><strong>Categoría:</strong> Lorem Ipsum</p>
        </div>
        <div class="col-md-2 col-xs-3 nomargin centrar1">
          <p class="top-5"><strong>Presupuesto:</strong> $50,000.00</p>
        </div>
        <div class="col-md-2 col-xs-6 nomargin centrar1">
          <p class="top-5"><strong>Fecha:</strong> Hace 1 minuto</p>
        </div>
        <div class="col-md-1 col-xs-6 nomargin centrar1">
          <p class="top-5"><strong>Respuestas:</strong> 0</p>
        </div>
        <div class="col-md-2 style-detalle">
          <a href="licitaciones-3.php">
            <p class="detalle">
              <img src="images/recursos/down.png" alt="The Wedding board"> Detalles
            </p>
          </a>
        </div>
      </div>
      </form>
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
</div>
<?php
  get_footer();
?>
