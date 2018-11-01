<?php
date_default_timezone_set('America/Lima');
	
		if ( empty($_POST['txtape']) || empty($_POST['txtnom']) || empty($_POST['txtdomi']) || empty($_POST['txtdni'])  ){ 
			$errors[] = "Verifique Datos";
		}  elseif (
			 !empty($_POST['txtape']) && !empty($_POST['txtnom']) && !empty($_POST['txtdomi'])&& !empty($_POST['txtdni']) 
        ) {
            require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
			require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
			
			
			
				$ape =strip_tags($_POST["txtape"],ENT_QUOTES); 
				$nom = strip_tags($_POST["txtnom"],ENT_QUOTES);
				$domi = strip_tags($_POST["txtdomi"],ENT_QUOTES); 
				$dni = strip_tags($_POST["txtdni"],ENT_QUOTES); 
				$ruc = strip_tags($_POST["txtruc"],ENT_QUOTES); 
				$t1 = strip_tags($_POST["txtt1"],ENT_QUOTES); 
				$t2 = strip_tags($_POST["txtt2"],ENT_QUOTES); 
				$ema = strip_tags($_POST["txtema"],ENT_QUOTES); 
				$web = strip_tags($_POST["txtpw"],ENT_QUOTES); 
            
				$Fecharegistro=date("Y-m-d H:i:s");
				$estado="1";
				//$registro=$_SESSION['user_id'];
					$compara="select * from cliente where dni='".$dni."'";
                    $exe=mysqli_query($conexion,$compara);
                    $bu=mysqli_fetch_assoc($exe);
                    $dnibs= $bu['dni'];
                if($dni==$dnibs){
                     $errors[] = "Error Cliete ya éxiste.";
                }else{
                 $sql = "INSERT INTO cliente (nombre, apellidos,direccion,telf1,telf2,ruc,dni,email,activo,f_creacion,paginaweb)
       VALUES('".$nom."','".$ape."','".$domi."','".$t1."','".$t2."','".$ruc."','".$dni."','".$ema."','".$estado."','".$Fecharegistro."','".$web."');";
                    
                    $query_new_apoderado_insert = mysqli_query($conexion,$sql);
            
            
                    // if user has been added successfully
                    if ($query_new_apoderado_insert) {
                        $messages[] = "Nuevo Cliente Registrado con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                    }
            
        } else {
            $errors[] = "Un error desconocido ocurrió.";
        }
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>