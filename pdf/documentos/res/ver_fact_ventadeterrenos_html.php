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
        <table class="page_footer">
            <tr>

                <td style="width: 50%; text-align: left">
                    P&aacute;gina [[page_cu]]/[[page_nb]]
                </td>
                <td style="width: 45%; text-align: right">
                    &copy; <?php echo "www.ckdeperu.com/sbppaita";?>
                </td>
                <td style="width: 5%; text-align: right">
                    <?php echo  $anio=date('Y'); ?>
                </td>
            </tr>
        </table>
    </page_footer>
	<?php include("encabezado_factura.php");?>
    <br>
 <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;"> 
 <tr>
           <td colspan="5" style="width:100%;text-align: center;" class='midnight-blue'>LISTA DE TERRENOS</td>
        </tr>
				<tr>
                    <td style="width: 5%;text-align:center" class='midnight-blue'>#</td>
                    <td style="width: 50%" class='midnight-blue'>Terreno</td>
                    <td style="width: 10%;text-align: center" class='midnight-blue'>Cantidad</td>
                    <td style="width: 20%;text-align: center" class='midnight-blue'>PRECIO UNIT.</td>
                    <td style="width: 15%;text-align: center" class='midnight-blue'>PRECIO TOTAL</td>  
				</tr>
                <?php
					$sumador_total=0;
	$sql=mysqli_query($con, "select * from t_terreno, t_detalleventaterrenos  where t_terreno.idterreno=t_detalleventaterrenos.idterreno and t_detalleventaterrenos.idventa='".$idventa."'");
	$correlativop="1";
	while ($row=mysqli_fetch_array($sql))
	{
		//idterreno,precioventa, cantidad, session_id
	$id_temp_terrventa=$row['iddetalleventaterreno'];
	$idterreno=$row['idterreno'];
	$terreno_nombre=$row['nombre'];
	$terreno_pv=$row['preciotventa'];
	$terreno_cantidad=$row['cantidadt']; 
	  
	$precio_venta_f=number_format($terreno_pv,2);//Formateo variables
	$precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	$precio_total=$precio_venta_r*$terreno_cantidad;
	$precio_total_f=number_format($precio_total,2);//Precio total formateado
	$precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	$sumador_total+=$precio_total_r;//Sumador
		?> 
          
		<tr>
			<td class='text-center' style="width:5%;"><?php echo $correlativop++;?></td>
            <td class='text-left' style="width:50%;"><?php echo $terreno_nombre;?></td>
			<td class='text-center' style="width:10%;text-align: center"><?php echo $terreno_cantidad;?></td> 
            <td class='text-right' style="width:20%;text-align: right"><?php echo $precio_venta_f;?></td>
			<td class='text-right' style="width:15%;text-align: right"><?php echo $precio_total_f;?></td>  
		</tr>		
		<?php
	}
	$simbolo_moneda='S/.';
	$impuesto='0.18';
	$total_factura=number_format($sumador_total,2,'.','');
	$total_iva=($total_factura * $impuesto );
	$total_iva=number_format($total_iva,2,'.','');
	$subtotal=$total_factura-$total_iva;
?>
		<tr>
			<td class='text-center' style="width:5%;"></td>
            <td class='text-left' style="width:50%;"></td>
			<td class='text-center' style="width:10%;"></td> 
            <td style="width:20%;text-align: right"></td> 
			<td style="width:15%;text-align: right"></td>  
		</tr>
        <tr>
			<td class='text-center' style="width:5%;"></td>
            <td class='text-left' style="width:50%;"></td>
			<td class='text-center' style="width:10%;"></td> 
            <td style="width:20%;text-align: right"></td>
			<td style="width:15%;text-align: right"></td> 
		</tr>
        <tr>
			<td class='text-center' style="width:5%;"></td>
            <td class='text-left' style="width:50%;"></td>
			<td class='text-center' style="width:10%;"></td> 
            <td style="width:20%;text-align: right">TOTAL <?php echo $simbolo_moneda;?></td>
			<td style="width:15%;text-align: right"><?php echo number_format($total_factura,2);?></td> 
		</tr>
</table>
       <br> 
        <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
           <td style="width:50%;" class='midnight-blue'>VENTA</td>
        </tr>
        <tr>
           <td style="width:50%;" >
			<?php 
			echo " Solicitante: ";
			echo $solicitante; 
			echo "<br> ----------------------------------------------------------------------- ";
			echo "<br> Monto Cancelado: ";
			echo $ventatotal;
			echo "<br> Fecha: ";
			echo $fecha_factura;
			echo "<br> -----------------------------------------------------------------------";
			echo "<br> Vendedor: ";
			echo $vendedor;
			?> 
		   </td>
        </tr> 
			  </table>  
	<br>
  

	
	
	<br>
	<div style="font-size:11pt;text-align:center;font-weight:bold">Dios le bendiga!</div>
	
	
	  

</page>

