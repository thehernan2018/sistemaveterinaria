<?php
date_default_timezone_set('America/Lima');
	
		if ( empty($_POST['txtid']) || empty($_POST['txtr']) || empty($_POST['txtm']) || empty($_POST['txtat'])  ){ 
			$errors[] = "Verifique Datos";
		}  elseif (
			 !empty($_POST['txtid']) && !empty($_POST['txtr']) && !empty($_POST['txtm'])&& !empty($_POST['txtat']) 
        ) {
            require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
			require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
			
			
			
				$mascota =strip_tags($_POST["txtid"],ENT_QUOTES); 
				$registro = strip_tags($_POST["txtr"],ENT_QUOTES);
				$medicamento = strip_tags($_POST["txtm"],ENT_QUOTES); 
				$atendido = strip_tags($_POST["txtat"],ENT_QUOTES); 
				
            
				
				
                 //$sql = "call SP_insertar_cita('".$cliente."','".$fecha."','".$nota."','".$asunto."',0);";
				 
				 $sql="INSERT INTO `historialmedico` (`id_historial`, `registro`, `medicamento`, `atendido`, `id_mascota`) VALUES (NULL, '".$registro."','".$medicamento."','".$atendido."','".$mascota."');";
                    
                    $query_new_hist_insert = mysqli_query($conexion,$sql);
            
            
                    // if user has been added successfully
                    if ($query_new_hist_insert) {
                        $messages[] = "Nuevo Historial Registrado con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                    
            
         }else {
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