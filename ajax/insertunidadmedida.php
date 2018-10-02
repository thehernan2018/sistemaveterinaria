<?php 
session_start();
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/model/unidadmedida.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/controller/unidadmedidacontroller.php");
$fila =0;
$descripcion= $_POST['descripcion'];
$abrebia= $_POST['txtabreviatura'];


$unidamedi = new unidadmedida();

$unidamedi->setdescripcion($descripcion);
$unidamedi->setAbreviatura($abrebia);

$unidadcontrol = new unimeditocontroller();

$fila = $unidadcontrol ->insertar($unidamedi);

if ($fila !=0) 
{
      $messages[] = "Nuevo Producto Registrado con éxito.";
} else {
      $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                
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