<style>
        #img1 {
        padding: 5px;
        max-height: 200px;
        border: 1px solid #rgba(200, 200, 200, 0.7);
        box-shadow: rgba(0, 0, 0, 0.4) 0 0 20px;
    }
    
</style>  
<div class="panel-body">
             <div class="panel-heading">
                            Registrar Cliente
                        </div>
            <div class="panel-body">
        <form  method="post" name="modimascota" id="modimascota" enctype="multipart/form-data">
                                     <div id="resultados_ajax"></div>
                                     <div class="row">
                                         
                                        <div class="col-lg-6">
                                            
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="hidden" name="txtid" id="txtid" >
                                            <input type="text" name="txtnom" id="txtnom" placeholder="Nombre" required class="form-control  input-sm">
                                        </div>
                                        <div class="form-group">
                                            <label>Especie</label>
                                            <input  type="text" name="txtes" id="txtes"  required  class="form-control  input-sm">
                                           
                                        </div>
                                
                                        <div class="form-group">
                                            <label>Raza</label>
                                            <input type="text" name="txtra" id="txtra" required  class="form-control  input-sm">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            <select name="txtse" id="txtse" required class="form-control  input-sm">
                                                <option value="">Seleccione</option>
                                                <option value="Macho">Macho</option>
                                                <option value="Hembra">Hembra</option>
                                            </select>
                                        </div>    
                                          <div class="form-group">
                                            <label>Pelaje</label>
                                            <input type="text" name="txtpe" id="txtpe" placeholder="Pelaje"  class="form-control  input-sm">
                                        </div>
                                            
                                     </div>
                                         
                                         <div class="col-lg-6">
                                      
                                         <div class="form-group">
                                            <label>F-N</label>
                                            <input type="date" name="txtfn" id="txtfn"   class="form-control  input-sm" required>
                                        </div>
                                             <div class="form-group">
                                            <label>Fallecido</label>
                                            <input type="text" name="txtfa" id="txtfa"   class="form-control  input-sm" >
                                        </div>
                                             <div class="form-group">
                                            <label>Extraviado</label>
                                            <input type="text" name="txtex" id="txtex" placeholder="Estraviado"   class="form-control  input-sm" >
                                        </div>
                                  <!-- <div class="row">
                                         <div class="col-xs-6 col-md-3">
                                            <a href="#" class="thumbnail">
                                                <input type="text" id="txtfoto" name="txtfoto" >
                                                <img   src="data:image/png;base64, " alt="...">
                                            </a>
                                         </div>
                                      </div>-->
                                   
                                         
                                        <div class="form-group">
                                            <label>Foto</label>
                                            
                                            <input  type="file" name="txtfoto" id="txtfoto"   value="none" accept="image/*"  class="form-control  input-sm">
                                      <img id="img1">
                                      
                                        </div>
                                        <div class="form-group">
                                            <label>Codigo DVI</label>
                                            <input type="text" name="txtco" id="txtco" placeholder="DVI"  class="form-control  input-sm">
                                        </div>    
                                       
                                            <input type="submit" name="btngrabar" id="btngrabar" value="Grabar" class="btn btn-primary">
                                              
                                         </div>
                                         
                                      </div>
                                     
                                  
                                 </form>
                  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
                </div>
        </div>
            <script>
         function init() {
  var inputFile = document.getElementById('txtfoto');
  inputFile.addEventListener('change', mostrarImagen, false);
}

function mostrarImagen(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('img1');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}

window.addEventListener('load', init, false);

    </script>