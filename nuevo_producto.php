<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:::SISPASANLU:::</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
 <?php include('nav.php'); ?>  
        <!--/. NAV TOP  -->
          <?php include('menu.php'); ?> 
        <!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Nuevo Producto
                        </h1>
                        
                    </div>
                    </div> 
                 <!-- /. ROW  -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registrar Productos
                        </div>
                            <div class="panel-body">
                                 <form id="guardaralumno" name="guardaralumno" method="post" action="ajax/insertproducto.php">
                                        <div id="resultados_ajaxnu"></div>
                                     <div class="row">
                                          
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Codigo</label>
                                            <?php 
                                           
			                                 require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria-master/controller/productocontroller.php");
                                             require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria-master/model/producto.php");
                                           
                                              /*  $sql="CALL codproductos()";
                                                $eje=mysqli_query($conexion,$sql);
                                                $fi=mysqli_fetch_assoc($eje);*/
                                            $productocontrol = new productocontroller();
                                            $producto = new producto();
                                            
                                            // productodao retorna un array de todos los productos de la base de datos segun tu procedure
                                            // eso es para lllenar una tabla por ejemplo 
                                            // producto1
                                            //producto2 -> codigo,descripcion ,precio
                                            
                                            foreach($productocontrol->listar() as $producto){
                                                
                                                echo $producto->getcodigo();
                                                echo $producto->getdescripcion();
                                                echo $producto->getprecio();
                                                
                                            }
                                            
                                            ///// insert 
                                            
                                            ?>
                                    <input type="text" name="codigo" id="codigo" placeholder="Codigo" required class="form-control" >
                                        </div>
                                         <div class="form-group">
                                            <label>Descripcion</label>
                                            <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" required class="form-control">
                                        </div>
                                    
                                             <div class="form-group">
                                            <label>precio</label>
                                            <div class="input-group">
                                            <span class="input-group-addon">S/.</span>
                                            <input type="text" class="form-control"  name="precio" id="precio" aria-label="Amount (to the nearest dollar)">
                                            <span class="input-group-addon">.00</span>
</div>
                                        </div>
                                               <div class="form-group">
                                            <label>Stock</label>
                                            <input type="number" min="1" name="stock" id="stock" placeholder="Stock" required class="form-control">
                                        </div> 
                                         </div>
                                        <div class="col-lg-6">
                                         
                                    
                                          <div class="form-group">
                                            <label>observacion</label>
                                            <textarea name="observa" id="observa" required  class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Unidad de Medida</label>
                                           <select name="idunidmed" id="idunidmed" required class="form-control">
                                            <option value="1">cnn</option>
                                              
                                            </select>
                                        </div>      
                                    
                                            <input type="submit" name="btngrabar" id="btngrabar" value="Grabar" class="btn btn-primary">
                                     </div>
                                         
                                      </div>
                                     
                                  
                                 </form>
                            </div>
                        </div>
                     </div>
                </div>
                
					<?php include('footer.php'); ?>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable({
                    'language': español
                });
                
            });
           
    </script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
   
   
</body>
</html>
