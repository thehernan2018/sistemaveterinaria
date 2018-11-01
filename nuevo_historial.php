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
   <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
</head>
<body>
    <style>
        .tamano{
            width: 90% !important;
        }
    </style>
    <div id="wrapper">
 <?php include('nav.php'); ?>  
        <!--/. NAV TOP  -->
          <?php include('menu.php'); ?> 
        <!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
			<!-- <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Registrar Nuevo Cliente
                        </h1>
                        
                    </div>
                    </div> -->
                 <!-- /. ROW  -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registrar Historial
                        </div>
                            <div class="panel-body">
                                 <form  method="post" name="guardahistorial" id="guardahistorial">
                                     <div id="resultados_ajaxnu"></div>
                                     <div class="row">
                                         
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Mascota</label>
                                            <input type="hidden" id="txtid" name="txtid"  class="form-control">
                                            <input type="text" name="txtmasc" id="txtmasc" readonly placeholder="Seleccione mascota" required class="form-control">
                                            <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button> 
                                        
                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg tamano" >
                            <div class="modal-content">
                            
                                <!--inicio de tabla -->
                         <?php include ('modal/moduscarmascota.php');?>
                                
                                <!--fin -->
     
                        </div>
                         </div>
                        </div>
                                        
                                        
                                        
                                        
                                         <div class="form-group">
                                            <label>Registro</label>
                                            <input type="text" name="txtr" id="txtr" placeholder="Registro" required class="form-control">
                                        </div>
                                
                                        <div class="form-group">
                                            <label>Medicamento</label>
                                            <input type="text" name="txtm" id="txtm" placeholder="Medicamento" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Atendido</label>
                                            <input type="text" name="txtat" id="txtat" required class="form-control  input-sm">
                                                
                                        </div>    
                                            
                                     </div>
                                         
                                         <div class="col-lg-6">
                                      
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
              
                $('.datatable').dataTable({
                    'language': español
                });
 
            });
           
    </script>
      <!-- Custom Js -->
        <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
     <script src="js/mijs.js"></script> 
       <script src="js/VentanaCentrada.js"></script>
</body>
</html>
