<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();
  get_aside();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- /.col -->
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p id="subir">Licitaciones</p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-xs-12 col-md-8 col-md-offset-2 top-20 padin-cero">
        <div class="box box-primary">
          <!-- /.box-header -->
          <div class="box-body">
          <div class="col-xs-12 col-md-12 lici-margin">
                    <div class="col-xs-12 col-md-6 no-padding izquierda">
                      <p class="asunto-licitacion"><strong>Licitación:</strong> Lorem ipsum </p>
                    </div>
                    <div class="col-xs-12 col-md-6 redecha-lici  no-padding izquierda">
                       <p class="asunto-licitacion" style="margin-top:5px;"><strong>Usuario:</strong> Mónica Galindo</p>
                    </div>                  
                  </div>
                   <div class="col-xs-12 col-md-12  izquierda">
                     <div class="col-xs-12 col-md-3 no-padding">
                       <p class="nomargin asunto-licitacion1"><strong>Presupuesto:</strong>$50,000</p>
                       <p class="nomargin asunto-licitacion1"><strong>Categoría:</strong> Lorem ipsum </p>
                     </div>
                     <div class="col-xs-12 col-md-6 no-padding">
                        <p class="nomargin asunto-licitacion1 "><strong>Lugar:</strong> Lorem ipsum dolor sit amet</p>
                        <p class="nomargin asunto-licitacion1 "><strong>Fecha del evento:</strong> 28 Octubre 2017</p>
                     </div>
                   </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding separacion-lici">
                    <div class="col-xs-12 col-md-11 mailbox-read-message no-padding lici-margin">
                      <strong class="lici-pading-des"><span>Descripción:</span></strong>
                    </div>                   
                    <div class="col-xs-12 col-sm-12 col-md-11 mailbox-read-message justificado">
                      <p>
                        Lorem ipsum dolor sit amet, omnesque tacimates hendrerit an sit. Ne has integre vivendum. Eos iisque tractatos id. Per prompta moderatius philosophia ea.<br><br>                      
                        Eu duis posse referrentur vis. Duo id erant adipisci inimicus, ei falli patrioque complectitur ius, ex mandamus senserit per. Vide nostro veritus ut ius, est at scaevola
                        invenire suscipiantur. Cu per velit novum sententiae. Ius quodsi definitiones id.
                      </p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-cero-li">
                    <div class="box-footer padding-cero-li" style="border-top:none;">
                      <ul class="mailbox-attachments clearfix padding-cero-li">
                        <li>
                          <span class="mailbox-attachment-icon has-img">
                            <img src="images/recursos/galery5.jpg" alt="The Wedding Board">
                          </span>
                          <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name">
                              <i class="fa fa-camera"></i> photo1.png
                            </a>
                            <span class="mailbox-attachment-size">
                              2.67 MB
                              <a href="images/recursos/galery5.jpg" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                            </span>
                          </div>
                        </li>
                        <li>
                          <span class="mailbox-attachment-icon has-img">
                            <img src="images/recursos/galery12.jpg" alt="The Wedding Board">
                          </span>
                          <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                            <span class="mailbox-attachment-size">
                              1.9 MB
                              <a href="images/recursos/galery12.jpg" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                            </span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <!--  -->
                  <!-- Respuestas -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 lineas-respuesta">
                    <div class="col-xs-12 col-sm-6 col-md-16 col-lg-6 padin-cero lici-margin">
                      <p class="asunto-licitacion"><strong class="licitacion-margin-lef">Respuestas:</strong> 3</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-16 col-lg-6 center-btn-licitacion separacion-btn-comparar">
                      <a href="comparar-licitaciones.php"><span class="boton-comprar"><img src="images/recursos/comprar.png" alt="The Wedding Board"> comparar</span></a>                     
                    </div>
                  </div>

                  <?php  for ($i=0; $i < 4; $i++) { ?>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aumento2 padin-cero">
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 padin-cero">
                      <p class="asunto-licitacion asunto-center"><strong class="licitacion-margin-lef">Proveedor:</strong> Lorem ipsum </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 center-btn-licitacion padin-cero">
                    <a href="#!"><span class="col-xs-12 boton-comprar comprar1 btn-provedor"><img src="images/recursos/proveedor.png" alt="The Wedding Board"> Perfil proveedor</span></a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 lici-margin izquierda">
                    <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 padin-cero">
                      <p class="nomargin asunto-licitacion1"><strong>Costos:</strong>$45,000</p>
                    </div>
                     <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 padin-cero">
                      <p class="nomargin asunto-licitacion1"><strong>Vigencia:</strong> 19 de mayo 2017</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="nomargin asunto-licitacion1 "><strong>Descripción:</strong></p>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mailbox-read-message padin-cero justificado lici-margin">
                        <p>Lorem ipsum dolor sit amet, omnesque tacimates hendrerit an sit. Ne has integre vivendum. Eos iisque tractatos id. Per prompta moderatius philosophia ea.<br><br>
                           Eu duis posse referrentur vis. Duo id erant adipisci inimicus, ei falli patrioque complectitur ius, ex mandamus senserit per. Vide nostro veritus ut ius, est at scaevola
                            invenire suscipiantur. Cu per velit novum sententiae. Ius quodsi definitiones id.
                        </p>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padin-cero lici-margin">
                      <div class="box-footer padin-cero" style="border-top:none;">
                        <ul class="mailbox-attachments clearfix">                       
                          <li>
                            <span class="mailbox-attachment-icon has-img">
                              <img src="images/recursos/galery5.jpg" alt="The Wedding Board">
                            </span>
                            <div class="mailbox-attachment-info">
                              <a href="#" class="mailbox-attachment-name">
                                <i class="fa fa-camera"></i> photo1.png
                              </a>
                              <span class="mailbox-attachment-size">
                                2.67 MB
                                <a href="images/recursos/galery5.jpg" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                              </span>
                            </div>
                          </li>
                          <li>
                            <span class="mailbox-attachment-icon has-img">
                              <img src="images/recursos/galery12.jpg" alt="The Wedding Board">
                            </span>
                            <div class="mailbox-attachment-info">
                              <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                              <span class="mailbox-attachment-size">
                                1.9 MB
                                <a href="images/recursos/galery12.jpg" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                              </span>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="box-footer" style="border-top:0px">
                        <div class="centers lici-margin">
                          <a data-toggle="modal" data-target="#enviarInvitacion" data-whatever="@mdo">
                            <button type="submit" class="btn btn-default icon-menssage"><i class="fa fa-check-square-o" aria-hidden="true"></i> Aceptar</button>
                          </a>
                        </div>
                      </div>
                      <!-- fin -->
                      </div><!-- links -->
                  <?php  } ?>


                  
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinpadding-lic separacion-botnes-link">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 derecha-link1 sinpadding-lic">
                      <a href="licitaciones-2.php">
                        <button type="submit" class="btn btn-default icon-menssage"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Ir a licitaciones</button>
                      </a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
                      <a href="#subir">
                        <button type="submit" class="btn btn-default icon-menssage"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> Subir a licitación</button>
                      </a>
                    </div>                    
                  </div>
                  <!--  -->
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
             <!-- fin -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
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