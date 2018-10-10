<?php 
	session_start();
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");

	$idcliente=1;
	$idproducto=$_POST['id'];
	//$descripcion=$_POST['descripcionV'];
	$cantidad=$_POST['can'];
	$precio=$_POST['pre'];

	$sql="SELECT nombre,apellidos 
			from cliente 
			where id_cliente='$idcliente'";
	$result=mysqli_query($conexion,$sql);

	$c=mysqli_fetch_row($result);

	$ncliente=$c[1]." ".$c[0];

	$sql1="SELECT descripcion,id_producto 
			from producto 
			where id_producto='$idproducto'";
	$result1=mysqli_query($conexion,$sql1);

	 $red=mysqli_fetch_row($result1);
         $nombreproducto = $red[0];
         $idpro = $red[1];
	$articulo=             
				$nombreproducto."||".
				$precio."||".
                                $cantidad."||".
				$ncliente."||".
				$idcliente."||".
                                $idpro;

	$_SESSION['tablaComprasTemp'][]=$articulo;

 ?>