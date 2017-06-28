<?php
  //include("head-3.php");
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
          <!-- /.box-header -->
          <div class="box-body">
            <section>
              <div class="container-fluid nomargin">
                <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-perfil">
                  <p>
                    USUARIOS
                  </p>
                  <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
                </div>
                <!---->
                <section class="content">
                  <div class="container-fluid nomargin">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nomargin">
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
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mailbox-controls border-controls">

                            <div class="col-xs-12 col-sm-8 col-md-7 col-lg-8 dropdown boton-categoria cen nomargin left-20">
                              <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm ancho-size" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-tag" aria-hidden="true"></i> Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos1</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores2</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos3</a>
                              </div>
                              <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm ancho-size" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-tag" aria-hidden="true"></i> Membresia <i class="fa fa-caret-down" aria-hidden="true"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                              </div>
                            </div>
                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm ancho-size left-borra">
                              Borrar <i class="fa fa-trash-o"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm ancho-size move-left">
                              Deshabilitar <i class="fa fa-ban" aria-hidden="true"></i>
                            </button>
                            <div class="pull-right pag-center pag">1-50/200
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
                <section>
                  <div class="col-xs-12 col-md-12 sin-pa">
                      <!-- /.box-header -->
                      <div class="box-body no-padding">
                        <form action="">
                        <!--Empieza cuadro-->
                        <div class="col-md-12 col-sm-12 col-xs-12 confirma border-down">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-5 text-size">
                            <p>
                              <strong>NOMBRE</strong>
                            </p>
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-3 text-size">
                            <p>
                              <strong>MAIL</strong>
                            </p>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-4 text-size text-pad">
                            <p>
                              <strong>TIPO USUARIO</strong>
                            </p>
                          </div>
                          <div class="col-md-3 col-sm-2 col-xs-4 centers margin-izq confirma text-size text-left">
                            <p>
                              <strong>CREADO POR</strong>
                            </p>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 dotted-down1 dotted-pad">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-6 nomargin nombre-oculto centrar">
                            <span>Nombre</span>
                            <input class="form-control no-border centrar nomargin" type="text" value="Lorem ipsum" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-4 col-xs-6 nomargin email-oculto cen-twb">
                            <span>Mail</span>
                            <input class="form-control no-border nomargin cen-twb" type="text" value="loremipsum@mail.mx" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>Plataforma<br></span>
                                <input class="form-control no-border nomargin twb-left cen-twb fonts" type="text" value="Admin" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>Miembros</span>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nomargin">
                                <input class="form-control no-border nomargin cen-twb pad-left" type="text" value="Sophie Dueso" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
                            <a href="usuario-detalle-admin.php"><p class="btn-detalle">
                               Detalles
                            </p></a>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
                            <a href="#"><p class="btn-eliminar">
                               Eliminar
                            </p></a>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1 dotted-pad">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-6 nomargin nombre-oculto centrar">
                            <span>Nombre</span>
                            <input class="form-control no-border centrar nomargin" type="text" value="Mei stet latine" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-4 col-xs-6 nomargin email-oculto cen-twb">
                            <span>Mail</span>
                            <input class="form-control no-border nomargin cen-twb" type="text" value="loremipsum@mail.mx" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>Plataforma<br></span>
                                <input class="form-control no-border nomargin twb-left cen-twb fonts" type="text" value="Admin" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>Miembros</span>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nomargin">
                                <input class="form-control no-border nomargin cen-twb pad-left" type="text" value="Sophie Dueso" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
                            <a href="usuario-detalle-admin.php"><p class="btn-detalle">
                               Detalles
                            </p></a>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
                            <a href="#"><p class="btn-eliminar">
                               Eliminar
                            </p></a>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1 dotted-pad">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-6 nomargin nombre-oculto centrar">
                            <span>Nombre</span>
                            <input class="form-control no-border centrar nomargin" type="text" value="Ex munere" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-4 col-xs-6 nomargin email-oculto cen-twb">
                            <span>Mail</span>
                            <input class="form-control no-border nomargin cen-twb" type="text" value="loremipsum@mail.mx" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>Plataforma<br></span>
                                <input class="form-control no-border nomargin twb-left cen-twb fonts" type="text" value="Admin" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>Miembros</span>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nomargin">
                                <input class="form-control no-border nomargin cen-twb pad-left" type="text" value="Sophie Dueso" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
                            <a href="usuario-detalle-admin.php"><p class="btn-detalle">
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
                          <div class="pull-right pag-center pag">
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
          </div>
          <!-- /.box-body -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="control-sidebar-bg"></div>
</div>
<?php
	include("footer-3.php");
?>
