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
                    <input type="text" class="form-control input-sm" placeholder="Buscar Licitación">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mailbox-controls">  

                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-1 dropdown boton-categoria sinpadding-lic">
                    <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm ancho-completo" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-tag" aria-hidden="true"></i> Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 col-lg-offset-1 margin-cat sinmargin-li sinpadding-lic margin-btn">
                    <div class="dropdown boton-categoria2">
                      <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm boton-licitacion ancho-completo" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-sitemap" aria-hidden="true"></i> Estatus <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Activas</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Inactivas</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-4  col-lg-1 col-lg-offset-4  btn-group sinpadding-lic">
                    <button type="button" class="btn btn-default btn-sm ancho-completo"> Borrar <i class="fa fa-trash-o"></i> </button>
                  </div>
                  <!-- /.btn-group -->
                  <button type="button" class="btn btn-default btn-sm ancho-completo ancho-completo2"><i class="fa fa-times-circle-o" aria-hidden="true"></i> Cancelar Licitación</button>
                  <button type="button" class="btn btn-default btn-sm ancho-completo ancho-completo3"><i class="fa fa-archive" aria-hidden="true"></i> Archivar Licitación</button>             
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
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <!-- <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div> -->
        </div>
        <div class="col-md-1 col-sm-1 col-xs-5">
          <p>
            <strong class="texto-content">USUARIO</strong>
          </p>
        </div> 
        <div class="col-md-1 col-sm-1 col-xs-3">
          <p>
            <strong class="texto-content">CATEGORÍA</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4">
          <p>
            <strong class="texto-content">FECHA DE EVENTO</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4">
          <p>
            <strong class="texto-content">PRESUPUESTO</strong>
          </p>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers margin-izq confirma">
          <p>
            <strong class="texto-content">ESTATUS</strong>
          </p>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers margin-izq confirma">
          <p class="nomargin">
            <strong class="texto-content">RESPUESTAS</strong>
          </p>          
        </div>
        <div class="col-md-1 col-sm-1 col-xs-4 centers margin-izq confirma">
          <p class="nomargin">
            <strong class="texto-content">FECHA</strong>
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
          <span class="texto-content">Lorena Martínez</span>         
        </div>
        <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list">
        <span class="device-title">CATEGORÍA<br></span>
          <span class="texto-content">Fashion</span>          
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list">
        <span class="device-title">FECHA DE EVENTO<br></span>
          <span class="texto-content">28-Oct-2017</span>          
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list">
        <span class="device-title">PRESUPUESTO<br></span>
          <span class="texto-content">$50,000.00</span>          
        </div>
        <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list">
        <span class="device-title">ESTATUS<br></span>
          <span class="texto-content">CANCELADA</span>          
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list">
         <span class="device-title">RESPUESTAS<br></span>
          <span class="texto-content">3</span>          
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list">
         <span class="device-title">FECHA<br></span>
          <span class="texto-content">hace 5 min.</span>          
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
