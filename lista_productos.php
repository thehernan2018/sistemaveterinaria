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
		
                 <!-- /. ROW  -->
                   <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Lista de Productos
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-dark table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Descripción</th>
                                            <th>Precio</th>
                                            <th>Stock</th>
                                            <th>Observación</th>
                                            <th>Abreviatura</th>
                                            <th>C.B</th>
                                            <th>I.C.B</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/controller/productocontroller.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/model/producto.php");

                                            $productocontrol = new productocontroller();
                                            $producto = new producto();
                                            $s=1;
                                               foreach($productocontrol->listar() as $producto){            
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php $i=$s++; echo $i; ?></td>
                                            <td><?php echo $producto->getdescripcion(); ?></td>
                                            <td><?php echo $producto->getPrecio(); ?></td>
                                           
                                           <?php 
                                             $stock=$producto->getstock();
                                                if($stock<=5){
                                                   
                                          echo '<td class="center" bgcolor="#F7C5C4">'.$stock=$producto->getstock().'</td>';
                                                } else {
                                                      echo '<td class="center">'.$stock=$producto->getstock().'</td>';
                                                }
                                            ?>
                                            
                                            <td class="center"><?php echo $producto->getObservacion() ?></td>
                                            <td class="center"><?php echo $producto->getidunidmed() ?></td>
                                            <td class="center"><?php  echo $producto->getCodigo(); ?></td>
                                            <td class="center">
                                                <img  src="barcode.php?text=<?php echo $producto->getCodigo(); ?>&size=50&orientation=horizontal&codetype=Code39&print=true&sizefactor=1" />
                       
             
                                            </td>
                                            <td>
                                                <button type="button" id="modiunida" name="modiunida" cod='<?php echo $producto->getId(); ?>' class="btn btn-primary modiunida" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
             
                                            </td>
                                        </tr>
                                    <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
  
                             
                 
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg tamano">
    <div class="modal-content">
    <?php include('modal/modiunidadmedida.php'); ?>
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
