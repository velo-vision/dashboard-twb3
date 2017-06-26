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
                    Proveedores
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

                            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-10 dropdown boton-categoria cen nomargin left-15 mar-20">
                              <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm ancho-size" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-tag" aria-hidden="true"></i> Plataforma <i class="fa fa-caret-down" aria-hidden="true"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                              </div>
                              <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm ancho-size top-mem" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Membresia <i class="fa fa-caret-down" aria-hidden="true"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                              </div>
                            </div>
                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm ancho-size left-borra23">
                              Borrar <i class="fa fa-trash-o"></i>
                            </button>
                            <div class="pull-right pag-center pag2 pag-mem">1-50/200
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
                          <div class="col-md-2 col-sm-3 col-xs-5">
                            <p>
                              <strong>NEGOCIO</strong>
                            </p>
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-3">
                            <p>
                              <strong>CATEGORIA</strong>
                            </p>
                          </div>
                          <div class="col-md-1 col-sm-2 col-xs-4">
                            <p>
                              <strong>MEMBRESIA</strong>
                            </p>
                          </div>
                          <div class="col-md-3 col-sm-2 col-xs-4 centers margin-izq confirma">
                            <p>
                              <strong>FECHA DE SOLICITUD</strong>
                            </p>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 dotted-down1">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-6 nomargin nombre-oculto centrar">
                            <span>Negocio</span>
                            <input class="form-control no-border centrar nomargin" type="text" value="Lorem ipsum" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-4 col-xs-6 nomargin email-oculto cen-twb">
                            <span>Categoria</span>
                            <input class="form-control no-border nomargin cen-twb" type="text" value="Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>Membresia<br></span>
                                <input class="form-control no-border nomargin twb-left cen-twb fonts" type="text" value="Tipo A" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>Fecha de solicitud</span>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nomargin">
                                <input class="form-control no-border nomargin cen-twb pad-left" type="text" value="Hace 5 min" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
                            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo"><p class="btn-detalle">
                               Aceptar
                            </p></a>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
                            <a data-toggle="modal" data-target="#proveedores-rechazar" data-whatever="@mdo"><p class="btn-eliminar">
                               Rechazar
                            </p></a>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1">
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
                            <input class="form-control no-border nomargin cen-twb" type="text" value="Gourmet" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>Plataforma<br></span>
                                <input class="form-control no-border nomargin twb-left cen-twb fonts" type="text" value="Tipo A" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>Miembros</span>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nomargin">
                                <input class="form-control no-border nomargin cen-twb pad-left" type="text" value="Hace 1 hora" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
                            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo"><p class="btn-detalle">
                               Aceptar
                            </p></a>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
                            <a data-toggle="modal" data-target="#proveedores-rechazar" data-whatever="@mdo"><p class="btn-eliminar">
                               Rechazar
                            </p></a>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1">
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
                            <input class="form-control no-border nomargin cen-twb" type="text" value="Entertainment" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>Plataforma<br></span>
                                <input class="form-control no-border nomargin twb-left cen-twb fonts" type="text" value="Tipo A" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>Miembros</span>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nomargin">
                                <input class="form-control no-border nomargin cen-twb pad-left" type="text" value="Hace 1 dia" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 guardar-right nomargin">
                            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo"><p class="btn-detalle">
                               Aceptar
                            </p></a>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-6 nomargin">
                            <a data-toggle="modal" data-target="#proveedores-rechazar" data-whatever="@mdo"><p class="btn-eliminar">
                               Rechazar
                            </p></a>
                          </div>
                        </div>
                        </form>
                        <!-- /.mail-box-messages -->
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer no-padding">
                        <div class="mailbox-controls">
                          <div class="pull-right pag-center pag2 pag-mem">
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

          <!--MODAL aceptar-->
         <div class="modal fade" id="proveedores-aceptar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content1">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
                 </button>
               </div>
               <div class="modal-body1 col-md-12" style="background:white;">
                 <!--COLLAPSER-->
                   <div class="col-md-12">
                     <p class="titulo-prove">
                       Aproba<span>r pr</span>oveedor
                     </p>
                     <p class="titulo-aceptar">
                       Se envíara un correo de confirrmación al proveedor.
                       Una vez realizado el pago podrá acceder a la plataforma.
                     </p>
                   </div>
                   <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 top-20 modal-left">
                     <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-1">
                       <a href="#!">
                         <p class="continuar-prove">
                           Continuar
                         </p>
                       </a>
                     </div>
                     <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-1">
                       <a href="#!">
                         <p class="cancelar-prove">
                           Cancelar
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
         <!--MODAL rechazar-->
        <div class="modal fade" id="proveedores-rechazar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content1">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
                </button>
              </div>
              <div class="modal-body1 col-md-12" style="background:white;">
                <!--COLLAPSER-->
                  <div class="col-md-12">
                    <p class="titulo-prove">
                      Rechaza<span>r pr</span>oveedor
                    </p>
                    <p class="titulo-rechazar" style="text-transform:none">
                      Esto eliminará el pre-registro del proveedor.
                      Esta acción no se podrá deshacer. ¿Esta seguro?
                    </p>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 top-20 modal-left">
                    <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-1">
                      <a href="#!">
                        <p class="continuar-prove">
                          Continuar
                        </p>
                      </a>
                    </div>
                    <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-1">
                      <a href="#!">
                        <p class="cancelar-prove">
                          Cancelar
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
