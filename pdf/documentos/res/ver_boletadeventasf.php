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
    <td width="23%" rowspan="1" style="width: 13%;"><img style="width: 100px;"  src="../../img/1537673723_logo.jpg" alt="Logo"></td>
    <td colspan="2" align="center" style="color: #34495e;font-size:12px;text-align:center; width:56%;">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br>
            <?php echo get_row('perfil','direccion', 'id_perfil', 1)."<br>"."-". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?><br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?></td>
    <td width="26%" rowspan="2" style="width: 29%; border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000">
      &nbsp; R.U.C. N° 20529927704 <br>
      <h4> &nbsp; BOLETA DE VENTA</h4>  
      &nbsp; 0001- Nº <b>
    <?php echo '0'.$numero_factura;?></b></td>
    <td width="1%" rowspan="2" style="width: 2%;">&nbsp;</td>
  </tr>
  <tr> 
    <td><i>Cliente : </i></td>
    <td width="25%"> <?php echo $solicitante; ?> </td>
    <td width="25%">DNI:<?php echo $dni; ?></td>
  </tr>
  <tr>
    <td><i>Tipo Movimiento:</i></td>
    <td colspan="3" align="left"><?php echo $tipomovimiento; ?>  __ <i>Fecha : <?php  echo $fecha_factura;	?> </i></td>
  </tr> 
</table>
	<table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
	  <tr>
	    <th style="width: 10%;text-align:center" class='midnight-blue'>CANT.</th>
	    <th style="width: 60%" class='midnight-blue'>DESCRIPCION</th>
	    <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO UNIT.</th>
	    <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO TOTAL</th>
      </tr>
	  <?php
$nums=1;
$sumador_total=0;
$sql=mysqli_query($conexion, "SELECT d.id_producto,p.descripcion,d.precio,d.cantidad FROM detalle d
inner join producto p on d.id_producto=p.id_producto
where id_documento='".$numero_factura."';");

while ($row=mysqli_fetch_array($sql))
	{
	$id_producto=$row["id_producto"];
	$cantidad=$row['cantidad'];
	$nombre_producto=$row['descripcion'];
	$precio_venta=$row['precio'];
	
	$precio_venta_f=number_format($precio_venta,2);//Formateo variables
	$precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	$precio_total=$precio_venta_r*$cantidad;
	$precio_total_f=number_format($precio_total,2);//Precio total formateado
	$precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	$sumador_total+=$precio_total_r;//Sumador
	if ($nums%2==0){
		$clase="clouds";
	} else {
		$clase="silver";
	}
	?>
	  <tr>
	    <td class='<?php echo $clase;?>' style="width: 10%; text-align: center"><?php echo $cantidad; ?></td>
	    <td class='<?php echo $clase;?>' style="width: 60%; text-align: left"><?php echo $nombre_producto;?></td>
	    <td class='<?php echo $clase;?>' style="width: 15%; text-align: right"><?php echo $precio_venta_f;?></td>
	    <td class='<?php echo $clase;?>' style="width: 15%; text-align: right"><?php echo $precio_total_f;?></td>
      </tr>
	  <?php 

	
	$nums++;
	}
	$impuesto=get_row('perfil','impuesto', 'id_perfil', 1);
	$subtotal=number_format($sumador_total/1.18,2,'.','');
	$total_iva=($subtotal * $impuesto )/100;
	$total_iva=number_format($total_iva,2,'.','');
	$total_factura=$subtotal+$total_iva;
?>
	  <tr>
	    <td colspan="3" style="widtd: 85%; text-align: right;">SUBTOTAL <?php echo $simbolo_moneda;?></td>
	    <td style="widtd: 15%; text-align: right;"><?php echo number_format($subtotal,2);?></td>
      </tr>
	  <tr>
	    <td colspan="3" style="widtd: 85%; text-align: right;">IGV (<?php echo $impuesto;?>)% <?php echo $simbolo_moneda;?></td>
	    <td style="widtd: 15%; text-align: right;"><?php echo number_format($total_iva,2);?></td>
      </tr>
	  <tr>
	    <td colspan="3" style="widtd: 85%; text-align: right;">TOTAL <?php echo $simbolo_moneda;?></td>
	    <td style="widtd: 15%; text-align: right;"><?php echo number_format($total_factura,2);?></td>
      </tr>
    </table>
	<div style="font-size:11pt;text-align:center;font-weight:bold">Gracias por su compra!</div>
	<br> <br> 
-------------------------------------------------------------------------------------------------------------------------------->
   <table align="center"  border="0" style="width: 100%; color: #34495e;">
  <tr>
    <td width="23%" rowspan="1" style="width: 13%;"><img style="width: 100px;"  src="../../img/1537673723_logo.jpg" alt="Logo"></td>
    <td colspan="2" align="center" style="color: #34495e;font-size:12px;text-align:center; width:56%;">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br>
            <?php echo get_row('perfil','direccion', 'id_perfil', 1)."<br>"."-". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?><br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?></td>
    <td width="26%" rowspan="2" style="width: 29%; border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000">
      &nbsp; R.U.C. N° 20529927704 <br>
      <h4> &nbsp; BOLETA DE VENTA</h4>  
      &nbsp; 0001- Nº <b>
    <?php echo '0'.$numero_factura;?></b></td>
    <td width="1%" rowspan="2" style="width: 2%;">&nbsp;</td>
  </tr>
  <tr> 
    <td><i>Cliente : </i></td>
    <td width="25%"> <?php echo $solicitante; ?> </td>
    <td width="25%">DNI:<?php echo $dni; ?></td>
  </tr>
  <tr>
    <td><i>Tipo Movimiento:</i></td>
    <td colspan="3" align="left"><?php echo $tipomovimiento; ?>  __ <i>Fecha : <?php  echo $fecha_factura;	?> </i></td>
  </tr> 
</table>
	<table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
	  <tr>
	    <th style="width: 10%;text-align:center" class='midnight-blue'>CANT.</th>
	    <th style="width: 60%" class='midnight-blue'>DESCRIPCION</th>
	    <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO UNIT.</th>
	    <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO TOTAL</th>
      </tr>
	  <?php
$nums=1;
$sumador_total=0;
$sql=mysqli_query($conexion, "SELECT d.id_producto,p.descripcion,d.precio,d.cantidad FROM detalle d
inner join producto p on d.id_producto=p.id_producto
where id_documento='".$numero_factura."';");

while ($row=mysqli_fetch_array($sql))
	{
	$id_producto=$row["id_producto"];
	$cantidad=$row['cantidad'];
	$nombre_producto=$row['descripcion'];
	$precio_venta=$row['precio'];
	
	$precio_venta_f=number_format($precio_venta,2);//Formateo variables
	$precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	$precio_total=$precio_venta_r*$cantidad;
	$precio_total_f=number_format($precio_total,2);//Precio total formateado
	$precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	$sumador_total+=$precio_total_r;//Sumador
	if ($nums%2==0){
		$clase="clouds";
	} else {
		$clase="silver";
	}
	?>
	  <tr>
	    <td class='<?php echo $clase;?>' style="width: 10%; text-align: center"><?php echo $cantidad; ?></td>
	    <td class='<?php echo $clase;?>' style="width: 60%; text-align: left"><?php echo $nombre_producto;?></td>
	    <td class='<?php echo $clase;?>' style="width: 15%; text-align: right"><?php echo $precio_venta_f;?></td>
	    <td class='<?php echo $clase;?>' style="width: 15%; text-align: right"><?php echo $precio_total_f;?></td>
      </tr>
	  <?php 

	
	$nums++;
	}
	$impuesto=get_row('perfil','impuesto', 'id_perfil', 1);
	$subtotal=number_format($sumador_total/1.18,2,'.','');
	$total_iva=($subtotal * $impuesto )/100;
	$total_iva=number_format($total_iva,2,'.','');
	$total_factura=$subtotal+$total_iva;
?>
	  <tr>
	    <td colspan="3" style="widtd: 85%; text-align: right;">SUBTOTAL <?php echo $simbolo_moneda;?></td>
	    <td style="widtd: 15%; text-align: right;"><?php echo number_format($subtotal,2);?></td>
      </tr>
	  <tr>
	    <td colspan="3" style="widtd: 85%; text-align: right;">IGV (<?php echo $impuesto;?>)% <?php echo $simbolo_moneda;?></td>
	    <td style="widtd: 15%; text-align: right;"><?php echo number_format($total_iva,2);?></td>
      </tr>
	  <tr>
	    <td colspan="3" style="widtd: 85%; text-align: right;">TOTAL <?php echo $simbolo_moneda;?></td>
	    <td style="widtd: 15%; text-align: right;"><?php echo number_format($total_factura,2);?></td>
      </tr>
    </table>
	<div style="font-size:11pt;text-align:center;font-weight:bold">Gracias por su compra!</div>
	<br> <br> 
</page>

