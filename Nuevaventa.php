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
			
                 <!-- /. ROW  -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Realizar Venta
                        </div>
                            <div class="panel-body">
                                 <form id="guardarventas" name="guardarventas" method="post">
                                        <div id="resultados_ajaxnu"></div>
                                     <div class="row">
                                          <div class="col-lg-12">
                                               <div class="form-group">
                                            <label>Buscar Cliente</label>
                                            <input type="hidden" id="txtid" name="txtid"  class="form-control">
                                            <input type="text" name="txtclien" id="txtclien" readonly placeholder="Datos Cliente" required class="form-control input-sm ">
                                                <br>
                                         <button class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">
                                             <span class="glyphicon glyphicon-user" aria-hidden="true"> Buscar Cliente</span>
                                         </button>    
                                   <button class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg2">
                                       <span class="glyphicon glyphicon-search" aria-hidden="true"> Agregar Productos <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></span>
                                   </button>   
                                        <span class="btn btn-danger" id="btnVaciarVentas"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Vaciar Carrito</span>
                                       <button type="button" class="btn btn-info recarg"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>Nueva Venta</button>
                                        <input type="submit" name="btngrabar" id="btngrabar" value="Guardar Venta" class="btn btn-primary ">
                     <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg tamano">
                            <div class="modal-content">
                            <?php include ('modal/modalbuscarclienteparaventas.php'); ?>
                        </div>
                         </div>
                        </div>
                                   
                         <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg tamano">
                            <div class="modal-content">
                            <?php include ('modal/modbuscarproductosaventas.php'); ?>
                        </div>
                         </div>
                        </div>
                                               
                                        </div>
                                         </div>
                                         <div class="col-lg-3">
                                       <div class="form-group">
                                            <label>Tipo Movimiento</label>
                                            <select class="form-control input-sm" id="tipomovi" name="tipomovi" required>
				<option value="">Selecciona</option>
				<?php
                               
				$sql="SELECT * FROM movimiento";
                                echo $sql;
				$result=mysqli_query($conexion,$sql);

				while ($producto=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $producto[0] ?>"><?php echo $producto[1] ?></option>
				<?php endwhile; ?>
			</select>
                                        </div>
                                  </div>  
                                           <div class="col-lg-3">
                                       <div class="form-group">
                                            <label>Tipo Comprobante</label>
                                             
                                               <div class="form-group">
                                                  <label class="radio-inline">
                                                      <input type="radio" id="pagatodopension" name="optradio" checked="true" value="1">Boleta </label>      
                                                    <label class="radio-inline">
                                                         <input type="radio" id="abonopension" name="optradio" value="2">Factura                 
                                                    </label>
                                                                        
                                                    
                                                                          <div id="factura">
                                                                               <ul>
                                                               
                                                                               </ul>
                                                                            </div>
                                                                                                                                      
                                                                    </div>  
                                          
                                            
                                        </div>
                                        </div>
                                            <div class="col-lg-12">
                                            <div id="tablaVentasTempLoad"></div>
                                           
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
                
                $('.recarg').click(function(){
                    location.reload(true)
                } );
                
                $('#btngrabar').click(function(){
                      if ($("#txttot").val()=="" ) {
                    alertify.error("Falta que Agrege Productos al Carrito.!");
                    return;
                        }
                     if ($("#txtid").val()=="" ) {
                    alertify.error("Primero Seleccione el cliente y luego llenar el Carrito de Compras.!");
                    return;
                        }
                  
                   
		   if ($("#tipomovi").val()=="" ) {
                    alertify.error("Falta que Seleccione el tipo Movimiento.!");
                    return;
                        }
	});
            });
           
    </script>
      <!-- Custom Js -->
        <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
     <script src="js/mijs.js"></script> 

</body>
</html>

