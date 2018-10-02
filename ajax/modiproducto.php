<?php 
session_start();
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/model/producto.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/controller/productocontroller.php");
$fila =0;
$codigo= $_POST['txtid'];
$descripcion=$_POST['txtdes'];
$precio = $_POST['txtpre'];
$stock = $_POST['txtsto'];
$activo = $_POST['txtac'];
$observacion = $_POST['txtob'];

$producto = new producto();

$producto->setId($codigo);
$producto->setdescripcion($descripcion);
$producto->setprecio($precio);
$producto->setstock($stock);
$producto->setactivo($activo);
$producto->setobservacion($observacion);

$productocontrol = new productocontroller();

$fila = $productocontrol ->modificarpro($producto); //// que erro sale???lo vuelve a ingresar como insert

if ($fila !=0) 
{
      $messages[] = "Producto Modoficado con éxito.";
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