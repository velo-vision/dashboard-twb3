<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();

  get_aside();
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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

<script src="http://d3js.org/d3.v3.min.js"></script>

    <!-- /.content -->

  </div>

  <script type="text/javascript">
  var data = [
  [1, 4862.4],
  [2, 5294.7],
  [3, 5934.5],
  [4, 7171.0],
  [5, 8964.4],
  [6, 10202.2],
  [7, 11962.5],
  [8, 14928.3],
  [9, 16909.2],
  [10, 18547.9],
  [11, 21617.8],
  [12, 26638.1],
  [13, 34634.4],
  [14, 46759.4],
  [15, 58478.1],
  [16, 67884.6],
  [17, 74462.6],
  [18, 79395.7]
];

// See https://github.com/ecomfe/echarts-stat
var myRegression = ecStat.regression('exponential', data);

myRegression.points.sort(function(a, b) {
  return a[0] - b[0];
});

option = {
  title: {
      text: '1981 - 1998 gross domestic product GDP (trillion yuan)',
      subtext: 'By ecStat.regression',
      sublink: 'https://github.com/ecomfe/echarts-stat',
      left: 'center'
  },
  tooltip: {
      trigger: 'axis',
      axisPointer: {
          type: 'cross'
      }
  },
  xAxis: {
      type: 'value',
      splitLine: {
          lineStyle: {
              type: 'dashed'
          }
      },
      splitNumber: 20
  },
  yAxis: {
      type: 'value',
      splitLine: {
          lineStyle: {
              type: 'dashed'
          }
      }
  },
  series: [{
      name: 'scatter',
      type: 'scatter',
      label: {
          emphasis: {
              show: true,
              position: 'left',
              textStyle: {
                  color: 'blue',
                  fontSize: 16
              }
          }
      },
      data: data
  }, {
      name: 'line',
      type: 'line',
      showSymbol: false,
      smooth: true,
      data: myRegression.points,
      markPoint: {
          itemStyle: {
              normal: {
                  color: 'transparent'
              }
          },
          label: {
              normal: {
                  show: true,
                  position: 'left',
                  formatter: myRegression.expression,
                  textStyle: {
                      color: '#333',
                      fontSize: 14
                  }
              }
          },
          data: [{
              coord: myRegression.points[myRegression.points.length - 1]
          }]
      }
  }]
};
  </script>

  <!-- graficas 2 -->


      <!-- <div id="container" style="height: 100%"></div>


      <div id="container3" style="height: 100%"></div>









     <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script>
     <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
     <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
     <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
     <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
     <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
     <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
  <!-- fin graficas 2 --> -->

  <!-- graficas 3 -->

  <!-- fin graficas 3 -->



  <!-- /.content-wrapper -->

  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->
<?php
   get_graficas_footer();
 ?>
