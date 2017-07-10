<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();

  get_aside();
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="col-md-6 col-md-offset-3 titulo-perfil no-50">
        <p>
          reportes
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      </div>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- grafica 5 -->
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="col-md-12 centers">
                <p class="nomargin text-reportes">REPORTE DE FAVORITOS</p>
                <span class="reportes-dedding">Wedding Board</span>
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
              <div class="col-md-12 centers top-20">
                <p class="nomargin text-reportes">CUANTOS USUARIOS TE AÑADIERON</p>
                <span class="reportes-dedding">Wedding Board</span>
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
              <div class="col-md-12 centers">
                <p class="nomargin text-reportes">PORCENTAJE DE RESPUESTA</p>
                <span class="reportes-dedding">Wedding Board</span>
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
              <div class="col-md-12 centers top-20">
                <p class="nomargin text-reportes">LICITACIONES, COTIZACIONES</p>
                <span class="reportes-dedding">Wedding Board</span>
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
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                  <div class="col-xs-6 col-sm-6 col-md-6 reportes-top-50 padding-graficas">
                    <div class="bg-reportes"></div><p class="licitaciones-reportes">Licitaciones</p>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 reportes-top-50">
                    <div class="bg-reportes1"></div><p class="cotizaciones-reportes">Cotizaciones</p>
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






<!-- graficas chart -->

 <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="col-md-12 centers">
                <p class="nomargin text-reportes">CLICK POR CELULAR</p>
                <span class="reportes-dedding">Wedding Board</span>
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="canvas-holder">
                <canvas id="chart-area4" width="600" height="300"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <div class="col-md-12 centers top-20">
                <p class="nomargin text-reportes">VISITAS A LA PAGINA</p>
                <span class="reportes-dedding">Wedding Board</span>
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
           <div id="canvas-holder" class="centers top-20">
             <canvas id="chart-area" width="300" height="300"></canvas>
           </div>
           <div class="col-xs-12 col-md-12 top-20 mexico-none">
             <div class="col-xs-4 col-md-4">
               <div class="bg-mexico"></div><p class="mexico">Cd de mexíco</p>
             </div>
             <div class="col-xs-4 col-md-4">
               <div class="bg-monterrey"></div><p class="monterrey">Monterrey</p>
             </div>
             <div class="col-xs-4 col-md-4">
               <div class="bg-puebla"></div><p class="puebla">Puebla</p>
             </div>
             <div class="col-xs-4 col-md-4">
               <div class="bg-jalisco"></div><p class="jalisco">Jalisco</p>
             </div>
             <div class="col-xs-4 col-md-4">
               <div class="bg-veracruz"></div><p class="veracruz">Veracruz</p>
             </div>
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
              <div class="col-md-12 centers">
                <p class="nomargin text-reportes">MENSAJES POR DÍA</p>
                <span class="reportes-dedding">Wedding Board</span>
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="canvas-holder">
                <canvas id="chart-area3" width="600" height="300"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <div class="col-md-12 centers top-20">
                <p class="nomargin text-reportes">CLICK PAGÍNA WEB, REDES SOCIALES, BANNERS</p>
                <span class="reportes-dedding">Wedding Board</span>
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
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
                <div id='dashboard' class="graficas-nuevas">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 top-20">
                  <div class="col-xs-4 col-sm-4 col-md-4 reportes-top-50">
                    <div class="bg-click1"style=""></div><p class="click-pagina">Click pagina web</p>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 reportes-top-50">
                    <div class="bg-click2" style=""></div><p class="click-redes">Click redes sociales</p>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 reportes-top-50">
                    <div class="bg-click3" style=""></div><p class="click-banner">Click banner publicidad</p>
                  </div>
                </div>
                <script src="http://d3js.org/d3.v3.min.js"></script>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!--Fin Graficas 2 -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>


      <div class="row">
        <div class="col-md-12 graficas-70">
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
  get_graficas_footer();
 ?>
