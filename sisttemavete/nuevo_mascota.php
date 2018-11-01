<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:::SISVETERINARIA:::</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="css/upload.css" rel="stylesheet"/>
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
			
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registrar Mascota
                        </div>
                            <div class="panel-body">
                                 <form  method="post" name="guardarmascota" id="guardarmascota" enctype="multipart/form-data">
                                     <div id="resultados_ajax"></div>
                                     <div class="row">
                                         <div class="col-lg-12">
                   <div class="col-lg-12">
                                               <div class="form-group">
                                            <label>Dueño</label>
                                            <input type="hidden" id="txtid" name="txtid"  class="form-control">
                                            <input type="text" name="txtclie" id="txtclie" readonly placeholder="Datos del dueño" required class="form-control  input-sm">
                                                  
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
                                               
                                        </div>
                                         </div>
                     </div>
                                        <div class="col-lg-6">
                                            
                                        <div class="form-group">
                                            <label>Nombre</label>
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
                                            <label>Foto</label>
                                            <input  type="file" name="txtfoto" id="txtfoto"   class="form-control  input-sm">
                                        </div>
                                        <div class="form-group">
                                            <label>Codigo DVI</label>
                                            <input type="text" name="txtco" id="txtco" placeholder="DVI"  class="form-control  input-sm">
                                        </div>    
                                       
                                            <input type="submit" name="btngrabar" id="btngrabar" value="Grabar" class="btn btn-primary">
                                                <input type="reset" name="reset" id="reset" value="Nuevo" class="btn btn-success">
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
                //$('#dataTables-example').dataTable({
                $('.datatable').dataTable({
                    'language': español
                });
                
               
	});
         
           
    </script>
      <!-- Custom Js -->
        <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
     <script src="js/mijs.js"></script> 
   
    
</body>
</html>
