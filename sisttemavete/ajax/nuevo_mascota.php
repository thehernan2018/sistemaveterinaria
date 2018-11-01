<?php
//print_r($_POST);
error_reporting(0);
include('is_logged.php');
date_default_timezone_set('America/Lima');

        $permitidos = array("image/jpg", "image/jpeg", "image/png");
	$limite_kb = 16384;
          if (in_array($_FILES['txtfoto']['type'], $permitidos) && $_FILES['txtfoto']['size'] <= $limite_kb * 1024){
	if ( empty($_POST['txtid']) || empty($_POST['txtnom']) || empty($_POST['txtes']) || empty($_POST['txtra']) || empty($_POST['txtse']) || empty($_POST['txtpe']) || empty($_POST['txtfn']) || empty($_POST['txtco'])
                  ){ 
			$errors[] = "Verifique Datos";
		}  elseif (
	 !empty($_POST['txtid']) && !empty($_POST['txtnom']) && !empty($_POST['txtes']) && !empty($_POST['txtra']) && !empty($_POST['txtse']) && !empty($_POST['txtpe']) && !empty($_POST['txtfn']) && !empty($_POST['txtco']) 
                ) {
                     
                        require_once ("../config/db.php");
			require_once ("../config/conexion.php");
			
			
			
				$idc =strip_tags($_POST["txtid"],ENT_QUOTES); 
				$nom =strip_tags($_POST["txtnom"],ENT_QUOTES); 
				$es = strip_tags($_POST["txtes"],ENT_QUOTES);
				$ra = strip_tags($_POST["txtra"],ENT_QUOTES); 
				$se = strip_tags($_POST["txtse"],ENT_QUOTES); 
				$pe = strip_tags($_POST["txtpe"],ENT_QUOTES); 
				$fn = strip_tags($_POST["txtfn"],ENT_QUOTES); 
                               
               $dvi = strip_tags($_POST["txtco"],ENT_QUOTES); 
                                $foto =$_FILES["txtfoto"];
                                $fotob64 = base64_encode(file_get_contents($foto["tmp_name"]));
                               // $nonhoja=$foto["name"];
                                
				$Fecharegistro=date("Y-m-d H:i:s");
				$estado="1";
				//$registro=$_SESSION['user_id'];
		
       $sql = "INSERT INTO mascota (nombre, especie,raza,sexo,pelaje,f_nac,foto,codigodvi,id_cliente)
       VALUES('".$nom."','".$es."','".$ra."','".$se."','".$pe."','".$fn."','".$fotob64."','".$dvi."','".$idc."');";
                    
                    $query_new_apoderado_insert = mysqli_query($conexion,$sql);
            
            
                    // if user has been added successfully
                    if ($query_new_apoderado_insert) {
                        $messages[] = "Registrado con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                    
            
                }} else {
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