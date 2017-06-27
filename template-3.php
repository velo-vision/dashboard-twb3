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
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p>Template</p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">          
        <div class="box-body no-padding">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <!-- izquierdo -->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 temple3-edit">
                <p>FRENTE</p>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 temple3-edit temple3-edit2">
                  <img src="images/template/img1.jpg">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 temple3-edit">
                <p>VUELTA</p>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 temple3-edit temple3-edit2">
                  <img src="images/template/img2.jpg">
                </div>
              </div>
            </div>
            <!-- en medio -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titulo-medio">
                <img src="images/template/dot.jpg"><span> Fresh Autum</span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contenido-img-template-3">                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fondo" style="background: url('images/template/img3.jpg');">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-dot">                      
                    </div>
                </div>                  
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn-aumento-tempalte3">
                <div class="col-md-8 col-md-offset-2 top-20">
                  <div class="col-sm-6 col-md-6" style="text-align:right">
                    <button type="submit" class="btn btn-default icon-menssage btn-template3"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <button type="submit" class="btn btn-default icon-menssage btn-template3" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i> Cancelar</button>
                  </div>
                </div>
              </div>
              
            </div>
            
            <!-- derecho -->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-12 titulo-formato">
                <p><span><i class="fa fa-text-height azul-tempalte3" aria-hidden="true"></i></span>   FORMATO TEXTO</p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-12 titulo-formato">
                <p class="gris"><span><i class="fa fa-text-height azul-tempalte3 " aria-hidden="true"></i></span>  TAMAÑO</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-12">
                <label for="color-input" id="color-label" style="background-color: red"></label>
                  <input type="checkbox" id="color-input" checked></input>

                  <div id="color-picker">
                    <canvas id="color-block" height="150" width="150"></canvas>
                    <canvas id="color-strip" height="150" width="30"></canvas>
                  </div>
            </div>
           <!--  <input type="color" id="color" value="#ee0000" list="reds" /> -->


         </div>
        </div>
      </div>
    </div>




  </section>
  <!-- /.content -->
</div>
<div class="control-sidebar-bg"></div>


<?php
  get_footer();
?>

<script type="text/javascript">
  var colorBlock = document.getElementById('color-block');
var ctx1 = colorBlock.getContext('2d');
var width1 = colorBlock.width;
var height1 = colorBlock.height;

var colorStrip = document.getElementById('color-strip');
var ctx2 = colorStrip.getContext('2d');
var width2 = colorStrip.width;
var height2 = colorStrip.height;

var colorLabel = document.getElementById('color-label');

var x = 0;
var y = 0;
var drag = false;
var rgbaColor = 'rgba(255,0,0,1)';

ctx1.rect(0, 0, width1, height1);
fillGradient();

ctx2.rect(0, 0, width2, height2);
var grd1 = ctx2.createLinearGradient(0, 0, 0, height1);
grd1.addColorStop(0, 'rgba(255, 0, 0, 1)');
grd1.addColorStop(0.17, 'rgba(255, 255, 0, 1)');
grd1.addColorStop(0.34, 'rgba(0, 255, 0, 1)');
grd1.addColorStop(0.51, 'rgba(0, 255, 255, 1)');
grd1.addColorStop(0.68, 'rgba(0, 0, 255, 1)');
grd1.addColorStop(0.85, 'rgba(255, 0, 255, 1)');
grd1.addColorStop(1, 'rgba(255, 0, 0, 1)');
ctx2.fillStyle = grd1;
ctx2.fill();

function click(e) {
  x = e.offsetX;
  y = e.offsetY;
  var imageData = ctx2.getImageData(x, y, 1, 1).data;
  rgbaColor = 'rgba(' + imageData[0] + ',' + imageData[1] + ',' + imageData[2] + ',1)';
  fillGradient();
}

function fillGradient() {
  ctx1.fillStyle = rgbaColor;
  ctx1.fillRect(0, 0, width1, height1);

  var grdWhite = ctx2.createLinearGradient(0, 0, width1, 0);
  grdWhite.addColorStop(0, 'rgba(255,255,255,1)');
  grdWhite.addColorStop(1, 'rgba(255,255,255,0)');
  ctx1.fillStyle = grdWhite;
  ctx1.fillRect(0, 0, width1, height1);

  var grdBlack = ctx2.createLinearGradient(0, 0, 0, height1);
  grdBlack.addColorStop(0, 'rgba(0,0,0,0)');
  grdBlack.addColorStop(1, 'rgba(0,0,0,1)');
  ctx1.fillStyle = grdBlack;
  ctx1.fillRect(0, 0, width1, height1);
}

function mousedown(e) {
  drag = true;
  changeColor(e);
}

function mousemove(e) {
  if (drag) {
    changeColor(e);
  }
}

function mouseup(e) {
  drag = false;
}

function changeColor(e) {
  x = e.offsetX;
  y = e.offsetY;
  var imageData = ctx1.getImageData(x, y, 1, 1).data;
  rgbaColor = 'rgba(' + imageData[0] + ',' + imageData[1] + ',' + imageData[2] + ',1)';
  colorLabel.style.backgroundColor = rgbaColor;
}

colorStrip.addEventListener("click", click, false);

colorBlock.addEventListener("mousedown", mousedown, false);
colorBlock.addEventListener("mouseup", mouseup, false);
colorBlock.addEventListener("mousemove", mousemove, false);


</script>
