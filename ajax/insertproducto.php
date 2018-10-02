<?php 
session_start();
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/model/producto.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/controller/productocontroller.php");
$fila =0;
$codigo= $_POST['codigo'];
$descripcion=$_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$idperfil = $_SESSION['user_id'];
$activo = 1;
$observacion = $_POST['observa'];
$idunid = $_POST['idunidmed'];

$producto = new producto();

$producto->setcodigo($codigo);
$producto->setdescripcion($descripcion);
$producto->setprecio($precio);
$producto->setstock($stock);
$producto->setactivo($activo);
$producto->setidperfil($idperfil);
$producto->setobservacion($observacion);
$producto->setidunidmed($idunid);

$productocontrol = new productocontroller();

$fila = $productocontrol ->insertar($producto);

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