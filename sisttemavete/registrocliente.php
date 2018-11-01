
<!DOCTYPE html>
<html lang="en">
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
    
    
    <div class="wrapper">
        
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
                       Configurar Perfil
                    </div>
                        <div class="panel-body">

            
                <div class="row">
                    <h2 class="text-center"> REGISTRO DE CLIENTES</h2>
                    <hr>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                         <a class="btn btn-success" data-toggle="modal" data-target="#nuevoPer">Nuevo Cliente</a>
                        
                    </div>
                    
                    
                </div>
      
<!--                <div class="row">
                    <div class="col-md-6">
                        <form action="RegistroCliente.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                     <input  class="form-control"type="text" name="busquedacli" id="busquedacli" placeholder="Buscar...">
                                </div>
                                
                                <div class="col-md-6">
                                    <button class="btn btn-primary" type="submit">Buscar</button>
                                </div>
                           
                            
                                
                            </div>
                            
                            
                        </form>
                        
                    </div>
                    
                </div>-->
                <hr>
                    

              
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
              
                    
                        <table  class="table display AlldataTables" style="width:150%">
                            <thead>
				<tr>
					<th>DNI/RUT</th><th>Nombres / Razon Social</th><th>Domicilio Fiscal</th><th>Telefono</th><th><span class="glyphicon glyphicon-wrench"></span></th>
				</tr>
                            </thead>			
<?php
			require_once ($_SERVER['DOCUMENT_ROOT']."/sisveterinaria/controller/clientecontroller.php");
                        require_once ($_SERVER['DOCUMENT_ROOT']."/sisveterinaria/model/cliente.php");
                        $controlercliente = new clientecontroller();
                        $resultado="";
//                        if(isset($_POST['busquedacli'])){
//                            $resultado=$_POST['busquedacli'];
////                            echo $resultado;
//                        }
			
			$cliente = new cliente();
                        foreach ($controlercliente->listar() as $cliente) 
				{					
					echo "<tr>";
					echo "<td>".$cliente->getApellidos()."</td><td>".$cliente->getNombre()." ".$cliente->getApellidos(),"</td><td>".$cliente->getDireccion()."</td><td>".$cliente->getTelf1()."</td>";	
					echo"<td>";						
                                       	
					echo "</td>";
					echo "</tr>";
				}
				
			
					
			
	

?>              
	        </table>
		

                        
                        
                    </div>
                    
  
<!-- Nuevo Cliente ------------------------------------
------------------------------------------------------->

	<div class="modal fade bs-example-modal-lg" id="nuevoPer" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Nuevo Cliente</h4>                       
                    </div>
                    <div class="modal-body">
                        <form action="InsertCliente.php" method="post"> <!-- -->             		
                       		
                                <div class="form-group">
                                        <label for="nombre">Nombres:</label>
                                        <input class="form-control" id="nombre" name="nombre" type="text" required ></input>
                                </div>
                            
                       		 <div class="form-group">
                                        <label for="rut">Apellidos:</label>
                                        <input class="form-control" id="apellidos" name="apellidos" type="text" required></input>
                                </div>
                            
                       		 <div class="form-group">
                                     <label for="rut"> Domicilio Fiscal:</label>
                                        <input class="form-control" id="domifiscal" name="domifiscal" type="text" required></input>
                                </div>
                            
                       		 <div class="form-group">
                                        <label for="rut">Domicilio Real:</label>
                                        <input class="form-control" id="domireal" name="domireal" type="text" required></input>
                                </div>
                            
                       		 <div class="form-group">
                                        <label for="rut">Telefono:</label>
                                        <input class="form-control" id="telf" name="telf" type="tel" required></input>
                                </div>
                            
                       		 <div class="form-group">
                                        <label for="rut">Telefono 1:</label>
                                        <input class="form-control" id="telf1" name="telf1" type="tel" ></input>
                                </div>
                            
                            
                                <div class="form-group">
                                        <label for="celular">Telefono 2:</label>
                                        <input class="form-control" id="telf2" name="telf2" type="tel" ></input>
                                </div>
                                <div class="form-group">
                                        <label for="celular">DNI / RUC:</label>
                                        <input class="form-control" id="dniruc" name="dniruc" type="text" required></input>
                                </div>
                                <div class="form-group">
                                        <label for="direccion">Email:</label>
                                        <input class="form-control" id="correo" name="correo" type="email" ></input>
                                </div>
                            <div class="form-group">
                                        <label for="celular">Fecha Nacimiento:</label>
                                        <input class="form-control" id="fnac" name="fnac" type="date" ></input>
                                </div>
                            <div class="form-group">
                                        <label for="celular">Contraseña:</label>
                                        <input class="form-control" id="clave" name="clave" type="password" required></input>
                                </div>
                            

                           <input type="submit" class="btn btn-success" value="Guardar" >
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

<!-- Modal Editar Cliente ------------------
--------------------------------------------->

	<div class="modal fade bs-example-modal-lg" id="editperson" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Cliente</h4>                       
                    </div>
                    <div class="modal-body">
                        <form action="InsertCliente.php" method="post"> <!-- -->             		
                       		<input  id="id" name="id" type="hidden" ></input> 
                                <div class="form-group">
                                        <label for="nombre">Nombres:</label>
                                        <input class="form-control" id="nombre" name="nombre" type="text" required ></input>
                                </div>
                            
                       		 <div class="form-group">
                                        <label for="rut">Apellidos:</label>
                                        <input class="form-control" id="apellidos" name="apellidos" type="text" required></input>
                                </div>
                            
                       		 <div class="form-group">
                                     <label for="rut"> Domicilio Fiscal:</label>
                                        <input class="form-control" id="domifiscal" name="domifiscal" type="text" required></input>
                                </div>
                            
                       		 <div class="form-group">
                                        <label for="rut">Domicilio Real:</label>
                                        <input class="form-control" id="domireal" name="domireal" type="text" required></input>
                                </div>
                            
                       		 <div class="form-group">
                                        <label for="rut">Telefono:</label>
                                        <input class="form-control" id="telf" name="telf" type="tel" required></input>
                                </div>
                            
                       		 <div class="form-group">
                                        <label for="rut">Telefono 1:</label>
                                        <input class="form-control" id="telf1" name="telf1" type="tel" ></input>
                                </div>
                            
                            
                                <div class="form-group">
                                        <label for="celular">Telefono 2:</label>
                                        <input class="form-control" id="telf2" name="telf2" type="tel" ></input>
                                </div>
                                <div class="form-group">
                                        <label for="celular">DNI / RUC:</label>
                                        <input class="form-control" id="dniruc" name="dniruc" type="text" required></input>
                                </div>
                                <div class="form-group">
                                        <label for="direccion">Email:</label>
                                        <input class="form-control" id="correo" name="correo" type="email" ></input>
                                </div>
                            <div class="form-group">
                                        <label for="celular">Fecha Nacimiento:</label>
                                        <input class="form-control" id="fnac" name="fnac" type="date" ></input>
                                </div>
                            <div class="form-group">
                                        <label for="celular">Contraseña:</label>
                                        <input class="form-control" id="clave" name="clave" type="password" required></input>
                                </div>
                            

                           <input type="submit" class="btn btn-success" value="Guardar" >
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

</div>
            </div>
    </div>
               </div>
            </div>
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
    
              <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
     
        
        
        <script>
            
            $(document).ready(function() {
            $('.AlldataTables').DataTable( {
                "scrollY": 500,
                "scrollX": true,
                language:{
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
            } );
} );
        </script>
        
	<script>			 
		  $('#editperson').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
                  
		  var recipient0 =  button.data('id')
             
		  var recipient1 = button.data('nombre')
		 
		  var recipient2 = button.data('apellidos')
                  var recipient3 = button.data('domifiscal')
                  var recipient4 = button.data('domireal')
                  var recipient5 = button.data('telf')
                  var recipient6 = button.data('telf1')
                  var recipient7 = button.data('telf2')
                  var recipient8 = button.data('dniruc')
                  var recipient9 = button.data('correo')
                  var recipient10 = button.data('fnac')
                  var recipient11 = button.data('clave')
   
                
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
                   modal.find('.modal-body #nombre').val(recipient1)
		  modal.find('.modal-body #apellidos').val(recipient2)
		  modal.find('.modal-body #domifiscal').val(recipient3)
		  modal.find('.modal-body #domireal').val(recipient4)		 
                  modal.find('.modal-body #telf').val(recipient5)	
                  modal.find('.modal-body #telf1').val(recipient6)	
                  modal.find('.modal-body #telf2').val(recipient7)
                  modal.find('.modal-body #dniruc').val(recipient8)
                  modal.find('.modal-body #correo').val(recipient9)
                  modal.find('.modal-body #fnac').val(recipient10)
                  modal.find('.modal-body #clave').val(recipient11)
                  
		});
		
	</script>
	
</body>

      <script src="assets/js/custom-scripts.js"></script>
</html>
