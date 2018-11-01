<?php 
	session_start();
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
	require_once "../classes/Ventas.php";
	$obj= new ventas();

	

	if(count($_SESSION['tablaComprasTemp'])==0){
		echo 0;
	}else{
		$result=$obj->crearVenta();
		unset($_SESSION['tablaComprasTemp']);
		echo $result;
	}
 ?>