<?php
  require("functions.php");
  //get_header();
  get_headerPrincipal();

  get_aside();

?>
<div class="content-wrapper">
  <section>
    <div class="container-fluid">
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p>editor web</p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
        <div class="box-header ">
          <span class="box-title"></span> 
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-5 linea-ed "></div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 titulo-editor">
            <p>INICIO</p>
          </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-5 linea-ed "></div>
          <!-- /.box-header -->
        <div class="box-body no-padding">
          <form>
            <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 offset-4 centrado separacion-btnfile">
              <input type="file" name="file-1" id="file-1" class="inputfile" data-multiple-caption="{count} archivos seleccionados" multiple />
              <label for="file-1">                
                <span class="iborrainputfile"><i class="fa fa-upload" aria-hidden="true"></i> SUBIR IMAGEN</span>
              </label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  aumento-2">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 webpadding-no">                
                   
                <input type="file" name="file-2" id="file-2" class="size-img inputfile " data-multiple-caption="{count} archivos seleccionados" multiple />
                  <label for="file-1" class="label-edit">                
                    <span class="iborrainputfile"><i class="fa fa-picture-o icono-edit" aria-hidden="true"></i><br>VISTA PREVIA</span>
                  </label>
                  
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 centrado text-edit-1 sep-media-edit webpadding-no margin-web1 marginweb2">
                <p>TEXTO DESCRIPTIVO</p>
                  <input type="text" name="descripcion">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  margin-web marginweb3"><!-- sep-edicion aumento-2 -->
              <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-lg-6 col-lg-offset-2  centrado text-edit-1 webpadding-no">
                <p><span>URL</span> DE VIDEO</p>
                  <input type="text" name="url-video" class="marco-azul">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 webpadding-no">
                
                   
                      <input type="file" name="file-3" id="file-3" class="size-img inputfile " data-multiple-caption="{count} archivos seleccionados" multiple />
                        <label for="file-1" class="label-edit">                
                          <span class="iborrainputfile"><i class="fa fa-play-circle-o icono-edit" aria-hidden="true"></i><br>VISTA PREVIA</span>
                        </label>
                  
               
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 centrado text-edit-1 sep-media-edit webpadding-no marginweb2">
                <p>TEXTO DESCRIPTIVO</p>
                  <input type="text" name="descripcion2">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-4 sep-edicion aumento-2 centrado">
              <button type="submit" class="btn-guardar">Guardar</button>
            </div> 
          </form>         
        </div>  
          <!-- seccion servicios -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aumento3 margin-web">
            <div class="col-xs-2 col-sm-4 col-md-4 col-lg-5 linea-ed "></div>
              <div class="col-xs-8 col-sm-4 col-md-4 col-lg-2 titulo-editor centrado">
                <p>SERVICIOS</p>
              </div>
            <div class="col-xs-2 col-sm-4 col-md-4 col-lg-5 linea-ed "></div>
          </div>

<!-- <div class="wrap">
   <div class="thumb"> <img id="img" src="images/recursos/img-fondo.jpg"/></div>
   <form action="">
    <label for="upload"><i class="fa fa-upload" aria-hidden="true"></i> SUBIR IMAGEN
      <input type='file' id="upload"></label>
  </form>  
</div> -->
          <form>
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aumento3 margin-media">
               
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 webpadding-no webpadding-no4">

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 webpadding-no">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado webpadding-no separacion-btnfile media-servicios">
                    
                    <!-- <div class="wrap">
                       <div class="thumb"> <img id="img" src="images/recursos/img-fondo.jpg"/></div>
                       <form action="">
                        <label for="upload"><i class="fa fa-upload" aria-hidden="true"></i> SUBIR IMAGEN
                          <input type='file' id="upload"></label>
                      </form>  
                    </div> -->
                            
                            <input type="file" name="file-2" id="file-2" class="size-img inputfile " data-multiple-caption="{count} archivos seleccionados" multiple />
                              <label for="file-1" class="label-edit label-edit2">                
                                <span class="iborrainputfile"><i class="fa fa-picture-o icono-edit icono-edit2" aria-hidden="true"></i><br>VISTA PREVIA</span>
                              
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado webpadding-no separacion-btnfile">
                     <input type="file" name="servicos4" id="file-0c" class="inputfile" data-multiple-caption="{count} archivos seleccionados" multiple />
                      <label for="file-1">                
                        <span class="iborrainputfile"><i class="fa fa-upload" aria-hidden="true"></i> SUBIR IMAGEN</span>
                      </label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado text-edit-1 webpadding-no ">
                      <p>TITULO</p>
                        <input type="text" name="servicio-texto1">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado text-edit-1  webpadding-no aumento-2">
                      <p>TEXTO DESCRIPTIVO</p>
                      <textarea name="servicio-texto2" class="text-area"></textarea>
                    </div>                   
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sep-media-edit webpadding-no margin-web">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado webpadding-no separacion-btnfile media-servicios">
                            
                            <input type="file" name="file-2" id="file-2" class="size-img inputfile " data-multiple-caption="{count} archivos seleccionados" multiple />
                              <label for="file-1" class="label-edit label-edit2">                
                                <span class="iborrainputfile"><i class="fa fa-picture-o icono-edit icono-edit2" aria-hidden="true"></i><br>VISTA PREVIA</span>
                              
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado webpadding-no separacion-btnfile">
                     <input type="file" name="servicos4" id="file-0c" class="inputfile" data-multiple-caption="{count} archivos seleccionados" multiple />
                      <label for="file-1">                
                        <span class="iborrainputfile"><i class="fa fa-upload" aria-hidden="true"></i> SUBIR IMAGEN</span>
                      </label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado text-edit-1 webpadding-no">
                      <p>TITULO</p>
                        <input type="text" name="servicio-texto1">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado text-edit-1 webpadding-no aumento-2">
                      <p>TEXTO DESCRIPTIVO</p>
                      <textarea name="servicio-texto2" class="text-area"></textarea>
                    </div>                   
                  </div>                
               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 margin-media webpadding-no margin-web webpadding-no4">

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 webpadding-no">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado webpadding-no separacion-btnfile ">                            
                            <input type="file" name="file-2" id="file-2" class="size-img inputfile " data-multiple-caption="{count} archivos seleccionados" multiple />
                              <label for="file-1" class="label-edit label-edit2">                
                                <span class="iborrainputfile"><i class="fa fa-picture-o icono-edit icono-edit2" aria-hidden="true"></i><br>VISTA PREVIA</span>
                              
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado webpadding-no separacion-btnfile media-servicios">
                     <input type="file" name="servicos4" id="file-0c" class="inputfile" data-multiple-caption="{count} archivos seleccionados" multiple />
                      <label for="file-1">                
                        <span class="iborrainputfile"><i class="fa fa-upload" aria-hidden="true"></i> SUBIR IMAGEN</span>
                      </label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado text-edit-1 webpadding-no">
                      <p>TITULO</p>
                        <input type="text" name="servicio-texto1">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado text-edit-1 webpadding-no aumento-2">
                      <p>TEXTO DESCRIPTIVO</p>
                      <textarea name="servicio-texto2" class="text-area"></textarea>
                    </div>                   
                  </div> 

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 webpadding-no margin-web">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado webpadding-no separacion-btnfile">                            
                            <input type="file" name="file-2" id="file-2" class="size-img inputfile " data-multiple-caption="{count} archivos seleccionados" multiple />
                              <label for="file-1" class="label-edit label-edit2">                
                                <span class="iborrainputfile"><i class="fa fa-picture-o icono-edit icono-edit2" aria-hidden="true"></i><br>VISTA PREVIA</span>                              
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado webpadding-no separacion-btnfile media-servicios">
                     <input type="file" name="servicos4" id="file-0c" class="inputfile" data-multiple-caption="{count} archivos seleccionados" multiple />
                      <label for="file-1">                
                        <span class="iborrainputfile"><i class="fa fa-upload" aria-hidden="true"></i> SUBIR IMAGEN</span>
                      </label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado text-edit-1 webpadding-no">
                      <p>TITULO</p>
                        <input type="text" name="servicio-texto1">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrado text-edit-1 webpadding-no aumento-2">
                      <p>TEXTO DESCRIPTIVO</p>
                      <textarea name="servicio-texto2" class="text-area"></textarea>
                    </div>                   
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-4 sep-edicion aumento-2 centrado">
              <button type="submit" class="btn-guardar">Guardar</button>
            </div>
             </div>
          </form>

          <!-- invitaciones -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aumento3 margin-web">
            <div class="col-xs-3 col-sm-4 col-md-4 col-lg-5 linea-ed "></div>
              <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 titulo-editor centrado">
                <p>INVITACIONES</p>
              </div>
            <div class="col-xs-3 col-sm-4 col-md-4 col-lg-5 linea-ed "></div>
          </div>


           <form>
            <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 offset-4 centrado separacion-btnfile">
              <input type="file" name="file-1" id="file-1" class="inputfile" data-multiple-caption="{count} archivos seleccionados" multiple />
              <label for="file-1">                
                <span class="iborrainputfile"><i class="fa fa-upload" aria-hidden="true"></i> SUBIR IMAGEN</span>
              </label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginweb3">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 webpadding-no">
                
                      <input type="file" name="file-2" id="file-2" class="size-img inputfile " data-multiple-caption="{count} archivos seleccionados" multiple />
                        <label for="file-1" class="label-edit">                
                          <span class="iborrainputfile"><i class="fa fa-picture-o icono-edit" aria-hidden="true"></i><br>VISTA PREVIA</span>
                        </label>
                  
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 centrado text-edit-1 webpadding-no margin-web1 marginweb2">
                <p>TEXTO DESCRIPTIVO</p>
                  <input type="text" name="descripcion">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  webpadding-no margin-web marginweb3">
              <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-lg-6 col-lg-offset-2  centrado text-edit-1">
                <p><span>URL</span> DE VIDEO</p>
                  <input type="text" name="url-video" class="marco-azul">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginweb3">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 webpadding-no">
                
                      <input type="file" name="file-3" id="file-3" class="size-img inputfile " data-multiple-caption="{count} archivos seleccionados" multiple />
                        <label for="file-1" class="label-edit">                
                          <span class="iborrainputfile"><i class="fa fa-play-circle-o icono-edit" aria-hidden="true"></i><br>VISTA PREVIA</span>
                        </label>
                  
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 centrado text-edit-1 webpadding-no margin-web1 marginweb2">
                <p>TEXTO DESCRIPTIVO</p>
                  <input type="text" name="descripcion2">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-4 webpadding-no aumento-2 centrado">
              <button type="submit" class="btn-guardar">Guardar</button>
            </div> 
          </form>

          <!-- PROVEEDORES -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aumento3 margin-web">
            <div class="col-xs-3 col-sm-4 col-md-4 col-lg-5 linea-ed "></div>
              <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 titulo-editor centrado">
                <p>PROVEEDORES</p>
              </div>
            <div class="col-xs-3 col-sm-4 col-md-4 col-lg-5 linea-ed "></div>
          </div>

          <form>


            <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 offset-4 centrado separacion-btnfile">
              <input type="file" name="file-1" id="file-1" class="inputfile" data-multiple-caption="{count} archivos seleccionados" multiple />
              <label for="file-1">                
                <span class="iborrainputfile"><i class="fa fa-upload" aria-hidden="true"></i> SUBIR IMAGEN</span>
              </label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginweb3">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 webpadding-no">
                
                      <input type="file" name="file-2" id="file-2" class="size-img inputfile " data-multiple-caption="{count} archivos seleccionados" multiple />
                        <label for="file-1" class="label-edit">                
                          <span class="iborrainputfile"><i class="fa fa-picture-o icono-edit" aria-hidden="true"></i><br>VISTA PREVIA</span>
                        </label>
                  
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 centrado text-edit-1 webpadding-no margin-web1 marginweb2">
                <p>TEXTO DESCRIPTIVO</p>
                  <input type="text" name="descripcion">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginweb3 margin-web">
              <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-lg-6 col-lg-offset-2  webpadding-no centrado text-edit-1">
                <p><span>URL</span> DE VIDEO</p>
                  <input type="text" name="url-video" class="marco-azul">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginweb3">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 webpadding-no">
                
                      <input type="file" name="file-3" id="file-3" class="size-img inputfile " data-multiple-caption="{count} archivos seleccionados" multiple />
                        <label for="file-1" class="label-edit">                
                          <span class="iborrainputfile"><i class="fa fa-play-circle-o icono-edit" aria-hidden="true"></i><br>VISTA PREVIA</span>
                        </label>
                  
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 centrado text-edit-1 webpadding-no margin-web1">
                <p>TEXTO DESCRIPTIVO</p>
                  <input type="text" name="descripcion2">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-4 webpadding-no aumento-2 centrado margin-web">
              <a data-toggle="modal" data-target="#enviarInvitacion" data-whatever="@mdo">
                <button type="submit" class="btn btn-default btn-redes-sociales">Añadir Redes</button>
              </a>
            </div> 

             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 linea-ed  aumento4"></div>
             <!-- botones -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aumento4">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 derecha-btn bton-centro-edit">
                  <button type="submit" class="btn-guardar editor-web-btons">Publicar</button>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 bton-centro-edit">
                 <button type="submit" class="btn btn-default btn-redes-sociales btn-gardar-edit editor-web-btons">Guardar</button>
                </div>                
              </div>
          </form>

<!--MODAL-->
      <div class="modal fade" id="enviarInvitacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog content-popoup size-modal" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="close-redes"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
              </button>
            </div>
            <div class="modal-body col-xs-12 col-sm-12 col-md-12" style="background:white;">
              <!--COLLAPSER-->
                <div class="col-md-12">
                  <p class="titulo-popoup">Añadir re<span>des</span> sociales</p>                  
                </div>
                  <!-- redes url -->
                   <form action="">
                  <div class=" col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-lg-12">
                   <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">                     
                    <!-- <ul>
                      <li> -->
                                            
                            <i class="fa fa-facebook redes-iconos" aria-hidden="true"></i>
                              <input type="text" name="face1" class="input-redes-s" placeholder="Escribe la URL de tu red social">
                            
                        <div class="check"></div>
                      <!-- </li>  
                      <li> -->
                        
                            <i class="fa fa-twitter redes-iconos" aria-hidden="true"></i>
                              <input type="text" name="face1" class="input-redes-s" placeholder="Escribe la URL de tu red social">
                           
                        <div class="check"></div>
                      <!-- </li>
                      <li> -->
                        
                            <i class="fa fa-instagram redes-iconos" aria-hidden="true"></i>
                              <input type="text" name="face1" class="input-redes-s" placeholder="Escribe la URL de tu red social">
                        
                        <div class="check"></div>
                     <!--  </li>
                      <li> -->
                        
                            <i class="fa fa-pinterest-p redes-iconos" aria-hidden="true"></i>
                              <input type="text" name="face1" class="input-redes-s" placeholder="Escribe la URL de tu red social">
                           
                        <div class="check"></div>
                     <!--  </li> -->
                     <!--  <li> -->
                        
                            <i class="fa fa-youtube redes-iconos" aria-hidden="true"></i>
                              <input type="text" name="face1" class="input-redes-s" placeholder="Escribe la URL de tu red social">
                          
                        <div class="check"></div>
                     <!--  </li> -->
                      
                        <!-- <input type="radio" id="f-option" name="">
                        <label for="f-option">
                            <i class="fa fa-snapchat-ghost redes-iconos" aria-hidden="true"></i>
                              <input type="text" name="face1" class="input-redes-s" placeholder="Escribe la URL de tu red social">
                        </label>    
                        <div class="check"></div> -->
                      
                    <!-- </ul> -->
                   </div>                                     
                  </div>
                  <!--  -->
                <div class="col-xs-12 col-md-8 col-md-offset-2 top-20">
                  <div class=" col-xs-6 col-sm-6 col-md-6" style="text-align:right">
                    <button type="submit" class="btn btn-default icon-menssage completo-100-redes"><i class="fa fa-check-square-o" aria-hidden="true"></i> Aceptar</button>
                  </div>
                  <div class=" col-xs-6 col-sm-6 col-md-6">
                    <button type="submit" class="btn btn-default icon-menssage completo-100-redes" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i> Cancelar</button>
                  </div>
                </div>
                 </form>
              <!--COLLAPSER-->
            </div>
          </div>
        </div>
      </div>
      <!--MODAL-->


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
  function preview(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) { $('#img').attr('src', e.target.result);  }
    reader.readAsDataURL(input.files[0]);     }   }

$("#upload").change(function(){
  $("#img").css({top: 0, left: 0});
    preview(this);
    $("#img").draggable({ containment: 'parent',scroll: false });
});

  
</script>