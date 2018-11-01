<?php 
	@session_start();
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	include_once "funciones.php";
	
	if(!$_SESSION['user_name'] and !$_SESSION['user_login_status']){
	
		echo '<script> location.href="index.php";</script>';

		}
$es=$_SESSION['estado'];
    if($es==1){
     echo "<script>alert(':::Acceso Restringido para Usted...!')</script>"; 
 
        echo '<script> location.href="index.php";</script>';
    
    }
	
	if($_SESSION['user_login_status']=='1'){
		$sql = mysqli_query($conexion,"select tu.usuario, tp.nombre, tp.apellido  from t_usuario tu, t_persona tp where tu.idpersona=tp.idpersona and tu.idusuario ='".$_SESSION['user_id']."'");
            $dato = mysqli_fetch_row($sql); 
				$apellidos=$dato[1];
				$nombres=$dato[2];
				
        
	}elseif($_SESSION['user_login_status']=='2'){
		$sql = mysqli_query($conexion,"select tu.usuario, tp.nombre, tp.apellido  from t_usuario tu, t_persona tp where tu.idpersona=tp.idpersona and tu.idusuario ='".$_SESSION['user_id']."'");
            $dato = mysqli_fetch_row($sql); 
				$apellidos=$dato[1];
				$nombres=$dato[2];
	
	}else{
		$sql = mysqli_query($conexion,"select tu.usuario, tp.nombre, tp.apellido  from t_usuario tu, t_persona tp where tu.idpersona=tp.idpersona and tu.idusuario ='".$_SESSION['user_id']."'");
            $dato = mysqli_fetch_row($sql); 
				$apellidos=$dato[1];
				$nombres=$dato[2];
	}	
	
	date_default_timezone_set('America/Lima');
    $hoy=date("H:i:s");
?>
<nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="panel.php"><h4>CLÍNICA VETERINARIA EIRL</h4></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                     <!--- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>--->
                        <li><a href="confiperfil.php"><i class="fa fa-gear fa-fw"></i> Configurar</a>
                        </li>
                        <li class="divider"></li>
                         <!--<a href="login.php?logout"><button type="button" class="btn btn-danger">Cerrar Sesi&oacute;n	</button></a>-->	
                        <li> <a href="login.php?logout"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>