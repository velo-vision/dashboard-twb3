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

                  <div class="col-xs-12 col-sm-7 col-md-4 col-lg-5 dropdown boton-categoria sinpadding-lic">
                    <!-- <div class="dropdown drop">
                        <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm btn btn-default2" type="button" data-toggle="dropdown" id="dropdownMenuButton2">
                          <i class="fa fa-tag" aria-hidden="true"></i> Categorias
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Todos</a></li>
                          <li><a href="#">Flores</a></li>
                          <li><a href="#">Vestidos</a></li>
                        </ul>
                      </div>
                      <div class="dropdown drop">
                        <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm btn btn-default2" type="button" data-toggle="dropdown" id="dropdownMenuButton2">
                           <i class="fa fa-sitemap" aria-hidden="true"></i> Estatus
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Todos</a></li>
                          <li><a href="#">Cancelada</a></li>
                          <li><a href="#">Adjudicada</a></li>                         
                        </ul>
                      </div> -->

                   <!--  <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm ancho-completo1" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-tag" aria-hidden="true"></i> Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                    </div> -->

                   <!--  <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm boton-licitacion " type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-sitemap" aria-hidden="true"></i> Estatus <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Activas</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Inactivas</a>
                      </div> -->



                  </div>



                  <div class="col-xs-12 col-sm-12 col-md-8  col-lg-7  btn-group sinpadding-lic divisor-menu">
                    <button type="button" class="btn btn-default btn-sm ancho-completo separa"> Borrar <i class="fa fa-trash-o"></i>
                    </button>
                    <!-- /.btn-group -->
                  <button type="button" class="btn btn-default btn-sm  ancho-completo2 separa"><i class="fa fa-times-circle-o" aria-hidden="true"></i> Cancelar Licitación</button>
                <!--   <button type="button" class="btn btn-default btn-sm  ancho-completo3"><i class="fa fa-archive" aria-hidden="true"></i> Archivar Licitación</button> -->
                  <div class="pull-right pag-center">1-50/200
                    <div class="btn-group botones-paginacion">
                      <button type="button" class="btn btn-default btn-sm btn-default2"><i class="fa fa-chevron-left"></i></button>
                      <button type="button" class="btn btn-default btn-sm btn-default2"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <!-- /.btn-group -->
                  </div>
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
 <div class="table-responsive mailbox-messages">
 <table class="sortable table table-hover tabla-completa">
 <thead>
    <tr class="strong-td">
        <td><input type="checkbox" class="oculto-check"></td>
        <td>
          <strong>USUARIO </strong>
        </td>
        <td>
          <strong>CATEGORÍA</strong>
        </td>
        <td>
          <strong>FECHA DE EVENTO</strong>
        </td>
        <td>
          <strong>PRESUPUESTO</strong>
        </td>
        <td>
          <strong>ESTATUS</strong>
        </td>
        <td>
          <strong>RESPUESTAS</strong>
        </td>
        <td>
           <strong>FECHA</strong>
        </td>
      </tr>
  </thead> 
    <tbody>
      
<?php for ($i=0; $i <10 ; $i++) { ?>
      <tr class="strong-td">
        <td><input type="checkbox" ></td>
        <td>
          <span>Lorena Martínez</span>
        </td>
        <td>
         <span>Fashion</span>
        </td>
        <td>
          <span>28-Oct-2017</span>
        </td>
        <td>
          <span>$50,000.00</span>
        </td>
        <td>
          <span>CANCELADA</span>
        </td>
        <td>
           <span>3</span>
        </td>
        <td>
           <span>hace 5 min.</span>
        </td>
      </tr>
<?php } ?>
<tr class="strong-td">
        <td><input type="checkbox" ></td>
        <td>
          <span>Jessenia Martínez</span>
        </td>
        <td>
         <span>Vestidos</span>
        </td>
        <td>
          <span>28-Oct-2017</span>
        </td>
        <td>
          <span>$20,000.00</span>
        </td>
        <td>
          <span>Activa</span>
        </td>
        <td>
           <span>10</span>
        </td>
        <td>
           <span>hace 25 min.</span>
        </td>
      </tr>
    </tbody>
  </table>
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
