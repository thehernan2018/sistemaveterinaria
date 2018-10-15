<?php
session_start();
//print_r($_POST);

date_default_timezone_set('America/Lima');
		if (empty($_POST['txtid'])  || empty($_POST['tipomovi']) || empty($_POST['txtidpro']) || empty($_POST['txtin']) ||  empty($_POST['txttot']) ){ 
			$errors[] = "Verifique Datos";
		}  elseif (
			!empty($_POST['txtid']) && !empty($_POST['tipomovi']) && !empty($_POST['txtidpro']) && !empty($_POST['txtin']) && !empty($_POST['txttot']) 
        ) {
            require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
			require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
			
			//echo "<pre>";
                       // var_dump($_POST);
                       // echo "</pre>";
				$id = strip_tags($_POST["txtid"],ENT_QUOTES);
				$timo =strip_tags($_POST["tipomovi"],ENT_QUOTES); 
				$idpro = $_POST["txtidpro"]; 
				$can = $_POST["txtcan"]; 
				$pre = $_POST["txtpre"]; 
				$in = strip_tags($_POST["txtin"],ENT_QUOTES); 
				$igv = strip_tags($_POST["txtigv"],ENT_QUOTES); 
				$to = strip_tags($_POST["txttot"],ENT_QUOTES); 
				$tcomprobate = strip_tags($_POST["optradio"],ENT_QUOTES); 
				
                                
				$Fecharegistro=date("Y-m-d H:i:s");
				$estado="1";
				$registro=$_SESSION['user_id'];
                      
                            	
                                if ($tcomprobate ==1) {
                       
                                 $sql = "INSERT INTO documento (comprobante,tipopago,fecha,total,"
                                  . "acuenta,id_movimiento,porcentajeigv,id_cliente,id_usuario) "
                                  . "VALUES ('Boleta', 'Contado', '".$Fecharegistro."', '".$to."', NULL, '".$timo."', '".$igv."', '".$id."', '".$registro."');";  
                                  $query_new_boleta_insert = mysqli_query($conexion,$sql);
                                   $last_id = $conexion->insert_id;
                             
                                  foreach ($_POST['txtidpro'] as $key => $pro) {
                                  $sqld="INSERT INTO detalle(id_producto,precio,cantidad,id_documento) "
                                  . "VALUES ('".$pro."', '".$_POST['txtpre'][$key]."', '".$_POST['txtcan'][$key]."',$last_id)";
                                  $query_new_detalle_insert = mysqli_query($conexion,$sqld);
                                  
                                  $stock="SELECT stock FROM producto where id_producto='".$pro."'";
                                  $ecu= mysqli_query($conexion, $stock);
                                  $fi=mysqli_fetch_assoc($ecu);
                                  $st_ac=$fi['stock'];
                                  $stockActulizado=$st_ac-$_POST['txtcan'][$key];
                                  $modistock="UPDATE producto SET stock = '".$stockActulizado."' WHERE id_producto = '".$pro."';";
                                  $ejecute=-mysqli_query($conexion, $modistock);
                                  unset($_SESSION['tablaComprasTemp']);
                                   
                                  
                                  }
                                    
                   }
                                if ($tcomprobate ==2) {
                                 $ruc = strip_tags($_POST["txtruc"],ENT_QUOTES); 
				$rz = strip_tags($_POST["txtrz"],ENT_QUOTES); 
				$dir = strip_tags($_POST["txtdir"],ENT_QUOTES); 
                                 $sql = "INSERT INTO documento (comprobante,tipopago,fecha,total,"
                                  . "acuenta,id_movimiento,porcentajeigv,id_cliente,ruc,razonsocial,direccion,id_usuario) "
                                  . "VALUES ('Factura', 'Contado', '".$Fecharegistro."', '".$to."', NULL, '".$timo."', '".$igv."', '".$id."', '".$ruc."', '".$rz."', '".$dir."', '".$registro."');";  
                                  $query_new_boleta_insert = mysqli_query($conexion,$sql);
                                   $last_id = $conexion->insert_id;
                             
                                  foreach ($_POST['txtidpro'] as $key => $pro) {
                                  $sqld="INSERT INTO detalle(id_producto,precio,cantidad,id_documento) "
                                  . "VALUES ('".$pro."', '".$_POST['txtpre'][$key]."', '".$_POST['txtcan'][$key]."',$last_id)";
                                  $query_new_detalle_insert = mysqli_query($conexion,$sqld);
                                  
                                   $stock="SELECT stock FROM producto where id_producto='".$pro."'";
                                  $ecu= mysqli_query($conexion, $stock);
                                  $fi=mysqli_fetch_assoc($ecu);
                                  $st_ac=$fi['stock'];
                                  $stockActulizado=$st_ac-$_POST['txtcan'][$key];
                                  $modistock="UPDATE producto SET `stock` = '".$stockActulizado."' WHERE id_producto = '".$pro."';";
                                  $ejecute=-mysqli_query($conexion, $modistock);
                                  unset($_SESSION['tablaComprasTemp']);
    
                                  }
                                    
                   }
       
                    if ($query_new_boleta_insert) {
                        $messages[] = "Nueva Venta Registrada    con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
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
                         if($tcomprobate==1){
                                
                         
			if (isset($messages)){
                           
				
				?>
				<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
                                 
                    Imprimir Boleta<a href="#" class="btn btn-success btn-lg"  title='Imprimir Boleta' 
         onclick="print_fac_vdt('<?php echo $id;?>','<?php echo $in;?>','<?php echo $igv;?>','<?php echo $to;?>','<?php echo $last_id;?>','<?php echo $tcomprobate; ?>');"><i class="glyphicon glyphicon-print"></i></a>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
<?php
    }   }else{
        
?>
<?php
if (isset($messages)){
                           
				
				?>
				<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
                                 
                    Imprimir Factura<a href="#" class="btn btn-success btn-lg"  title='Imprimir Factura' 
         onclick="print_fac_vdt2('<?php echo $id;?>','<?php echo $in;?>','<?php echo $igv;?>','<?php echo $to;?>','<?php echo $last_id;?>','<?php echo $tcomprobate; ?>','<?php echo $ruc; ?>','<?php echo $rz; ?>','<?php echo $dir; ?>');"><i class="glyphicon glyphicon-print"></i></a>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>

    <?php } }?>
