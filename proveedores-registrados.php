<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();

  get_aside();
?>
<div class="content-wrapper">
  <section>
    <div class="container-fluid nomargin">
      <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-perfil">
        <p>
          PROVEEDORES
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <!---->
      <section class="content">
        <div class="container-fluid sinpadding-lic">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinpadding-lic">
              <div class="box-header with-border">
                <span class="box-title"></span>
                <div class="box-tools pull-right">
                  <div class="has-feedback">
                    <input type="text" class="form-control input-sm " placeholder="Buscar Licitación">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mailbox-controls">

                  <!-- <div class="col-xs-12 col-sm-7 col-md-4 col-lg-5 dropdown boton-categoria sinpadding-lic">
                  </div> -->
                  <button type="button" class="btn btn-default btn-sm ancho-size left-borra1 borrar-2">
                    Borrar <i class="fa fa-trash-o"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm ancho-size move-left1">
                    Deshabilitar <i class="fa fa-ban" aria-hidden="true"></i>
                  </button>
                  <div class="pull-right pag-center">1-50/200
                    <div class="btn-group botones-paginacion">
                      <button type="button" class="btn btn-default btn-sm btn-default2"><i class="fa fa-chevron-left"></i></button>
                      <button type="button" class="btn btn-default btn-sm btn-default2"><i class="fa fa-chevron-right"></i></button>
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
        <div class="table-responsive mailbox-messages">
          <table class="sortable table table-hover tabla-completa">
          <thead>
            <tr class="strong-td">
                <td><input type="checkbox" class="oculto-check"></td>
                <td>
                  <strong>NEGOCIO</strong>
                </td>
                <td>
                  <strong>CATEGORÍA</strong>
                </td>               
                <td>
                   <strong>MEMBRESÍA</strong>
                </td>
                <td>
                   <strong>VENCIMIENTO</strong>
                </td>
                <td>
                   <strong>TIEMPO DE RESPUESTA</strong>
                </td>
                <td>
                   <strong>ESTATUS</strong>
                </td>
              </tr>
          </thead> 
            <tbody >
              <tr class="hover-registro">
                <td class="centrado-check"><input type="checkbox" ></td>
                <td class=""><a href="proveedores-sin.php" class="color-a"><span class="texto-prov">Lorena Ipsum</span></a></td>
                <td class=""><a href="proveedores-sin.php" class="color-a"><span class="texto-prov">Fashion</span></a></td>
                <td class=""><a href="proveedores-sin.php"> <span class="texto-prov">Tipo A</span></a></td>
                <td class=""><a href="proveedores-sin.php"> <span class="texto-prov">30-OCT-2017</span></a></td>
                <td><a href="proveedores-sin.php"><span class="texto-prov">1hr</span></a></td>
                <td><a href="proveedores-sin.php"><span class="texto-prov">Activo</span></a></td>
              </tr>
              <?php for ($i=0; $i <2 ; $i++) { ?>
               <tr class="hover-registro">
                <td class="centrado-check"><input type="checkbox"></td>
                <td class=""><a href="proveedores-activo.php" class="color-a"><span class="texto-prov">Lorena Ipsum</span></a></td>
                <td class=""><a href="proveedores-activo.php" class="color-a"><span class="texto-prov">Fashion</span></a></td>
                <td class=""><a href="proveedores-activo.php"> <span class="texto-prov">Tipo A</span></a></td>
                <td class=""><a href="proveedores-activo.php"> <span class="texto-prov">30-OCT-2017</span></a></td>
                <td><a href="proveedores-activo.php"><span class="texto-prov">1hr</span></a></td>
                <td><a href="proveedores-activo.php"><span class="texto-prov">Activo</span></a></td>
              </tr>
              <?php } ?>
              <?php for ($i=0; $i <2 ; $i++) { ?>
              <tr class="hover-registro">
                <td class="centrado-check"><input type="checkbox"></td>
                <td class=""><a href="proveedores-inhabilitado.php" class="color-a"><span class="texto-prov">Lorena Ipsum</span></a></td>
                <td class=""><a href="proveedores-inhabilitado.php" class="color-a"><span class="texto-prov">Vestidos</span></a></td>
                <td class=""><a href="proveedores-inhabilitado.php"> <span class="texto-prov">Tipo B</span></a></td>
                <td class=""><a href="proveedores-inhabilitado.php"> <span class="texto-prov">30-OCT-2017</span></a></td>
                <td><a href="proveedores-inhabilitado.php"><span class="texto-prov">1hr</span></a></td>
                <td><a href="proveedores-inhabilitado.php"><span class="proveedores-off">Inhabilitado</span></a></td>
              </tr>
               <?php } ?>
               <?php for ($i=0; $i <3 ; $i++) { ?>
               <tr class="hover-registro">
                <td class="centrado-check"><input type="checkbox"></td>
                <td class=""><a href="proveedores-activo.php" class="color-a"><span class="texto-prov">Lorena Ipsum</span></a></td>
                <td class=""><a href="proveedores-activo.php" class="color-a"><span class="texto-prov">Fashion</span></a></td>
                <td class=""><a href="proveedores-activo.php"> <span class="texto-prov">Tipo A</span></a></td>
                <td class=""><a href="proveedores-activo.php"> <span class="texto-prov">30-OCT-2017</span></a></td>
                <td><a href="proveedores-activo.php"><span class="texto-prov">1hr</span></a></td>
                <td><a href="proveedores-activo.php"><span class="texto-prov">Activo</span></a></td>
              </tr>
              <?php } ?>
              <?php for ($i=0; $i <2 ; $i++) { ?>
               <tr class="hover-registro">
                <td class="centrado-check"><input type="checkbox"></td>
                <td class=""><a href="proveedores-vencido.php" class="color-a"><span class="texto-prov">Lorena Ipsum</span></a></td>
                <td class=""><a href="proveedores-vencido.php" class="color-a"><span class="texto-prov">Fashion</span></a></td>
                <td class=""><a href="proveedores-vencido.php"> <span class="texto-prov">Tipo A</span></a></td>
                <td class=""><a href="proveedores-vencido.php"><span class="proveedores-vencido">14-ENE-2017</span></a></td>
                <td><a href="proveedores-vencido.php"><span class="texto-prov">1hr</span></a></td>
                <td><a href="proveedores-vencido.php"> <span class="proveedores-vencido">Vencido</span></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <!-- /.table -->
      </div>
   <!--  </div> -->
        <!-- /.mail-box-messages -->

     
      <!---->
      <div class="box-footer no-padding">
        <div class="mailbox-controls">
          <div class="pull-right pag-center pag2 pag-left1">
            1-50/200
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-default2 btn-sm"><i class="fa fa-chevron-left"></i></button>
              <button type="button" class="btn btn-default btn-default2 btn-sm"><i class="fa fa-chevron-right"></i></button>
            </div>
            <!-- /.btn-group -->
          </div>
          <!-- /.pull-right -->
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
