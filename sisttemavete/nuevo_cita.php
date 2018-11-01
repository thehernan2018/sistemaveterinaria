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
                            Registrar Cita
                        </div>
                            <div class="panel-body">
                                 <form  method="post" name="guardacita" id="guardacita">
                                     <div id="resultados_ajaxnu"></div>
                                     <div class="row">
                                         
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <input type="hidden" id="txtid" name="txtid"  class="form-control">
                                            <input type="text" name="txtclie" id="txtclie" readonly placeholder="Cliente" required class="form-control">
                                            <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button> 
                                        
                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg tamano" >
                            <div class="modal-content">
                            
                                <!--inicio de tabla -->
                         <?php include ('modal/moduscarcliente.php');?>
                                
                                <!--fin -->
     
                        </div>
                         </div>
                        </div>
                                        
                                        
                                        
                                        
                                         <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="text" name="txtf" id="txtf" placeholder="Fecha" required class="form-control">
                                        </div>
                                
                                        <div class="form-group">
                                            <label>Nota</label>
                                            <input type="text" name="txtnota" id="txtnota" placeholder="Nota" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Asunto</label>
                                            <input type="text" name="txtas" id="txtas" placeholder="Asunto" required class="form-control">                                       </div>    
                                            
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
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <script src="js/mijs.js"></script> 
   
</body>
</html>
