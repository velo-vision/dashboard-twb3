
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->


<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>


<!-- jQuery Knob -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>

<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
      labels: ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO"],
      datasets: [
        {
          label: "Licitaciones",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "Cotizaciones",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    };

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    var lineChartOptions = areaChartOptions;
    lineChartOptions.datasetFill = false;
    lineChart.Line(areaChartData, lineChartOptions);

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: 700,
        color: "#f56954",
        highlight: "#f56954",
        label: "Polanco"
      },
      {
        value: 500,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "Chapultepec"
      },
      {
        value: 400,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "Condesa"
      },
      {
        value: 600,
        color: "#00c0ef",
        highlight: "#00c0ef",
        label: "Narvarte"
      },
      {
        value: 300,
        color: "#3c8dbc",
        highlight: "#3c8dbc",
        label: "Naucalpan"
      },
      {
        value: 100,
        color: "#d2d6de",
        highlight: "#d2d6de",
        label: "Magdalena"
      }
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#1bbbda";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
  });
</script>

<script>
  $(function () {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    $(".sparkline").each(function () {
      var $this = $(this);
      $this.sparkline('html', $this.data());
    });

    /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
    drawDocSparklines();
    drawMouseSpeedDemo();

  });
  function drawDocSparklines() {

    // Bar + line composite charts
    $('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
    $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red'});


    // Line charts taking their values from the tag
    $('.sparkline-1').sparkline();

    // Larger line charts for the docs
    $('.largeline').sparkline('html',
        {type: 'line', height: '2.5em', width: '4em'});

    // Customized line chart
    $('#linecustom').sparkline('html',
        {
          height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
          minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3
        });

    // Bar charts using inline values
    $('.sparkbar').sparkline('html', {type: 'bar'});

    $('.barformat').sparkline([1, 3, 5, 3, 8], {
      type: 'bar',
      tooltipFormat: '{{value:levels}} - {{value}}',
      tooltipValueLookups: {
        levels: $.range_map({':2': 'Low', '3:6': 'Medium', '7:': 'High'})
      }
    });

    // Tri-state charts using inline values
    $('.sparktristate').sparkline('html', {type: 'tristate'});
    $('.sparktristatecols').sparkline('html',
        {type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});

    // Composite line charts, the second using values supplied via javascript
    $('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
    $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10});

    // Line charts with normal range marker
    $('#normalline').sparkline('html',
        {fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
    $('#normalExample').sparkline('html',
        {fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});

    // Discrete charts
    $('.discrete1').sparkline('html',
        {type: 'discrete', lineColor: 'blue', xwidth: 18});
    $('#discrete2').sparkline('html',
        {type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4});

    // Bullet charts
    $('.sparkbullet').sparkline('html', {type: 'bullet'});

    // Pie charts
    $('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em'});

    // Box plots
    $('.sparkboxplot').sparkline('html', {type: 'box'});
    $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
        {type: 'box', raw: true, showOutliers: true, target: 6});

    // Box plot with specific field order
    $('.boxfieldorder').sparkline('html', {
      type: 'box',
      tooltipFormatFieldlist: ['med', 'lq', 'uq'],
      tooltipFormatFieldlistKey: 'field'
    });

    // click event demo sparkline
    $('.clickdemo').sparkline();
    $('.clickdemo').bind('sparklineClick', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      alert("Clicked on x=" + region.x + " y=" + region.y);
    });

    // mouseover event demo sparkline
    $('.mouseoverdemo').sparkline();
    $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
    }).bind('mouseleave', function () {
      $('.mouseoverregion').text('');
    });
  }

  /**
   ** Draw the little mouse speed animated graph
   ** This just attaches a handler to the mousemove event to see
   ** (roughly) how far the mouse has moved
   ** and then updates the display a couple of times a second via
   ** setTimeout()
   **/
  function drawMouseSpeedDemo() {
    var mrefreshinterval = 500; // update display every 500ms
    var lastmousex = -1;
    var lastmousey = -1;
    var lastmousetime;
    var mousetravel = 0;
    var mpoints = [];
    var mpoints_max = 30;
    $('html').mousemove(function (e) {
      var mousex = e.pageX;
      var mousey = e.pageY;
      if (lastmousex > -1) {
        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
      }
      lastmousex = mousex;
      lastmousey = mousey;
    });
    var mdraw = function () {
      var md = new Date();
      var timenow = md.getTime();
      if (lastmousetime && lastmousetime != timenow) {
        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
        mpoints.push(pps);
        if (mpoints.length > mpoints_max)
          mpoints.splice(0, 1);
        mousetravel = 0;
        $('#mousespeed').sparkline(mpoints, {width: mpoints.length * 2, tooltipSuffix: ' pixels per second'});
      }
      lastmousetime = timenow;
      setTimeout(mdraw, mrefreshinterval);
    };
    // We could use setInterval instead, but I prefer to do it this way
    setTimeout(mdraw, mrefreshinterval);
  }
</script>

<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart1);
function drawChart1() {
var data = google.visualization.arrayToDataTable([
['Year', 'Sales', 'Expenses'],
['2005',  1000,      400],
['2005',  1170,      460],
['2006',  660,       1120],
['2007',  1030,      540]
]);

var options = {
title: 'Company Performance',
hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
};

var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
chart.draw(data, options);
}

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart2);
function drawChart2() {
var data = google.visualization.arrayToDataTable([
['Year', 'Sales', 'Expenses'],
['2013',  1000,      400],
['2014',  1170,      460],
['2015',  660,       1120],
['2016',  1030,      540]
]);

var options = {
title: 'Company Performance',
hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
vAxis: {minValue: 0}
};

var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
chart.draw(data, options);
}

$(window).resize(function(){
drawChart1();
drawChart2();
});

</script>

<!-- Graficas nuevas -->
<script type="text/javascript">
function dashboard(id, fData){
    var barColor = 'steelblue';
    function segColor(c){ return {low:"#67cfe3", mid:"#e4e23a",high:"#4ed979"}[c]; }

    // compute total for each state.
    fData.forEach(function(d){d.total=d.freq.low+d.freq.mid+d.freq.high;});

    // function to handle histogram.
    function histoGram(fD){
        var hG={},    hGDim = {t: 60, r: 0, b: 30, l: 0};
        hGDim.w = 500 - hGDim.l - hGDim.r,
        hGDim.h = 300 - hGDim.t - hGDim.b;

        //create svg for histogram.
        var hGsvg = d3.select(id).append("svg")
            .attr("width", hGDim.w + hGDim.l + hGDim.r)
            .attr("height", hGDim.h + hGDim.t + hGDim.b).append("g")
            .attr("transform", "translate(" + hGDim.l + "," + hGDim.t + ")");

        // create function for x-axis mapping.
        var x = d3.scale.ordinal().rangeRoundBands([0, hGDim.w], 0.1)
                .domain(fD.map(function(d) { return d[0]; }));

        // Add x-axis to the histogram svg.
        hGsvg.append("g").attr("class", "x axis")
            .attr("transform", "translate(0," + hGDim.h + ")")
            .call(d3.svg.axis().scale(x).orient("bottom"));

        // Create function for y-axis map.
        var y = d3.scale.linear().range([hGDim.h, 0])
                .domain([0, d3.max(fD, function(d) { return d[1]; })]);

        // Create bars for histogram to contain rectangles and freq labels.
        var bars = hGsvg.selectAll(".bar").data(fD).enter()
                .append("g").attr("class", "bar");

        //create the rectangles.
        bars.append("rect")
            .attr("x", function(d) { return x(d[0]); })
            .attr("y", function(d) { return y(d[1]); })
            .attr("width", x.rangeBand())
            .attr("height", function(d) { return hGDim.h - y(d[1]); })
            .attr('fill',barColor)
            .on("mouseover",mouseover)// mouseover is defined below.
            .on("mouseout",mouseout);// mouseout is defined below.

        //Create the frequency labels above the rectangles.
        bars.append("text").text(function(d){ return d3.format(",")(d[1])})
            .attr("x", function(d) { return x(d[0])+x.rangeBand()/2; })
            .attr("y", function(d) { return y(d[1])-5; })
            .attr("text-anchor", "middle");

        function mouseover(d){  // utility function to be called on mouseover.
            // filter for selected state.
            var st = fData.filter(function(s){ return s.State == d[0];})[0],
                nD = d3.keys(st.freq).map(function(s){ return {type:s, freq:st.freq[s]};});

            // call update functions of pie-chart and legend.
            pC.update(nD);
            leg.update(nD);
        }

        function mouseout(d){    // utility function to be called on mouseout.
            // reset the pie-chart and legend.
            pC.update(tF);
            leg.update(tF);
        }

        // create function to update the bars. This will be used by pie-chart.
        hG.update = function(nD, color){
            // update the domain of the y-axis map to reflect change in frequencies.
            y.domain([0, d3.max(nD, function(d) { return d[1]; })]);

            // Attach the new data to the bars.
            var bars = hGsvg.selectAll(".bar").data(nD);

            // transition the height and color of rectangles.
            bars.select("rect").transition().duration(500)
                .attr("y", function(d) {return y(d[1]); })
                .attr("height", function(d) { return hGDim.h - y(d[1]); })
                .attr("fill", color);

            // transition the frequency labels location and change value.
            bars.select("text").transition().duration(500)
                .text(function(d){ return d3.format(",")(d[1])})
                .attr("y", function(d) {return y(d[1])-5; });
        }
        return hG;
    }

    // function to handle pieChart.
    function pieChart(pD){
        var pC ={},    pieDim ={w:250, h: 250};
        pieDim.r = Math.min(pieDim.w, pieDim.h) / 2;

        // create svg for pie chart.
        var piesvg = d3.select(id).append("svg")
            .attr("width", pieDim.w).attr("height", pieDim.h).append("g")
            .attr("transform", "translate("+pieDim.w/2+","+pieDim.h/2+")");

        // create function to draw the arcs of the pie slices.
        var arc = d3.svg.arc().outerRadius(pieDim.r - 10).innerRadius(0);

        // create a function to compute the pie slice angles.
        var pie = d3.layout.pie().sort(null).value(function(d) { return d.freq; });

        // Draw the pie slices.
        piesvg.selectAll("path").data(pie(pD)).enter().append("path").attr("d", arc)
            .each(function(d) { this._current = d; })
            .style("fill", function(d) { return segColor(d.data.type); })
            .on("mouseover",mouseover).on("mouseout",mouseout);

        // create function to update pie-chart. This will be used by histogram.
        pC.update = function(nD){
            piesvg.selectAll("path").data(pie(nD)).transition().duration(500)
                .attrTween("d", arcTween);
        }
        // Utility function to be called on mouseover a pie slice.
        function mouseover(d){
            // call the update function of histogram with new data.
            hG.update(fData.map(function(v){
                return [v.State,v.freq[d.data.type]];}),segColor(d.data.type));
        }
        //Utility function to be called on mouseout a pie slice.
        function mouseout(d){
            // call the update function of histogram with all data.
            hG.update(fData.map(function(v){
                return [v.State,v.total];}), barColor);
        }
        // Animating the pie-slice requiring a custom function which specifies
        // how the intermediate paths should be drawn.
        function arcTween(a) {
            var i = d3.interpolate(this._current, a);
            this._current = i(0);
            return function(t) { return arc(i(t));    };
        }
        return pC;
    }

    // function to handle legend.
    function legend(lD){
        var leg = {};
        // create table for legend.
        var legend = d3.select(id).append("table").attr('class','legend');
        // create one row per segment.
        var tr = legend.append("tbody").selectAll("tr").data(lD).enter().append("tr");
        // create the first column for each segment.
        tr.append("td").append("svg").attr("width", '16').attr("height", '16').append("rect")
            .attr("width", '16').attr("height", '16')
      .attr("fill",function(d){ return segColor(d.type); });
        // create the second column for each segment.
        tr.append("td").text(function(d){ return d.type;});
        // create the third column for each segment.
        tr.append("td").attr("class",'legendFreq')
            .text(function(d){ return d3.format(",")(d.freq);});
        // create the fourth column for each segment.
        tr.append("td").attr("class",'legendPerc')
            .text(function(d){ return getLegend(d,lD);});

        // Utility function to be used to update the legend.
        leg.update = function(nD){
            // update the data attached to the row elements.
            var l = legend.select("tbody").selectAll("tr").data(nD);
            // update the frequencies.
            l.select(".legendFreq").text(function(d){ return d3.format(",")(d.freq);});
            // update the percentage column.
            l.select(".legendPerc").text(function(d){ return getLegend(d,nD);});
        }
        function getLegend(d,aD){ // Utility function to compute percentage.
            return d3.format("%")(d.freq/d3.sum(aD.map(function(v){ return v.freq; })));
        }
        return leg;
    }

    // calculate total frequency by segment for all state.
    var tF = ['low','mid','high'].map(function(d){
        return {type:d, freq: d3.sum(fData.map(function(t){ return t.freq[d];}))};
    });

    // calculate total frequency by state for all segment.
    var sF = fData.map(function(d){return [d.State,d.total];});

    var hG = histoGram(sF), // create the histogram.
        pC = pieChart(tF), // create the pie-chart.
        leg= legend(tF);  // create the legend.
}
</script>

<script>
var freqData=[
{State:'Enero',freq:{low:3000, mid:3000, high:3000}}
,{State:'Febrero',freq:{low:1101, mid:412, high:674}}
,{State:'Marzo',freq:{low:932, mid:2149, high:418}}
,{State:'Abril',freq:{low:832, mid:1152, high:1862}}
,{State:'Mayo',freq:{low:4481, mid:3304, high:948}}
,{State:'Junio',freq:{low:1619, mid:167, high:1063}}
,{State:'Julio',freq:{low:1819, mid:247, high:1203}}
,{State:'Agosto',freq:{low:4498, mid:3852, high:942}}
,{State:'Septiembre',freq:{low:797, mid:1849, high:1534}}
,{State:'Octubre',freq:{low:162, mid:379, high:471}}
];

dashboard('#dashboard',freqData);
</script>

<!-- Graficas 2 -->
<script type="text/javascript">
var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};
option = null;
var data = [
[1, 4],
[2, 5],
[3, 5],
[4, 7],
[5, 8],
[6, 10],
[7, 11],
[8, 14],
[9, 16],
[10, 18],
[11, 21],
[12, 26],
[13, 34],
[14, 46],
[15, 58],
[16, 67],
[17, 74],
[18, 79]
];

// See https://github.com/ecomfe/echarts-stat
var myRegression = ecStat.regression('exponential', data);

myRegression.points.sort(function(a, b) {
return a[0] - b[0];
});

option = {
title: {
 text: 'CLICK POR TELÉFONO',
 subtext: 'WEDDING BOARD',
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
 name: 'Click',
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
 name: 'Line',
 type: 'line',
 showSymbol: false,
 smooth: true,
 data: myRegression.points,
 markPoint: {
     itemStyle: {
         normal: {
             color: '#67cfe3'
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
;
if (option && typeof option === "object") {
myChart.setOption(option, true);
}
</script>
<!-- fin graficas 2 -->

<!-- grafica 3  -->
<script type="text/javascript">
var dom = document.getElementById("container3");
var myChart = echarts.init(dom);
var app = {};
option = null;
app.title = 'Wedding board';

option = {
   color: ['#67cfe3'],
   tooltip : {
       trigger: 'axis',
       axisPointer : {            // 坐标轴指示器，坐标轴触发有效
           type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
       }
   },
   grid: {
       left: '3%',
       right: '4%',
       bottom: '3%',
       containLabel: true
   },
   xAxis : [
       {
           type : 'category',
           data : ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'],
           axisTick: {
               alignWithLabel: true
           }
       }
   ],
   yAxis : [
       {
           type : 'value'
       }
   ],
   series : [
       {
           name:'Mensajes',
           type:'bar',
           barWidth: '60%',
           data:[10, 52, 200, 334, 390, 330, 220]
       }
   ]
};
;
if (option && typeof option === "object") {
   myChart.setOption(option, true);
}
      </script>
<!-- fin graficas 3 -->

<!-- graficas 4 -->
<script type="text/javascript">
var dom = document.getElementById("container4");
var myChart = echarts.init(dom);
var app = {};
option = null;
option = {
    title : {
        text: 'VISITAS A LA PAGINA',
        subtext: 'WEDDING BOARD',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        left: 'left',
        data: ['MONTERREY','PUEBLA','JALISCO','VERACRUZ','CD DE MEXICO']
    },
    series : [
        {
            name: 'Visitas',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
                {value:335, name:'MONTERREY'},
                {value:310, name:'PUEBLA'},
                {value:234, name:'JALISCO'},
                {value:135, name:'VERACRUZ'},
                {value:1548, name:'CD DE MEXICO'}
            ],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
};
;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
<!-- fin graficas 4 -->





<!-- graficas chart 1-->
<script>

  
    var lineChartData = {
      labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio"],
      datasets : [
        {
          label: "Primera serie de datos",
          fillColor : "rgba(220,220,220,0.2)",
          strokeColor : "#6b9dfa",
          pointColor : "#1e45d7",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
          data : [1,2,3,4,5,6,7,8,9]
        },
        // {
        //   label: "Segunda serie de datos",
        //   fillColor : "rgba(151,187,205,0.2)",
        //   strokeColor : "#e9e225",
        //   pointColor : "#faab12",
        //   pointStrokeColor : "#fff",
        //   pointHighlightFill : "#fff",
        //   pointHighlightStroke : "rgba(151,187,205,1)",
        //   data : [40,50,70,40,85,55,15]
        // }
      ]

    }

var ctx4 = document.getElementById("chart-area4").getContext("2d");   
window.myPie = new Chart(ctx4).Line(lineChartData, {responsive:true});
</script>
<!-- fin graficas -->

<!-- graficas chart 2 -->
    <script>
var pieData = [
      {
        value: 40,
        color:"#0b82e7",
        highlight: "#0c62ab",
        label: "CD DE MEXICO"
      },
        {
          value: 16,
          color: "#d7124e",
          highlight: "#a9ad47",
          label: "MONTERREY"
        },
        {
          value: 11,
          color: "#eb5d82",
          highlight: "#b74865",
          label: "PUEBLA"
        },
        {
          value: 10,
          color: "#5ae85a",
          highlight: "#42a642",
          label: "JALISCO"
        },
        {
          value: 8.6,
          color: "#4437ee",
          highlight: "#a6429b",
          label: "VERACRUZ"
        }
      ];


  
var ctx = document.getElementById("chart-area").getContext("2d");
window.myPie = new Chart(ctx).Pie(pieData);   
</script>
<!-- fin graficas -->

<!-- graficas chart 3 -->
    <script>

  var barChartData = {
    labels : ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"],
    datasets : [
      {
        fillColor : "#67cfe3",
        strokeColor : "#ffffff",
        highlightFill: "#1864f2",
        highlightStroke: "#ffffff",
        data : [30,20,30,40,50,60,70]
      },
      // {
      //   fillColor : "#e9e225",
      //   strokeColor : "#ffffff",
      //   highlightFill : "#ee7f49",
      //   highlightStroke : "#ffffff",
      //   data : [40,50,70,40,85,55,15]
      // }
    ]

  } 
    

var ctx3 = document.getElementById("chart-area3").getContext("2d"); 
window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});
</script>
<!-- fin graficas -->


          <script src="js/Chart.js"></script>


</body>
</html>
