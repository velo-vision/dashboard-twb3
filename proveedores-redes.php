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
                <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-prov">
                  <p>
                    Proveedores
                  </p>
                  <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
                </div>
                <!---->
                <section class="">
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

                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9 dropdown boton-categoria cen nomargin left-15 mar-20">
                              <!-- <button class="btn btn-secondary dropdown-toggle btn btn-default23 btn-sm ancho-size" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-font-awesome" aria-hidden="true"></i> Estatus <i class="fa fa-caret-down" aria-hidden="true"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                              </div> -->
                            </div>
                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm ancho-size left-borra70 btn-padd">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>  Eliminar
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
                <div class="table-responsive mailbox-messages">
                   <table class="sortable table table-hover tabla-completa">
                     <thead>
                        <tr class="strong-td">
                            <td><input type="checkbox" class="oculto-check"></td>
                            <td>
                              <strong>SOLICITANTE / CATEGORÍA</strong>
                            </td>
                            <td>
                              <strong>ENVIADO A/ CATEGORÍA</strong>
                            </td>
                            <td>
                              <strong>FECHA DE SOLICITUD</strong>
                            </td>
                            <td>
                              <strong>ESTATUS</strong>
                            </td>
                            <td>
                              
                            </td>                          
                           
                          </tr>
                      </thead> 
                      <tbody>      
                  <?php for ($i=0; $i <5 ; $i++) { ?>
                        <tr class="strong-td">
                          <td><input type="checkbox" ></td>
                          <td>
                            <span class="texto-content">Lorena Martínez</span>
                          </td>
                          <td>
                           <span>Fashion</span>
                          </td>
                          <td>
                             <span class="texto-content">Hace 5 minutos</span>
                          </td>
                          <td>
                           <span class="texto-content">Enviada</span>
                          </td>
                          <td>
                            
                            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                            <p class=" proveedor-redes">
                              <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                            </p></a>
                         
                          </td>
                                 
                        </tr>
                    <?php } ?>
                      </tbody>
                    </table>
                  </div>

                  <div class="col-xs-12 col-md-12 sin-pa">
                      <!-- /.box-header -->
                      <div class="box-body no-padding">
                      <!--   <form action="">
                       
                        <div class="col-md-12 col-sm-12 col-xs-12 confirma border-down">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar23">
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-5 provee-size">
                            <p>
                              <strong>SOLICITANTE  / CATEGORÍA</strong>
                            </p>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-3 provee-size">
                            <p>
                              <strong>ENVIADO A  /  CATEGORÍA</strong>
                            </p>
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-4 provee-size">
                            <p>
                              <strong>FECHA DE SOLICITUD</strong>
                            </p>
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-4 centers confirma provee-size" style="text-align:left;">
                            <p>
                              <strong>ESTATUS</strong>
                            </p>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 dotted-down1">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar23">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 nomargin nombre-oculto centrar left-992">
                            <span>SOLICITANTE  / CATEGORÍA</span>
                            <input class="form-control no-border centrar nomargin size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 nomargin email-oculto cen-twb">
                            <span>ENVIADO A  /  CATEGORÍA</span>
                            <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>FECHA DE SOLICITUD<br></span>
                                <input class="form-control no-border nomargin cen-twb fonts size-input" type="text" value="Hace 5 min" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>ESTATUS</span>
                              <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 nomargin">
                                <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Enviada" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 guardar-right nomargin">
                            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                            <p class="btn-detalle-prov">
                              <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                            </p></a>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar23">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 nomargin nombre-oculto centrar left-992">
                            <span>SOLICITANTE  / CATEGORÍA</span>
                            <input class="form-control no-border centrar nomargin size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 nomargin email-oculto cen-twb">
                            <span>ENVIADO A  /  CATEGORÍA</span>
                            <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>FECHA DE SOLICITUD<br></span>
                                <input class="form-control no-border nomargin cen-twb fonts size-input" type="text" value="Hace 5 min" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>ESTATUS</span>
                              <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 nomargin">
                                <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Enviada" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 guardar-right nomargin">
                            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                            <p class="btn-detalle-prov">
                              <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                            </p></a>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar23">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 nomargin nombre-oculto centrar left-992">
                            <span>SOLICITANTE  / CATEGORÍA</span>
                            <input class="form-control no-border centrar nomargin size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 nomargin email-oculto cen-twb">
                            <span>ENVIADO A  /  CATEGORÍA</span>
                            <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>FECHA DE SOLICITUD<br></span>
                                <input class="form-control no-border nomargin cen-twb fonts size-input" type="text" value="Hace 5 min" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>ESTATUS</span>
                              <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 nomargin">
                                <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Enviada" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 guardar-right nomargin">
                            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                            <p class="btn-detalle-prov">
                              <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                            </p></a>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar23">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 nomargin nombre-oculto centrar left-992">
                            <span>SOLICITANTE  / CATEGORÍA</span>
                            <input class="form-control no-border centrar nomargin size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 nomargin email-oculto cen-twb">
                            <span>ENVIADO A  /  CATEGORÍA</span>
                            <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>FECHA DE SOLICITUD<br></span>
                                <input class="form-control no-border nomargin cen-twb fonts size-input" type="text" value="Hace 5 min" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>ESTATUS</span>
                              <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 nomargin">
                                <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Enviada" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 guardar-right nomargin">
                            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                            <p class="btn-detalle-prov">
                              <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                            </p></a>
                          </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1">
                          <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar23">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 nomargin nombre-oculto centrar left-992">
                            <span>SOLICITANTE  / CATEGORÍA</span>
                            <input class="form-control no-border centrar nomargin size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 nomargin email-oculto cen-twb">
                            <span>ENVIADO A  /  CATEGORÍA</span>
                            <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                          </div>
                          <div class="col-md-2 col-sm-3 col-xs-6 centers confirmar-check nomargin">
                            <div class="form-check">
                              <label class="form-check-label check-cuadro">
                                <span><br>FECHA DE SOLICITUD<br></span>
                                <input class="form-control no-border nomargin cen-twb fonts size-input" type="text" value="Hace 5 min" id="example-text-input">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                            <div class="form-group centrar">
                              <span><br>ESTATUS</span>
                              <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 nomargin">
                                <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Enviada" id="example-text-input">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 guardar-right nomargin">
                            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                            <p class="btn-detalle-prov">
                              <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                            </p></a>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1">
                            <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar23">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 nomargin nombre-oculto centrar left-992">
                              <span>SOLICITANTE  / CATEGORÍA</span>
                              <input class="form-control no-border centrar nomargin size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 nomargin email-oculto cen-twb">
                              <span>ENVIADO A  /  CATEGORÍA</span>
                              <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 centers confirmar-check nomargin">
                              <div class="form-check">
                                <label class="form-check-label check-cuadro">
                                  <span><br>FECHA DE SOLICITUD<br></span>
                                  <input class="form-control no-border nomargin cen-twb fonts size-input" type="text" value="Hace 5 min" id="example-text-input">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-1 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                              <div class="form-group centrar">
                                <span><br>ESTATUS</span>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 nomargin">
                                  <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Enviada" id="example-text-input">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12 guardar-right nomargin">
                              <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                              <p class="btn-detalle-prov">
                                <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                              </p></a>
                            </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1">
                            <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar23">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 nomargin nombre-oculto centrar left-992">
                              <span>SOLICITANTE  / CATEGORÍA</span>
                              <input class="form-control no-border centrar nomargin size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 nomargin email-oculto cen-twb">
                              <span>ENVIADO A  /  CATEGORÍA</span>
                              <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 centers confirmar-check nomargin">
                              <div class="form-check">
                                <label class="form-check-label check-cuadro">
                                  <span><br>FECHA DE SOLICITUD<br></span>
                                  <input class="form-control no-border nomargin cen-twb fonts size-input" type="text" value="Hace 5 min" id="example-text-input">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-1 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                              <div class="form-group centrar">
                                <span><br>ESTATUS</span>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 nomargin">
                                  <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Enviada" id="example-text-input">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12 guardar-right nomargin">
                              <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                              <p class="btn-detalle-prov">
                                <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                              </p></a>
                            </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12 box-footer dotted-down1">
                            <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar23">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 nomargin nombre-oculto centrar left-992">
                              <span>SOLICITANTE  / CATEGORÍA</span>
                              <input class="form-control no-border centrar nomargin size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 nomargin email-oculto cen-twb">
                              <span>ENVIADO A  /  CATEGORÍA</span>
                              <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Lorem ipsum / Fashion" id="example-text-input">
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 centers confirmar-check nomargin">
                              <div class="form-check">
                                <label class="form-check-label check-cuadro">
                                  <span><br>FECHA DE SOLICITUD<br></span>
                                  <input class="form-control no-border nomargin cen-twb fonts size-input" type="text" value="Hace 5 min" id="example-text-input">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-1 col-sm-2 col-xs-6 acompañante-oculto center nomargin">
                              <div class="form-group centrar">
                                <span><br>ESTATUS</span>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 nomargin">
                                  <input class="form-control no-border nomargin cen-twb size-input" type="text" value="Enviada" id="example-text-input">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12 guardar-right nomargin">
                              <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                              <p class="btn-detalle-prov">
                                <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                              </p></a>
                            </div>
                          </div>
                        </div>
                      </form> -->
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
  get_footer();
?>
