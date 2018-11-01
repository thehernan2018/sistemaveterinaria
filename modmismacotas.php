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
                              <?php echo $clien=$_GET['nom']; ?> - Mis Mascotas - <a href="lista_clientes.php"><-- atras</a>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-primary">
  <div class="panel-heading">Lista de mis Mascotas</div>
  
 
  
  
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <?php include('modal/modmodimascota.php'); ?>
    </div>
  </div>
</div>
  
  
  <div class="panel-body">
       <?php 
             $idm=$_GET['cod'];
             require_once ("config/db.php");
             require_once ("config/conexion.php");
            $sql="SELECT * FROM `mascota` where id_cliente='".$idm."'";
            $exe=mysqli_query($conexion, $sql);
            while($row=mysqli_fetch_array($exe)){
                
       ?>
      
      <!---->
      
      <div class="Right">
  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
     <?php echo'<img src="data:image/jpg;base64 , ' .$fot=$row['foto']. '"/>' ?>
      <div class="caption">
        <h3><?php echo $row['nombre']; ?></h3>
        <p>
        <h6>
               <?php 
                    echo '<strong>'.'Especie : </strong>'.$row['especie'].' '; 
                    echo '<strong>Raza : </strong>'.$row['raza'].' '; 
                    echo '<strong>Sexo : </strong>'.$row['sexo'].' '; 
                    echo '<strong>Pelaje : </strong>'.$row['pelaje'].' '; 
                    echo '<strong>F-N : </strong>'.$row['f_nac'].' '; 
                    echo '<strong style="color:#FF0000";>Fallecido : '.$row['fallecido'].'</strong> '; 
                    echo '<strong style="color:#FF0000";>Estravido : '.$row['extraviado'].'</strong> '; 
                    echo '<strong>DVI: </strong>'.$row['codigodvi']; 
                    
               ?> 
        </h6>
        </p>
        <p
            <button type="button" id="momascota" name="momascota" cod='<?php echo $row['id_mascota']; ?>' class="btn btn-primary momascota" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
       
       
      </p>
      </div>
    </div>
  </div>
</div>
      <!---->
      
      
      
      

            <?php }?>
  </div>
  
 
</div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
