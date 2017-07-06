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
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mailbox-controls1">

                            <div class="col-xs-12 col-sm-5 col-md-7 col-lg-8 dropdown boton-categoria cen nomargin left-50 mar-20">
                              <button class="btn btn-secondary dropdown-toggle btn btn-default23 btn-sm ancho-size" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-tag" aria-hidden="true"></i> Plataforma <i class="fa fa-caret-down" aria-hidden="true"></i>
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
                            <div class="pull-right pag-center pag2">1-50/200
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
                      <div class="table-responsive mailbox-messages">
                      <table class="table table-hover tabla-completa">
                         <tbody >
                           <tr class="strong-td">
                             <td><input type="checkbox" class="oculto-check"></td>
                             <td>
                               <strong>NOMBRE </strong>
                             </td>
                             <td>
                               <strong>MAIL</strong>
                             </td>
                             <td>
                               <strong>PLATAFORMA</strong>
                             </td>
                             <td>
                               <strong>MIEMBRO</strong>
                             </td>
                             <td>

                             </td>
                             <td>

                             </td>
                           </tr>
                     <?php for ($i=0; $i <10 ; $i++) { ?>
                           <tr class="strong-td1">
                             <td><input type="checkbox" ></td>
                             <td>
                               <span>Armando Cantona</span>
                             </td>
                             <td>
                              <span>loremipsum@mail.mx</span>
                             </td>
                             <td>
                               <span>TWB</span>
                             </td>
                             <td>
                               <span>30-OCT-2017</span>
                             </td>
                             <td>
                               <div class="col-md-12 col-sm-12 col-xs-12 guardar-right nomargin">
                                 <a href="usuario-detalle.php"><p class="btn-detalle">
                                    Detalles
                                 </p></a>
                               </div>
                             </td>
                             <td>
                               <div class="col-md-12 col-sm-12 col-xs-12 nomargin">
                                 <a href="#"><p class="btn-eliminar">
                                    Eliminar
                                 </p></a>
                               </div>
                             </td>
                           </tr>
                     <?php } ?>
                         </tbody>
                       </table>
                     </div>

                      <!-- /.box-body -->
                      <div class="box-footer no-padding">
                        <div class="mailbox-controls">
                          <div class="pull-right pag-center pag2">
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
