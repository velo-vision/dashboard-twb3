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
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Visitas</h3>

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
              <h3 class="box-title">Donut Chart</h3>

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
              <h3 class="box-title">Line Chart</h3>

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
              <h3 class="box-title">Clicks al Teléfono</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<div class="box-body">
  <div class="row">
    <div class="col-xs-6 col-md-3 text-center">
      <input type="text" class="knob" value="60" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

      <div class="knob-label">data-width="90"</div>
    </div>
    <!-- ./col -->
    <div class="col-xs-6 col-md-3 text-center">
      <input type="text" class="knob" value="30" data-width="120" data-height="120" data-fgColor="#f56954">

      <div class="knob-label">data-width="120"</div>
    </div>
    <!-- ./col -->
    <div class="col-xs-6 col-md-3 text-center">
      <input type="text" class="knob" value="30" data-thickness="0.1" data-width="90" data-height="90" data-fgColor="#00a65a">

      <div class="knob-label">data-thickness="0.1"</div>
    </div>
    <!-- ./col -->
    <div class="col-xs-6 col-md-3 text-center">
      <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="30" data-width="120" data-height="120" data-fgColor="#00c0ef">

      <div class="knob-label">data-angleArc="250"</div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
</div>

        </div>

        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php
  get_graficas_footer();
 ?>
