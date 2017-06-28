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
      <div class="col-md-6 col-md-offset-3 titulo-perfil top-no">
        <p>
          Templates
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
         <p class="titulo-tm2">Datos generales</p>
      </div>
      <div class="col-md-10 col-md-offset-1 top-20">       
        <!-- /.box-header -->
        <div class="box-body">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <form>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formulario">
              <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 titulo-2-temp">
                <p>Nombre</p>
              </div>
                <input type="text" name="nombre" placeholder="Nombre del Template">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formulario">
              <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 titulo-2-temp ">
                <p>Categoria</p>
              </div>
                <select name="categorias" multiple="">
                  <option>clásica</option>
                  <option>Moderna</option>
                  <option>Rústica</option>
                  <option>Romantica</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formulario padding-no-temp">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
              <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 titulo-2-temp">
                <p>Agregar frente</p>
              </div>
                <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12  div-drop">
                <p class="text-alternativo">Arrastra tu Archivo Aqui</p>
                <!-- Upload image -->
                  <!-- <section id="sectionDragAndDrop" class="size-section-drop">
                      <div class="drop" id="drop">
                          <p>Arrastra tu arquivo o has click aqui.</p>
                      </div>
                      <input class="file-upload hidden" id="fileUpload" type="file">
                  </section> -->

                  <!-- Resize image -->
                  <!-- <section class="hidden" id="sectionResize">
                      <div class="image-resize size-thumb" id="imageResize"></div>
                    <button class="btn" id="crop"><i class="fa fa-trash" aria-hidden="true"></i> Quitar</button>
                  </section> -->

                  <!-- Insert thumbnail -->
                 <!--  <section class="hidden" id="sectionThumbnail">
                      <div class="thumbnail" id="thumbnail"></div>
                  </section> -->
                  </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 titulo-2-temp">
                <p>Agregar vuelta</p>
              </div>
                <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12  div-drop">
                <p class="text-alternativo">Arrastra tu Archivo Aqui</p>
                <!-- Upload image -->
                 <!--  <section id="sectionDragAndDrop2" class="size-section-drop">
                      <div class="drop" id="drop2 ">
                          <p>Arrastra tu arquivo o has click aqui.</p>
                      </div>
                      <input class="file-upload hidden" id="fileUploados" type="file">
                  </section> -->

                  <!-- Resize image -->
                  <!-- <section class="hidden" id="sectionResizedos">
                      <div class="image-resize size-thumb" id="imageResizedos"></div>
                    <button class="btn" id="crop2 "><i class="fa fa-trash" aria-hidden="true"></i> Quitar</button>
                  </section> -->

                  <!-- Insert thumbnail -->
                 <!--  <section class="hidden" id="sectionThumbnail2">
                      <div class="thumbnail" id="thumbnail2"></div>
                  </section> -->
                  </div>
              </div>

            </div>
             
              <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 centrado margin-pie">
                <a href="template-3.php" class="boton-config">
                  <p> <i class="fa fa-share" aria-hidden="true"></i> Continuar</p>
                </a>
              </div>
            
            
            </form>              
          </div>
        </div>
        <!-- /.box-body -->       
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="control-sidebar-bg"></div>
</div>

<?php
  get_footer();
?>

<script type="text/javascript">
//  $('#drop').on('click', function() {
//     $('#fileUpload').trigger('click');
// });

// $('#fileUpload').on('change', function(e) {
//     addImage(e.target);
// });

// $("#drop").on("dragover", function(e) {
//     e.preventDefault();
//     e.stopPropagation();
//     $(this).addClass('dragging');
// });

// $("#drop").on("dragleave", function(e) {
//     $(this).removeClass('dragging');
// });

// $("#drop").on("drop", function(e) {
//     e.preventDefault();
//     e.stopPropagation();
//     var data = e.dataTransfer || e.originalEvent.dataTransfer;
//     addImage(data);
// });

// function addImage(data) {
//     var file = data.files[0];
//     if (file.type.indexOf('image') === -1) {
//         alert('Sorry, the file you uploaded doesn\'t appear to be an image.');
//         return false;
//     }

//     var reader = new FileReader();
//     reader.onload = function(event) {
//         var img = new Image();
//         img.onload = function() {
//             if (img.width < 200 || img.height < 200) {
//                 alert('Sorry, the image you uploaded doesn\'t appear to be large enough.');
//                 return false;
//             }
//             cropImage(img);
//         }
//         img.src = event.target.result;
//     }
//     reader.readAsDataURL(file);
// }

// function cropImage(originalImage) {

//     $(originalImage).attr('id', 'fullImage');
//     $('#imageResize').html(originalImage);
//     $('#sectionDragAndDrop').addClass('hidden');
//     $('#sectionResize').removeClass('hidden');

//     var newImage = new imageCrop('#fullImage', 200, 200);

//     $('#crop').on('click', function() {
//         var results = newImage.crop();
//         $('#thumbnail').html(results.img);
//         $('#sectionResize').addClass('hidden');
//         $('#sectionThumbnail').removeClass('hidden');
//     });

// }
// // 2
// $('#drop2').on('click', function() {
//     $('#fileUploados').trigger('click');
// });

// $('#fileUploados').on('change', function(e) {
//     addImage(e.target);
// });

// $("#drop2").on("dragover", function(e) {
//     e.preventDefault();
//     e.stopPropagation();
//     $(this).addClass('dragging');
// });

// $("#drop2").on("dragleave", function(e) {
//     $(this).removeClass('dragging');
// });

// $("#drop2").on("drop", function(e) {
//     e.preventDefault();
//     e.stopPropagation();
//     var data1 = e.dataTransfer || e.originalEvent.dataTransfer;
//     addImage(data1);
// });

// function addImage(data) {
//     var file1 = data1.files[0];
//     if (file1.type.indexOf('image') === -1) {
//         alert('Sorry, the file you uploaded doesn\'t appear to be an image.');
//         return false;
//     }

//     var reader1 = new FileReader();
//     reader.onload = function(event) {
//         var img1 = new Image();
//         img.onload = function() {
//             if (img1.width < 200 || img1.height < 200) {
//                 alert('Sorry, the image you uploaded doesn\'t appear to be large enough.');
//                 return false;
//             }
//             cropImage(img1);
//         }
//         img1.src = event.target.result;
//     }
//     reader1.readAsDataURL(file1);
// }

// function cropImage(originalImage) {

//     $(originalImage).attr('id', 'fullImage1');
//     $('#imageResizedos').html(originalImage);
//     $('#sectionDragAndDrop2').addClass('hidden');
//     $('#sectionResizedos').removeClass('hidden');

//     var newImage1 = new imageCrop('#fullImage1', 200, 200);

//     $('#crop2').on('click', function() {
//         var results1 = newImage1.crop();
//         $('#thumbnail2').html(results1.img1);
//         $('#sectionResizedos').addClass('hidden');
//         $('#sectionThumbnail2').removeClass('hidden');
//     });

// }


</script>