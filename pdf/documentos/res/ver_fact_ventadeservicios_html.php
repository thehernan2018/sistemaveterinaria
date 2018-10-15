<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
.midnight-blue{
	background:#2c3e50;
	padding: 4px 4px 4px;
	color:white;
	font-weight:bold;
	font-size:12px;
}
.silver{
	background:white;
	padding: 3px 4px 3px;
}
.clouds{
	background:#ecf0f1;
	padding: 3px 4px 3px;
}
.border-top{
	border-top: solid 1px #bdc3c7;
	
}
.border-left{
	border-left: solid 1px #bdc3c7;
}
.border-right{
	border-right: solid 1px #bdc3c7;
}
.border-bottom{
	border-bottom: solid 1px #bdc3c7;
}
table.page_footer {width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;}
}
-->
</style>
<page backtop="15mm" backbottom="15mm" backleft="15mm" backright="15mm" style="font-size: 12pt; font-family: arial" >
        <page_footer> 
    </page_footer>
	<table align="center"  border="0" style="width: 100%; color: #34495e;">
  <tr>
    <td rowspan="1" style="width: 13%;"><img style="width: 100px;" src="../../img/avatar_2x.png" alt="Logo"></td>
    <td style="color: #34495e;font-size:12px;text-align:center; width:56%;" align="center">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br><?php echo get_row('perfil','direccion', 'id_perfil', 1).", ". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?>(Costado del Cementerio)<br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?><br> 
    </td>
    <td rowspan="2" style="width: 29%; border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000">
    &nbsp; R.U.C. N° 20146777121 <br>
    <h4> &nbsp; RECIBO DE INGRESOS</h4>  
    &nbsp; 001- Nº <b><?php echo '0'.$numero_factura; ?></b></td>
    <td style="width: 2%;" rowspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td><i>USUARIO : </i></td>
    <td> <u><?php echo $solicitante; ?></u></td>
  </tr>
  <tr>
  <td><i>DOMICILIO : </i></td>
  <td colspan="2"> <u><?php echo $dsolicitante; ?></u>___________________________________________________</td>
  </tr> 
  <tr>
  <td><i>R.U.C. N° :</i></td>
  <td align="left"> <u><?php echo $dnisolicitante; ?></u>_________________ <i>FECHA DE EMESIÓN: </i></td>
  <td> <u><?php echo date("d-m-Y",strtotime($fecha_factura));?></u>____________</td>
  <td></td>
  </tr> 
</table>  

<table align="center"  border="1" style="width: 100%; color: #34495e; border-collapse: collapse;">
  <tr align="center">
    <td style="width: 25%;">CODIGO</td>
    <td style="width: 50%;">CONCEPTO</td>
    <td style="width: 25%;">IMPORTE</td>
  </tr>
   <?php
					$sumador_total=0;
	$sql=mysqli_query($con, "select * from t_servicio, t_detalleventaservicios  where t_servicio.idservicio=t_detalleventaservicios .idservicio and t_detalleventaservicios.idventa='".$idventa."'");
	$sql2=mysqli_query($con, "select * from t_servicio, t_detalleventaservicios  where t_servicio.idservicio=t_detalleventaservicios .idservicio and t_detalleventaservicios.idventa='".$idventa."'");
		?>
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td>
    <?php 
	$correlativop="1";
	while ($row=mysqli_fetch_array($sql))
	{
		//idservicio,precioventa, cantidad, session_id
	$id_temp_serventa=$row['iddetalleventaservicio'];
	$idservicio=$row['idservicio'];
	$servicio_nombre=$row['nombre']; 
	$servicio_cantidad=$row['cantidad'];   
		?>
	<?php echo $correlativop++.".- ".$servicio_nombre."      (".$servicio_cantidad.")"."<br>";
	}?> 
    </td>
    <td align="right" rowspan="2">
	<?php
	$correlativop2="1";
	while ($row2=mysqli_fetch_array($sql2))
	{ 
	$servicio_pv=$row2['precioventa'];
	$servicio_cantidad=$row2['cantidad']; 
	  
	$precio_venta_f=number_format($servicio_pv,2);//Formateo variables
	$precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	$precio_total=$precio_venta_r*$servicio_cantidad;
	$precio_total_f=number_format($precio_total,2);//Precio total formateado
	$precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	$sumador_total+=$precio_total_r;//Sumador
		?>
	<?php echo $precio_total_f."<br>";
	} ?>
    </td>
  </tr> 
  <tr> 
    <td> QEVF: <?php echo $difunto; ?> <br>
    CUARTEL: <?php echo $ubidifunto; ?></td>
  </tr>
  <tr>
    <td colspan="2" align="right">TOTAL S/. </td>
    <td align="right"><?php echo $ventatotal; ?></td>
  </tr>
  <tr>
    <td colspan="3">SON: <?php echo convertir($ventatotal); ?> </td>
  </tr>
  
</table>
<span style="color: #34495e;font-size:11;font-weight:bold; font-style:normal; text-align:center ">ESTE RECIBO NO ES VALIDO SI NO LLEVA EL SELLO Y FIRMA DEL CAJERO AUTORIZADO</span>

<br> <br> <br><br>
-------------------------------------------------------------------------------------------------------------------------------->
    <br> <br> <br> <br> <br> 

		<table align="center"  border="0" style="width: 100%; color: #34495e;">
  <tr>
    <td rowspan="1" style="width: 13%;"><img style="width: 100px;" src="../../img/avatar_2x.png" alt="Logo"></td>
    <td style="color: #34495e;font-size:12px;text-align:center; width:56%;" align="center">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br><?php echo get_row('perfil','direccion', 'id_perfil', 1).", ". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?>(Costado del Cementerio)<br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?><br> 
    </td>
    <td rowspan="2" style="width: 29%; border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000">
    &nbsp; R.U.C. N° 20146777121 <br>
    <h4> &nbsp; RECIBO DE INGRESOS</h4>  
    &nbsp; 001- Nº <b><?php echo '0'.$numero_factura; ?></b></td>
    <td style="width: 2%;" rowspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td><i>USUARIO : </i></td>
    <td> <u><?php echo $solicitante; ?></u></td>
  </tr>
  <tr>
  <td><i>DOMICILIO : </i></td>
  <td colspan="2"> <u><?php echo $dsolicitante; ?></u>___________________________________________________</td>
  </tr> 
  <tr>
  <td><i>R.U.C. N° :</i></td>
  <td align="left"> <u><?php echo $dnisolicitante; ?></u>_________________ <i>FECHA DE EMESIÓN: </i></td>
  <td> <u><?php echo date("d-m-Y",strtotime($fecha_factura));?></u>____________</td>
  <td></td>
  </tr> 
</table>  

<table align="center"  border="1" style="width: 100%; color: #34495e; border-collapse: collapse;">
  <tr align="center">
    <td style="width: 25%;">CODIGO</td>
    <td style="width: 50%;">CONCEPTO</td>
    <td style="width: 25%;">IMPORTE</td>
  </tr>
   <?php
					$sumador_total=0;
	$sql=mysqli_query($con, "select * from t_servicio, t_detalleventaservicios  where t_servicio.idservicio=t_detalleventaservicios .idservicio and t_detalleventaservicios.idventa='".$idventa."'");
	$sql2=mysqli_query($con, "select * from t_servicio, t_detalleventaservicios  where t_servicio.idservicio=t_detalleventaservicios .idservicio and t_detalleventaservicios.idventa='".$idventa."'");
		?>
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td>
    <?php 
	$correlativop="1";
	while ($row=mysqli_fetch_array($sql))
	{
		//idservicio,precioventa, cantidad, session_id
	$id_temp_serventa=$row['iddetalleventaservicio'];
	$idservicio=$row['idservicio'];
	$servicio_nombre=$row['nombre']; 
	$servicio_cantidad=$row['cantidad'];   
		?>
	<?php echo $correlativop++.".- ".$servicio_nombre."      (".$servicio_cantidad.")"."<br>";
	}?> 
    </td>
    <td align="right" rowspan="2">
	<?php
	$correlativop2="1";
	while ($row2=mysqli_fetch_array($sql2))
	{ 
	$servicio_pv=$row2['precioventa'];
	$servicio_cantidad=$row2['cantidad']; 
	  
	$precio_venta_f=number_format($servicio_pv,2);//Formateo variables
	$precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	$precio_total=$precio_venta_r*$servicio_cantidad;
	$precio_total_f=number_format($precio_total,2);//Precio total formateado
	$precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	$sumador_total+=$precio_total_r;//Sumador
		?>
	<?php echo $precio_total_f."<br>";
	} ?>
    </td>
  </tr> 
  <tr> 
    <td> QEVF: <?php echo $difunto; ?> <br>
    CUARTEL: <?php echo $ubidifunto; ?></td>
  </tr>
  <tr>
    <td colspan="2" align="right">TOTAL S/. </td>
    <td align="right"><?php echo $ventatotal; ?></td>
  </tr>
  <tr>
    <td colspan="3">SON: <?php echo convertir($ventatotal); ?> </td>
  </tr>
  
</table>
<span style="color: #34495e;font-size:11;font-weight:bold; font-style:normal; text-align:center ">ESTE RECIBO NO ES VALIDO SI NO LLEVA EL SELLO Y FIRMA DEL CAJERO AUTORIZADO</span>


</page>

