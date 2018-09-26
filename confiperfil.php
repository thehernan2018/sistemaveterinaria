<?php 

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
?>
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
			
                 <!-- /. ROW  -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Configurar Perfil
                        </div>
                            <div class="panel-body">
                                 <form id="perfil" name="perfil" method="post">
                                       <!--<div id="resultados_ajaxnu"></div>-->
                                     <div class="row">
                                         
                                        <div class="col-lg-12">
                                    <?php include('perfil.php'); ?>
                                            
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
    
              <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
       <script src="js/mijs.js"></script> 
   
</body>
</html>
