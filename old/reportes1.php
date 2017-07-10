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
          <div class="col-md-6">
            <div id="container" class="chart"></div>
          </div>
          <!-- Fin grafica 2 -->

          <!-- Grafica 3 -->
          <div class="col-md-6">
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
  get_graficas_footer();
 ?>
