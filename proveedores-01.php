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
      <div class="col-md-6 col-md-offset-3 col-xs-12 titulo-prov">
        <p>
          PROVEEDORES
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

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 dropdown boton-categoria cen nomargin left-51 mar-15 pad-pro">
                    <button class="btn btn-secondary dropdown-toggle btn btn-default20 btn-sm ancho-size" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-tag" aria-hidden="true"></i> Categoria <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                    </div>

                    <button class="btn btn-secondary dropdown-toggle btn btn-default20 btn-sm ancho-size margin-membresia" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-tag" aria-hidden="true"></i> Membresia <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <!-- <i class="fa fa-id-card-o" aria-hidden="true"></i> -->
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                    </div>

                    <button class="btn btn-secondary dropdown-toggle btn btn-default20 btn-sm ancho-size margin-membresia" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-tag" aria-hidden="true"></i> Estatus <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <!-- <i class="fa fa-font-awesome" aria-hidden="true"></i> -->
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                    </div>
                  </div>
                  <!-- /.btn-group -->
                  <button type="button" class="btn btn-default btn-sm ancho-size left-borra1 borrar-2">
                    Borrar <i class="fa fa-trash-o"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm ancho-size move-left1">
                    Deshabilitar <i class="fa fa-ban" aria-hidden="true"></i>
                  </button>
                  <div class="pull-right pag-center pag2 pag3 pag-left">1-50/200
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
      <div class="col-md-12 col-sm-12 col-xs-12 confirma dotted-prov centrado">
        <div class="col-md-1 centers ocultar">
        </div>
        <div class="col-md-1 col-sm-2 col-xs-5">
          <p>
            <strong class="texto-content">NEGOCIO</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-3">
          <p>
            <strong class="texto-content">CATEGORÍA</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4">
          <p>
            <strong class="texto-content">MEMBRESÍA</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4">
          <p>
            <strong class="texto-content">VENCIMIENTO</strong>
          </p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4 centers confirma">
          <p>
            <strong class="texto-content">TIEMPO DE RESPUESTA</strong>
          </p>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-4 centers confirma">
          <p class="nomargin">
            <strong class="texto-content">ESTATUS</strong>
          </p>
        </div>
      </div>


      <!---->
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-prov centrado">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-6 nomargin centrar separacion-list1">
          <span class="device-title">NEGOCIO<br></span>
          <span class="texto-prov">Lorena Ipsum</span>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-6 nomargin separacion-list1">
          <span class="device-title">CATEGORÍA<br></span>
          <span class="texto-prov">Fashion</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1">
          <span class="device-title">MEMBRESÍA<br></span>
          <span class="texto-prov">Tipo A</span>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin separacion-list1 left-23">
          <span class="device-title">VENCIMIENTO<br></span>
          <span class="texto-prov">30-OCT-2017</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">TIEMPO DE RESPUESTA<br></span>
          <span class="texto-prov">1hr</span>
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">ESTATUS<br></span>
          <span class="texto-prov">Activo</span>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-prov centrado">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-6 nomargin centrar separacion-list1">
          <span class="device-title">NEGOCIO<br></span>
          <span class="texto-prov">Lorena Ipsum</span>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-6 nomargin separacion-list1">
          <span class="device-title">CATEGORÍA<br></span>
          <span class="texto-prov">Fashion</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1">
          <span class="device-title">MEMBRESÍA<br></span>
          <span class="texto-prov">Tipo A</span>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin separacion-list1 left-23">
          <span class="device-title">VENCIMIENTO<br></span>
          <span class="texto-prov">30-OCT-2017</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">TIEMPO DE RESPUESTA<br></span>
          <span class="texto-prov">1hr</span>
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">ESTATUS<br></span>
          <span class="texto-prov">Activo</span>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-prov centrado">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-6 nomargin centrar separacion-list1">
          <span class="device-title">NEGOCIO<br></span>
          <span class="texto-prov">Lorena Ipsum</span>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-6 nomargin separacion-list1">
          <span class="device-title">CATEGORÍA<br></span>
          <span class="texto-prov">Fashion</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1">
          <span class="device-title">MEMBRESÍA<br></span>
          <span class="texto-prov">Tipo A</span>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin separacion-list1 left-23">
          <span class="device-title">VENCIMIENTO<br></span>
          <span class="texto-prov">30-OCT-2017</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">TIEMPO DE RESPUESTA<br></span>
          <span class="texto-prov">1hr</span>
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list1 left-align">
           <span class="device-title">ESTATUS<br></span>
          <span class="texto-prov">Activo</span>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-prov centrado">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-6 nomargin centrar separacion-list1">
          <span class="device-title">NEGOCIO<br></span>
          <span class="texto-prov">Lorena Ipsum</span>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-6 nomargin separacion-list1">
          <span class="device-title">CATEGORÍA<br></span>
          <span class="texto-prov">Fashion</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1">
          <span class="device-title">MEMBRESÍA<br></span>
          <span class="texto-prov">Tipo A</span>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin separacion-list1 left-23">
          <span class="device-title">VENCIMIENTO<br></span>
          <span class="texto-prov">30-OCT-2017</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">TIEMPO DE RESPUESTA<br></span>
          <span class="texto-prov">1hr</span>
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list1 left-align">
           <span class="device-title">ESTATUS<br></span>
          <span class="proveedores-off">Inhabilitado</span>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-prov centrado">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-6 nomargin centrar separacion-list1">
          <span class="device-title">NEGOCIO<br></span>
          <span class="texto-prov">Lorena Ipsum</span>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-6 nomargin separacion-list1">
          <span class="device-title">CATEGORÍA<br></span>
          <span class="texto-prov">Fashion</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1">
          <span class="device-title">MEMBRESÍA<br></span>
          <span class="texto-prov">Tipo A</span>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin separacion-list1 left-23">
          <span class="device-title">VENCIMIENTO<br></span>
          <span class="texto-prov">30-OCT-2017</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">TIEMPO DE RESPUESTA<br></span>
          <span class="texto-prov">1hr</span>
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">ESTATUS<br></span>
          <span class="texto-prov">Activo</span>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-prov centrado">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-6 nomargin centrar separacion-list1">
          <span class="device-title">NEGOCIO<br></span>
          <span class="texto-prov">Lorena Ipsum</span>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-6 nomargin separacion-list1">
          <span class="device-title">CATEGORÍA<br></span>
          <span class="texto-prov">Fashion</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1">
          <span class="device-title">MEMBRESÍA<br></span>
          <span class="texto-prov">Tipo A</span>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin separacion-list1 left-23">
          <span class="device-title">VENCIMIENTO<br></span>
          <span class="texto-prov">30-OCT-2017</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">TIEMPO DE RESPUESTA<br></span>
          <span class="texto-prov">1hr</span>
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">ESTATUS<br></span>
          <span class="texto-prov">Activo</span>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-prov centrado">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-6 nomargin centrar separacion-list1">
          <span class="device-title">NEGOCIO<br></span>
          <span class="texto-prov">Lorena Ipsum</span>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-6 nomargin separacion-list1">
          <span class="device-title">CATEGORÍA<br></span>
          <span class="texto-prov">Fashion</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1">
          <span class="device-title">MEMBRESÍA<br></span>
          <span class="texto-prov">Tipo A</span>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin separacion-list1 left-23">
          <span class="device-title">VENCIMIENTO<br></span>
          <span class="texto-prov">30-OCT-2017</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">TIEMPO DE RESPUESTA<br></span>
          <span class="texto-prov">1hr</span>
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">ESTATUS<br></span>
          <span class="texto-prov">Activo</span>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-prov centrado">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-6 nomargin centrar separacion-list1">
          <span class="device-title">NEGOCIO<br></span>
          <span class="texto-prov">Lorena Ipsum</span>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-6 nomargin separacion-list1">
          <span class="device-title">CATEGORÍA<br></span>
          <span class="texto-prov">Fashion</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1">
          <span class="device-title">MEMBRESÍA<br></span>
          <span class="texto-prov">Tipo A</span>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin separacion-list1 left-23">
          <span class="device-title">VENCIMIENTO<br></span>
          <span class="proveedores-vencido">25-OCT-2017</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">TIEMPO DE RESPUESTA<br></span>
          <span class="texto-prov">1hr</span>
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">ESTATUS<br></span>
          <span class="proveedores-vencido">Vencido</span>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 dotted-prov centrado">
        <div class="col-md-1 col-sm-1 col-xs-1 centers ocultar">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
            </label>
          </div>
        </div>
        <div class="col-md-1 col-sm-2 col-xs-6 nomargin centrar separacion-list1">
          <span class="device-title">NEGOCIO<br></span>
          <span class="texto-prov">Lorena Ipsum</span>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-6 nomargin separacion-list1">
          <span class="device-title">CATEGORÍA<br></span>
          <span class="texto-prov">Fashion</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1">
          <span class="device-title">MEMBRESÍA<br></span>
          <span class="texto-prov">Tipo A</span>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 nomargin separacion-list1 left-23">
          <span class="device-title">VENCIMIENTO<br></span>
          <span class="proveedores-vencido">14-ENE-2017</span>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">TIEMPO DE RESPUESTA<br></span>
          <span class="texto-prov">1hr</span>
        </div>
         <div class="col-md-1 col-sm-1 col-xs-6 nomargin separacion-list1 left-align">
          <span class="device-title">ESTATUS<br></span>
          <span class="proveedores-vencido">Vencido</span>
        </div>
      </div>
      <!---->
      <div class="box-footer no-padding">
        <div class="mailbox-controls">
          <div class="pull-right pag-center pag2 pag-left1">
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
