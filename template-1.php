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
      <div class="col-md-6 col-md-offset-3 titulo-perfil no-padding-template">
        <p>
          Templates
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centro no-padding-template">
        <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 centro esconder-form">
          <form action="#" class="ocultar-elemt">
          <div class="col-xs-10 col-sm-8 col-md-8 col-lg-8 padin-cero">
            <input type="search" name="" class="form-control input-sm">
            </div>
            <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4 padin-cero boton-buscar">
            <input type="submit" value="Buscar">
            </div>
          </form>
        </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-controls"> 
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centro aumento-temp no-padding-template">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 centro separacion-template-selects">
              <form>
                <select class="select-template">
                  <option value="#">Categoria</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                </select>
                </form>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 centro separacion-template-selects">
              <form>
                <select class="select-template">
                  <option value="#">Precio</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                </select>
                </form>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 centro separacion-template-selects">
              <form>
                <select class="select-template">
                  <option value="#">Tipo</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                </select>
                </form>
              </div>
             </div>
            </div>            
            <!-- /.mail-box-messages -->            
          </div>
          <!-- /.box-body -->
        <div class=" box-body col-xs-12 col-sm-12 col-md-12 col-lg-12 centro aumento-temp no-padding-template">
        <ul class="display">
        <?php  for ($i=0; $i <9 ; $i++) { ?>
      
          <li>
            <div class="centro title-temp">
                <p><i class="fa fa-caret-right azul-flecha" aria-hidden="true"></i> Lorem insump</p>
              </div>
                <a href="#!" class="temple1-edit2"><img width="100%" src="images/invitaciones/3.jpg" alt="The Wedding Board"></a>
               <div class=" centro title-temp margin15 no-padding-template">
                <div class=" centro aumento-template1 no-padding-template display2">
                  <a data-toggle="modal" data-target="#publicar" data-whatever="@mdo">
                    <button type="submit" class="btn btn-default icon-menssage btn-tamplate-list"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Publicar</button>
                  </a>
                   <a data-toggle="modal" data-target="#delete" data-whatever="@mdo">
                    <button type="submit" class="btn btn-default icon-menssage btn-tamplate-list"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                  </a>
                </div>               
               </div>
          </li> 

         <?php  } ?>        
        </ul>



      <!--MODAL-->

      <!--MODAL 2-->
      <div class="modal fade" id="publicar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog content-popoup" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
              </button>
            </div>
            <div class="modal-body col-md-12" style="background:white;">
              <!--COLLAPSER-->
                <div class="col-md-12 texto-pop">
                  <p class="titulo-popoup" style="text-transform:capitalize">
                    Publica<span>r in</span>vitación
                  </p>
                  <p class="titulo-popoup">
                   ¿Estas seguro que desea continuar?
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
            <!-- </div>
          </div>
        </div>
      </div> -->
      <!--MODAL 2-->


  </section>
  <!-- /.content -->
</div>
<div class="control-sidebar-bg"></div>
</div>
<?php
  get_footer();
?>
