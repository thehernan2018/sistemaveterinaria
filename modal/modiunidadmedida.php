   <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Modificar  Producto
                        </div>
                            <div class="panel-body">
                                 <form id="modicaunidadmedida" name="modicaunidadmedida" method="post">
                                        <div id="resultados_ajaxnu"></div>
                                     <div class="row">
                                       
                                        <div class="col-lg-6">
                                         <div class="form-group">
                                        
                                            <input type="hidden" name="txtid" id="txtid" required class="form-control">
                                        </div>
                                            
                                        <div class="form-group">
                                            <label> Codigo Barras</label>
                                            <input type="text" name="txtco" id="txtco"  readonly placeholder="CB" required class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" name="txtdes" id="txtdes" placeholder="Descripción" required class="form-control">
                                        </div>
                                    
                                             <div class="form-group">
                                            <label>Precio</label>
                                            <input type="text" name="txtpre" id="txtpre" placeholder="Precio" required class="form-control">
                                        </div>
                                               <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="txtsto" id="txtsto" placeholder="Stock" required class="form-control">
                                        </div> 
                                         </div>
                                        <div class="col-lg-6">
                                         
                                    
                                        <div class="form-group">
                                      
                                             <label>Activo</label>
                                           
                                        <div class="radio">
                                               <label>
                                                   <input type="radio" name="txtac" id="txtac" value="0" checked="true" >
                                                <span class="label label-success">Activo</span></label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="txtac" id="txtac" value="1">
                                                <span class="label label-danger">Inactivo</span></label>
                                        </div>
                                        </div>  
                                           <script>
                                            /*  var ac =  $("#txtac").val();
                                              alert(ac);*/
                                            </script> 
                                          <div class="form-group">
                                            <label>Observación</label>
                                            <textarea name="txtob" id="txtob" required  class="form-control"></textarea>
                                        </div>
                                     <!--   <div class="form-group">
                                            <label>Unidad Medida</label>
                                           <input type="text" name="txtunime" id="txtunime" required class="form-control">
                                        </div>     --> 
                                    
                                            <input type="submit" name="btngrabar" id="btngrabar" value="Grabar" class="btn btn-primary">
                                     </div>
                                         
                                      </div>
                             
                                 </form>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    
                     </div>
                </div>
                