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
          <img src="images/proveedores/1.png" class="img-circle" alt="The Wedding Board">
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
            <a href="proveedores-calificacion.php"><p type="submit" class="btn boton-proveedores">Ver Calificaciones</p></a>
          </div>
        </div>

      <!-- /.col -->
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>

        <div class="col-sm-11 col-sm-offset-1 col-md-12 col-lg-10 col-lg-offset-1">
          <div class="col-sm-11 col-md-10 col-lg-12 centrado nomargin">
            <p class="text-detalle1">DETALLES</p>
          </div>
          <div class="col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 text-span">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <p>Nombre Proveedor: <span> JL Event Planner</span></p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-l6">
                <p>Mail: <span>jl.event.planner@mailtest.mx</span></p>
            </div>
          </div>
          <div class="col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 text-span">
            <div class=" col-sm-6 col-md-6">
              <p>Categoria: <span>Recepción</span></p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-l6">
                <p>Teléfono: <span>55 20 86 54 74</span></p>
            </div>
          </div>
          <div class="col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 text-span">
            <div class=" col-sm-6 col-md-6">
              <p>Sub categoria: <span>Haciendas</span></p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-l6">
                <p>Lacalidad: <span>Ciudad de México</span></p>
            </div>
          </div>
          <div class="col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 text-span">
            <div class=" col-sm-6 col-md-6">
              <p>Membresía: <span>Tipo A</span></p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-l6">
                <p>Miembro desde: <span>25 Abril 2017</span></p>
            </div>
          </div>
          <div class="col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 text-span bottom-evento">
            <div class="col-sm-6 col-md-6">
              <p>Vencimiento: <span>25 Abril 2017</span></p>
            </div>
            <div class="col-sm-6 col-md-6">
                <p>Aprobado por: <span>Shopie Dueso</span></p>
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
          <div class="col-sm-11 col-md-10 col-lg-12 centrado move-red">
            <p class="text-detalle1">RED DE COLABORACION</p>
          </div>
          <div class="col-sm-11 col-md-10 col-lg-10 col-lg-offset-1">
            <div class="col-sm-12 col-md-12 col-lg-12 centrado red">
              <p>AÚN NO TIENE COLABORADORES <br> EN SU RED</p>
            </div>
          </div>
          <div class="form-group row top-50 centrado">
          <div class="col-sm-11 col-md-10 col-lg-12 botton-red">
            <a href="proveedores-11.php"><p type="submit" class="btn boton-proveedores">Ver Toda la Red</p></a>
          </div>
        </div>
        </div>

        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>

        
        <div class="col-sm-11 col-sm-offset-1 col-md-12 col-lg-10 col-lg-offset-1 padin-cero-conf">
          <div class="col-sm-11 col-md-10 col-lg-12 centrado nomargin">
            <p class="text-detalle1">ESTADÍSTICAS</p>
          </div>
          <div class="col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 text-span">
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="col-xs-6 col-md-12 text-center">
                <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="60" data-width="120" data-height="120" data-fgColor="#00c0ef">
                <div class="knob-label" style="font-size:16px; font-weight:600;"><p>Tiempo de respuesta: <br><span>60 minutos</span></p></div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="col-xs-6 col-md-12 text-center">
                <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="25" data-width="120" data-height="120" data-fgColor="#00c0ef">
                <div class="knob-label" style="font-size:16px; font-weight:600;"><p>Mensajes recibidos: <br><span>25</span></p></div>
              </div>
            </div>
            <div class=" col-sm-6 col-md-4">
              <div class="col-xs-6 col-md-12 text-center">
                <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="25" data-width="120" data-height="120" data-fgColor="#00c0ef">
                <div class="knob-label" style="font-size:16px; font-weight:600;"><p>Número de visitas:<br> <span>25</span></p></div>
              </div>              
            </div>
          </div>
          <div class="col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 text-span">
            
            <div class="col-sm-6 col-md-4 col-lg-6">
              <div class="col-xs-6 col-md-12 text-center">
                <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="10" data-width="120" data-height="120" data-fgColor="#00c0ef">
                <div class="knob-label" style="font-size:16px; font-weight:600;"><p>Licitaciones:<br> <span>10</span></p></div>
              </div>
                
            </div>
          </div>
          <div class="col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 text-span">
            
            <div class="col-sm-6 col-md-4">
              <div class="col-xs-6 col-md-12 text-center">
                <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="3" data-width="120" data-height="120" data-fgColor="#00c0ef">
                <div class="knob-label" style="font-size:16px; font-weight:600;"><p>Licitaciones ganadas:<br> <span>3</span></p></div>
              </div>               
            </div>
          </div>
          <div class="col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 text-span bottom-evento">
            <div class="col-sm-6 col-md-4">
            <div class="col-xs-6 col-md-12 text-center">
                <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="5" data-width="120" data-height="120" data-fgColor="#00c0ef">
                <div class="knob-label" style="font-size:16px; font-weight:600;"> <p>Mensajes envíados: <span>5</span></p></div>
              </div>
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
<!--  -->
<?php
 
  //get_header();
  //get_headerPrincipal();

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <!-- Main content -->
    <section class="content">
      <!-- grafica 5 -->
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="col-md-12" style="text-align:center;">
                <p class="nomargin" style="font-size:1.4em; font-weight:700;">REPORTE DE FAVORITOS</p>
                <span style="color:#cacaca; text-transform:uppercase;">Wedding Board</span>
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <div class="col-md-12" style="text-align:center;">
                <p class="nomargin" style="font-size:1.4em; font-weight:700;">CUANTOS USUARIOS TE AÑADIERON</p>
                <span style="color:#cacaca; text-transform:uppercase;">Wedding Board</span>
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <div class="col-md-12" style="text-align:center;">
                <p class="nomargin" style="font-size:1.4em; font-weight:700;">PORCENTAJE DE RESPUESTA</p>
                <span style="color:#cacaca; text-transform:uppercase;">Wedding Board</span>
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <div class="col-md-12" style="text-align:center; margin-top: 20px;">
                <p class="nomargin" style="font-size:1.4em; font-weight:700;">LICITACIONES, COTIZACIONES</p>
                <span style="color:#cacaca; text-transform:uppercase;">Wedding Board</span>
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
                <div class="col-md-6 col-md-offset-3">
                  <div class="col-md-6" style="margin-top:50px;">
                    <div style="background:#d4d4d4; height:15px; width:15px; margin:0 auto;"></div><p style="text-align:center; font-size:22px;">Licitaciones</p>
                  </div>
                  <div class="col-md-6" style="margin-top:50px;">
                    <div style="background:#1bbbda; height:15px; width:15px; margin:0 auto;"></div><p style="text-align:center; font-size:22px;">Cotizaciones</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!--Fin Graficas 2 -->
        </div>

        <!-- /.col (RIGHT) -->
      </div>
      <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
          <!-- Graficas 2 -->
          <div class="col-md-4">
            <div id="container" class="chart"></div>
          </div>
          <!-- Fin grafica 2 -->

          <!-- Grafica 3 -->
          <div class="col-md-4">
            <div class="col-md-12" style="text-align:center; margin-top:-40px;">
              <p class="nomargin" style="font-size:1.4em; font-weight:700;">MENSAJES POR DÍA</p>
              <span style="color:#cacaca; text-transform:uppercase;">Wedding Board</span>
            </div>
            <div id="container3" class="chart"></div>
          </div>
          <!-- Fin grafica 3 -->
        </div>
      </div>
      <div class="row" style="margin-top:70px;">
        <div class="col-md-12">
          <!-- grafica 4 -->
          <div class="col-md-6">

            <div id="container4" class="chart"></div>
          </div>
          <!-- Fin grafica 4 -->
          <!-- grafica 5 -->
          <div class="col-md-6">
            <div class="col-md-12" style="text-align:center; margin-top: 20px;">
              <p class="nomargin" style="font-size:1.4em; font-weight:700;">CLICK PAGÍNA WEB, REDES SOCIALES, BANNERS</p>
              <span style="color:#cacaca; text-transform:uppercase;">Wedding Board</span>
            </div>
                <!-- Content Header (Page header) -->
            <meta charset="utf-8">
            <style>
            path {  stroke: #fff; }
            path:hover {  opacity:0.9; }
            rect:hover {  fill:blue; }
            .axis {  font: 10px sans-serif; }
            .legend tr{    border-bottom:1px solid grey; }
            .legend tr:first-child{    border-top:1px solid grey; }

            .axis path,
            .axis line {
              fill: none;
              stroke: #000;
              shape-rendering: crispEdges;
            }

            .x.axis path {  display: none; }
            .legend{
                margin-bottom:76px;
                display:inline-block;
                border-collapse: collapse;
                border-spacing: 0px;
            }
            .legend td{
                padding:4px 5px;
                vertical-align:bottom;
            }
            .legendFreq, .legendPerc{
                align:right;
                width:50px;
            }

            </style>
            <body>
            <div id='dashboard' class="graficas-nuevas">
            </div>
            <div class="col-md-12">
              <div class="col-md-4" style="margin-top:50px;">
                <div style="background:#3aed68; height:15px; width:15px; margin:0 auto;"></div><p style="text-align:center; font-size:16px; font-weight:500;">Click pagina web</p>
              </div>
              <div class="col-md-4" style="margin-top:50px;">
                <div style="background:#e4e23a; height:15px; width:15px; margin:0 auto;"></div><p style="text-align:center; font-size:16px;">Click redes sociales</p>
              </div>
              <div class="col-md-4" style="margin-top:50px;">
                <div style="background:#67cfe3; height:15px; width:15px; margin:0 auto;"></div><p style="text-align:center; font-size:16px;">Click banner publicidad</p>
              </div>
            </div>
            <script src="http://d3js.org/d3.v3.min.js"></script>

                <!-- /.content -->
          </div>
          <!-- fin grafica 5 -->
        </div>

      </div>
      <div class="row">
        <div class="col-md-12" style="margin-top:70px;">
          <!-- Graficas 2 -->
            <div class="box-body">
              <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="35" data-width="120" data-height="120" data-fgColor="#00c0ef">

                  <div class="knob-label" style="font-size:16px; font-weight:600;">COLABORADORES <br> ENERO</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="55" data-width="120" data-height="120" data-fgColor="#00c0ef">

                  <div class="knob-label" style="font-size:16px; font-weight:600;">COLABORADORES <br> FEBRERO</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="60" data-width="120" data-height="120" data-fgColor="#00c0ef">

                  <div class="knob-label" style="font-size:16px; font-weight:600;">COLABORADORES <br> MARZO</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="75" data-width="120" data-height="120" data-fgColor="#00c0ef">

                  <div class="knob-label" style="font-size:16px; font-weight:600;">COLABORADORES <br> ABRIL</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
        </div>
      </div>
    </div>


      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script>
  <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
  <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
  <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
  <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
  <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php
  // get_graficas_footer();
 ?>

<!--  -->
<?php
get_graficas_footer()
	//include("footer-3.php");
?>
