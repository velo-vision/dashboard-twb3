<?php
  require("functions.php");
  get_header();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid">
      <div class="col-md-12 col-xs-12">
        <div class="content-wrapper">
          <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-perfil">
            <p id="subir">
              Usuarios
            </p>
            <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
          </div>
          <!-- Content Header (Page header) -->
          <!-- Main content -->
          <section>
            <div class="col-md-12">
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
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <!-- <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                      Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </button> -->
                    <div class="col-md-6 dropdown boton-categoria">
                        <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-tag" aria-hidden="true"></i> Plataforma <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                        </div>
                    </div>
                    <div class="col-md-3 btn-group nomargin">
                      <button type="button" class="btn btn-default btn-sm" style="border-radius:5px;">
                        Borrar <i class="fa fa-trash-o"></i>
                      </button>
                      <button type="button" class="btn btn-default btn-sm" style="margin-left:15px; padding: 5px 20px; border-radius:5px;">
                        Deshabilitar <i class="fa fa-ban" aria-hidden="true"></i>
                      </button>
                    </div>
                    <!-- /.btn-group -->
                    <div class="col-md-3 pull-right pag-center nomargin">
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
                          <input class="form-control no-border nomargin twb-left" type="text" value="TWB" id="example-text-input">
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
          </section>
          <!-- /.content -->
        </div>
      </div>
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
                  <p class="titulo-popoup" style="text-transform:capitalize">
                    VAS AÑADIR  COMO PROVEEDOR A:
                  </p>
                  <p class="titulo-popoup">
                    Lor<span>em I</span>mpsum
                  </p>
                </div>

                <div class="col-md-8 col-md-offset-2 top-20">
                  <div class="col-md-6" style="text-align:right">
                    <button type="submit" class="btn btn-default icon-menssage"><i class="fa fa-check-square-o" aria-hidden="true"></i> Aceptar</button>
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-default icon-menssage" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i> Cancelar</button>
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
  <div class="control-sidebar-bg"></div>
</div>

<?php
  get_footer();
?>
<script>
// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
    &&
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
});
</script>
