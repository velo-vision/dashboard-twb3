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
      <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 titulo-usuario51">
        <div class="col-md-6 col-md-offset-3 titulo-prov">
          <p class="rotateInUpLeft ">
            proveedores
          </p>
        </div>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board" width="100%">
      </div>
      <div class="col-md-6 col-md-offset-3 col-xs-12 top-20 botton-volver">
        <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin">
          <img src="images/dashboard/anterior.png" alt="The Wedding Board">
          <span>Anterior</span>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 centers nomargin">
          <a href="proveedores-registrados.php">
            <p class="usuario5-volver" style="margin: 0 auto;">
              <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a Listado
            </p>
          </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4 prev-next1 nomargin">
          <span>Siguiente</span>
          <img src="images/dashboard/siguiente.png" alt="The Wedding Board">
        </div>
      </div>
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>

      <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 margin-men">
        <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a href="proveedores-mensajes.php">
              <p class="usuario5 margin-0">
                <i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar Mensajes
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a data-toggle="modal" data-target="#proveedores-inhabilitar" data-whatever="@mdo">
              <p class="usuario5 margin-0">
                <i class="fa fa-ban" aria-hidden="true"></i> Inhabilitar
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a data-toggle="modal" data-target="#proveedores-eliminar" data-whatever="@mdo">
              <p class="usuario5 margin-0 pro">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a href="proveedores-editar.php">
              <p class="usuario5 margin-0 pro">
                <i class="fa fa-pencil" aria-hidden="true"></i> Editar
              </p>
            </a>
          </div>
        </div>

      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>
        <div class="col-xs-12 col-md-12 nomargin img-twb1 centers">
          <img src="images/proveedores/2.png" class="img-circle" alt="The Wedding Board">
          <div class="col-xs-12 col-md-12 col-lg-12 text-nombre">
            <p class="jl-top">JL Eve<span>nt P</span>lanner</p>
            <p> Decoration</p>
          </div>
        </div>
        <div class="form-group row top-30 centrado">
          <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
            <div class="star-rating">
              <fieldset>
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
              </fieldset>
            </div>
          </div>
        </div>
        <div class="form-group row top-30 centrado">
          <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
            <a href="proveedores-calificacion.php"><p type="submit" class="btn boton-proveedores03">Ver Calificaciones</p></a>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 text-vencido centers">
          <p class="inhabil">Vencido</p>
        </div>

      <!-- /.col -->
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>

      <div class="col-sm-11 col-sm-offset-1 col-md-12 col-lg-10 col-lg-offset-1">
        <div class="col-sm-11 col-md-10 col-lg-12 centrado nomargin">
          <p class="text-detalle1">DETALLES</p>
        </div>
        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-span">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <p>Nombre Proveedor: <span> JL Event Planner</span></p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-l6">
              <p>Mail: <span>jl.event.planner@mailtest.mx</span></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-span">
          <div class=" col-sm-6 col-md-6">
            <p>Categoria: <span>Recepción</span></p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-l6">
              <p>Sub-Categoria: <span>Haciendas</span></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-span">
          <div class="col-sm-6 col-md-6 col-lg-l6">
              <p>Teléfono: <span>55 20 86 54 74</span></p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-l6">
              <p>Localidad: <span>Ciudad de México</span></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-span">
          <div class=" col-sm-6 col-md-6">
            <p>Membresía: <span>Tipo A</span></p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-l6">
              <p>Miembro desde: <span>25 abril 2017</span></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-span bottom-evento">
          <div class="col-sm-6 col-md-6">
            <p>Vencimiento: <span>25 abril 2018</span></p>
          </div>
          <div class="col-sm-6 col-md-6">
              <p>Aprobado por: <span>Sophie Dueso</span></p>
          </div>
        </div>
      </div>
        <div class="form-group row top-50 centrado">
          <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
            <a href="proveedores-editar.php"><p type="submit" class="btn boton-calificaciones">Editar datos</p></a>
          </div>
        </div>

        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>

        <div class="col-sm-11 col-sm-offset-1 col-md-12 col-lg-10 col-lg-offset-1 padin-cero-conf">
          <div class="col-sm-11 col-md-10 col-lg-12 centrado nomargin">
            <p class="text-detalle1">ESTADÍSTICAS</p>
          </div>
          <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-span">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <p>Tiempo de respuesta: <span>1 Hora</span></p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <p>Mensajes recibidos: <span>25</span></p>
            </div>
          </div>
          <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-span">
            <div class=" col-sm-6 col-md-6">
              <p>Número de visitas: <span>25</span></p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <p>Licitaciones: <span>10</span></p>
            </div>
          </div>
          <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-span">
            <div class="col-sm-6 col-md-6">
              <p>Cotizaciones envíadas: <span>30</span></p>
            </div>
            <div class="col-sm-6 col-md-6">
                <p>Licitaciones ganadas: <span>3</span></p>
            </div>
          </div>
          <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-span bottom-evento">
            <div class="col-sm-6 col-md-6">
              <p>Mensajes envíados: <span>5</span></p>
            </div>
          </div>
        </div>

        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>

        <div class="col-sm-11 col-sm-offset-1 col-md-12 col-lg-10 col-lg-offset-1 padin-cero-conf">
          <div class="col-sm-11 col-md-10 col-lg-12 centrado move-red">
            <p class="text-detalle1">RED DE COLABORACION</p>
          </div>
          <div class="col-sm-11 col-md-10 col-lg-12">
            <div class="col-sm-12 col-md-12 col-lg-12 centrado reciente">
              <p>AGREGADOS RECIENTEMENTE</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-11 col-lg-10 col-lg-offset-1 left-img">
            <div class="col-xs-12 col-sm-12 col-md-5 nomargin border-pro agregado-right">
              <img src="images/proveedores/foto1.png" class="img-foto" alt="">
              <p class="img-agregado"></p>
              <img src="images/proveedores/circulo2.png" class="img-circulo" alt="">
              <p class="text-dolor">Lorem ipsum Dolor</p>
              <p class="text-fashion">Fashion</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 nomargin border-pro">
              <img src="images/proveedores/foto2.png" class="img-foto" alt="">
              <p class="img-agregado"></p>
              <img src="images/proveedores/circulo1.png" class="img-circulo" alt="">
              <p class="text-dolor">Lorem ipsum Dolor</p>
              <p class="text-fashion">Fashion</p>
            </div>
          </div>
          <div class="form-group row top-50 centrado">
          <div class="col-sm-11 col-md-10 col-lg-12 botton-red">
            <a href="proveedores-11.php"><p type="submit" class="btn boton-proveedores03">Ver Toda la Red</p></a>
          </div>
        </div>
        </div>


      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>
      <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 margin-men">
        <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a href="proveedores-mensajes.php">
              <p class="usuario5 margin-0">
                <i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar Mensajes
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a data-toggle="modal" data-target="#proveedores-inhabilitar" data-whatever="@mdo">
              <p class="usuario5 margin-0">
                <i class="fa fa-ban" aria-hidden="true"></i> Inhabilitar
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a data-toggle="modal" data-target="#proveedores-eliminar" data-whatever="@mdo">
              <p class="usuario5 margin-0 pro">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
              </p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 centers margin-volver">
            <a href="proveedores-editar.php">
              <p class="usuario5 margin-0 pro">
                <i class="fa fa-pencil" aria-hidden="true"></i> Editar
              </p>
            </a>
          </div>
        </div>
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>
      <div class="col-md-6 col-md-offset-3 col-xs-12 top-30 botton-volver">
        <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin">
          <img src="images/dashboard/anterior.png" alt="The Wedding Board">
          <span>Anterior</span>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 centers nomargin">
          <a href="proveedores-registrados.php">
            <p class="usuario5-volver" style="margin: 0 auto;">
              <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a Listado
            </p>
          </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4 prev-next1 nomargin">
          <span>Siguiente</span>
          <img src="images/dashboard/siguiente.png" alt="The Wedding Board">
        </div>
      </div>

    </div>
    <!-- /.row -->

    <!--MODAL ELIMINAR-->
    <div class="modal fade" id="proveedores-eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                 Elimina<span>r pr</span>oveedor
               </p>
               <p class="titulo-prove" style="text-transform:none">
                 Esta a punto de eliminar un provedor, esta seguro
                 que desea continuar, esta acción no se puede revertir.
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
    <!--MODAL INHABILITAR-->
    <div class="modal fade" id="proveedores-inhabilitar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                Inhabilit<span>ar pr</span>oveedor
              </p>
              <p class="titulo-prove" style="text-transform:none">
                Esta a punto de inhabilitar a un provedor <br>
                ¿Esta seguro que desea continuar?
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
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="control-sidebar-bg"></div>
</div>
<?php
	include("footer-3.php");
?>
