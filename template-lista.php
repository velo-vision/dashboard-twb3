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
                  <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10 dropdown boton-categoria sinpadding-lic">
                    <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm ancho-completo7" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-tag" aria-hidden="true"></i> Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                    </div>
                    <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm ancho-completo8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-sitemap" aria-hidden="true"></i> Estatus <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Activas</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Inactivas</a>
                      </div>
                      <button type="button" class="btn btn-default btn-sm ancho-completo9 separa volando-derecha">
                    <i class="fa fa-trash-o"></i> Eliminar 
                    </button>
                  </div>                
                  <!-- /.btn-group -->
                  <div class="pull-right pag-center">1-50/200
                    <div class="btn-group botones-paginacion">
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
 <div class="table-responsive mailbox-messages">
 <table class="table table-hover tabla-completa">
    <tbody >
      <tr class="strong-td">
        <td><input type="checkbox" class="oculto-check"></td>
        <td>
          <strong>USUARIO </strong>
        </td>
        <td>
          <strong>CATEGORÍA</strong>
        </td>
        <td>
          <strong>ESTATUS</strong>
        </td>
        <td>
          <strong>DISEÑADO POR</strong>
        </td>
        <td>
          <strong>FECHA DE CREACIÓN</strong>
        </td>
        <td>
          <strong>PRECIO</strong>
        </td>
        <td>
           <strong></strong>
        </td>
      </tr>
<?php for ($i=0; $i <10 ; $i++) { ?>
      <tr class="strong-td">
        <td><input type="checkbox" ></td>
        <td>
          <span>Lorena Martínez</span>  
        </td>
        <td>
         <span>Lorena Martíne</span> 
        </td>
        <td>
          <span>Publicada</span>      
        </td>
        <td>
          <span>Cu Mei Albublu</span>    
        </td>
        <td>
          <span>30-OCT-2017</span>     
        </td>
        <td>
           <span>$30.00</span>
        </td>
        <td>
           <a href="template-5.php">
            <button type="submit" class="btn btn-default icon-menssage btn-tamplate-list"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
          </a>
        </td>
      </tr>
<?php } ?>
    </tbody>
  </table>

      <!---->


    

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
