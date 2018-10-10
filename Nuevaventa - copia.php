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
                                         <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                             <span class="glyphicon glyphicon-user" aria-hidden="true"> Agregar Cliente</span>
                                         </button>    
                                   <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg2">
                                       <span class="glyphicon glyphicon-search" aria-hidden="true"> Agregar Productos</span>
                                   </button>    
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
                                         
                                         
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label>Productos</label>
                                            <select class="form-control input-sm" id="productoVenta" name="productoVenta" required>
				<option value="">Selecciona</option>
				<?php
                                 require_once ("config/db.php");
			         require_once ("config/conexion.php");
				$sql="SELECT id_producto,descripcion from producto";
                                echo $sql;
				$result=mysqli_query($conexion,$sql);

				while ($producto=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $producto[0] ?>"><?php echo $producto[1] ?></option>
				<?php endwhile; ?>
			</select>
                                        </div>
                                            
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
                                   
                                             <div class="form-group">
                                            <label>Precio</label>
                                             <div class="input-group">
                                                <span class="input-group-addon">S/.</span>
                                                <input type="text" name="txtpre" id="txtpre" readonly required placeholder="Precio"  class="form-control input-sm" aria-label="Amount (to the nearest dollar)">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                        </div>
                                              
                                         </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="txtsto" id="txtsto" readonly placeholder="Stock" required class="form-control input-sm">
                                        </div> 
                                             <div class="form-group">
                                            <label>Cantidad</label>
                                            <input type="number" name="txtcan" min="1"  value="1" id="txtcan" required class="form-control input-sm">
                                        </div>
                                    
                                        <span class="btn btn-primary" id="btnAgregaVenta">Agregar al Carrito</span>
                                        <span class="btn btn-danger" id="btnVaciarVentas">Vaciar Carrito</span>
                                   
                                     </div>
                                          <hr>
                                            <div class="col-lg-12">
                                            <div id="tablaVentasTempLoad"></div>
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
                //$('#dataTables-example').dataTable({
                $('.datatable').dataTable({
                    'language': español
                });
                $('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
                
                
		$('#btnAgregaVenta').click(function(){
                    if ($("#txtclien").val()=="") {
                        alertify.error("Seleccione Cliente Primero");
                  return;
                     
                   }
                    if ($("#productoVenta").val()=="") {
                        alertify.error("Seleccione Productos a la Venta");
                  return;
                     
                   }
			
			datos=$('#guardarventas').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"classes/agregaProductoTemp.php",
				success:function(r){
					$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
				}
			});
		});
                
                $('#btnVaciarVentas').click(function(){

		$.ajax({
			url:"ventas/vaciarTemp.php",
			success:function(r){
				$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
                                alertify.warning("Carrito Vacio");
			}
		});
	});
            });
           
    </script>
    <script>
    	function quitarP(index){
		$.ajax({
			type:"POST",
			data:"ind=" + index,
			url:"ventas/quitarproducto.php",
			success:function(r){
				$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
				alertify.success("Se quito el producto");
			}
		});
	}
    </script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
     <script src="js/mijs.js"></script> 
  <script src="librerias/alertifyjs/alertify.js"></script>
</body>
</html>

