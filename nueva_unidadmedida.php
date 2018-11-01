<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:::SISVETERINARIA:::</title>
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
                            Registro de Medida
                        </h1>
                        
                    </div>
                    </div> 
                 <!-- /. ROW  -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registrar Unidad de Medida
                        </div>
                            <div class="panel-body">
                                 <form id="guarunidamedida" name="guarunidamedida" method="post" >
                                        <div id="resultados_ajaxnu"></div>
                                     <div class="row">
                                          
                                        <div class="col-lg-6">
                                       
                                             <?php 
                                             
                                           
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/controller/unidadmedidacontroller.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/model/unidadmedida.php");
                                           
                                        
                                         /*   $unidadmedidacontroller = new unimeditocontroller();
                                            $unidadmedida = new unidadmedida();                                        
                                            foreach($unidadmedidacontroller->listar() as $unidadmedida){                                              
                                            echo $unidadmedida->getId();
                                                
                                            }
                                            */
                                       
                                            
                                            ?>

                                         <div class="form-group">
                                            <label>Descripcion</label>
                                            
                                            <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" required class="form-control">
                                        </div>
                                    
                                            
                                               <div class="form-group">
                                            <label>Abreviatura</label>
                                            <input type="text" name="txtabreviatura" id="txtabreviatura" placeholder="Abreviatura" required class="form-control">
                                        </div> 
                                         </div>
                                        <div class="col-lg-6">
                                         
                                      
                                    
                                            <input type="submit" name="btngrabar" id="btngrabar" value="Grabar" class="btn btn-primary">
                                                <br>
                                               
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
   <script src="js/mijs.js"></script>

</body>
</html>
