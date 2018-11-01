<?php 
	@session_start();
		
	if(!$_SESSION['user_name'] and !$_SESSION['user_login_status']){
	
		echo '<script> location.href="index.php";</script>';

		}
$es=$_SESSION['estado'];

if($es==1){
     echo "<script>alert(':::Acceso Restringido para Usted...!')</script>"; 
 
   echo '<script> location.href="index.php";</script>';
    
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:::SISVETERINARIA:::</title>
    <link rel="shortcut icon" href="img/ico.png" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                 <div class="col-md-6">
                        <h1 class="page-header">
                            SISVETERINARIA EIRL <small>Sistema de Gestión veterinaria.
                          
                            </small>
                        </h1>
                    </div>
                    
                <div  class="col-md-6">
                 <div class="panel panel-success">
            <div class="panel-heading">Bienvenido , Estimado(a):</div>
            <div class="panel-body">
                <img src="img/man.png" alt="chat 24 horas" title="chat 24 horas" class="pull-right" width="70" height="80">
                <p><strong><?php echo $apellidos.' '.$nombres;   ?></strong></p>
                <div class="text-left"> 
                <a href="login.php?logout"><button type="button" class="btn btn-warning">Cerrar Sesi&oacute;n	</button></a>	
                
                </div>
             </div>
      </div>    
                </div>
                   
                    
                </div>
                <!-- /. ROW  -->

                <div class="row">
                  
                   <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Citas por atender
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Fecha</th>
                                            <th>nota</th>
                                            <th>asunto</th>                               
                                            <th>Dueño</th>
                                            <th>Atender</th>
                                            <th>Mis Mascotas</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            require_once ("config/db.php");
			                                require_once ("config/conexion.php");
                                        $s=1;
                                        $sql="SELECT * FROM cita c inner join cliente cl on c.id_cliente=cl.id_cliente order by c.fecha;";
                                        $execute=mysqli_query($conexion,$sql);
                                        while($row= mysqli_fetch_row($execute)){
                                            
                                        
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php $i=$s++; echo $i; ?></td>
                                            <td><?php echo $row[2]; ?></td>
                                            <td><?php echo $row[3]; ?></td>
                                            <td><?php echo $row[4]; ?></td>
                                           
                                           
                                            <td class="center"><?php echo $row[6].' - ' .$row[7]; ?></td>
                                            <td>
                                                  <a href="modmismacotas.php?cod=<?php echo $row[1]; ?> & nom=<?php echo $row[6].' '.$row[7];?>" <button type="button" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                                                
                                            </td>
                                            <td class="center">
                                               
                                                 <a href="modmismacotas.php?cod=<?php echo $row[1]; ?> & nom=<?php echo $row[6].' '.$row[7];?>" <button type="button" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                            </td>
                                           
                                        </tr>
                                    <?php } mysqli_close($conexion); ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
                   
                  
                </div>


                <div class="row">


                   

                </div>
                <!-- /. ROW  -->
                <!-- /. ROW  -->
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