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
          <span style="color: #34495e;font-size:17px;font-weight:bold; font-style:normal;">MUTUAL MORTUORIA</span>
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
    <td> <?php echo $solicitante; ?> _</td>
  </tr>
  <tr>
  <td><i>DOMICILIO : </i></td>
  <td colspan="2"> <?php echo $dsolicitante; ?> ___________________________________________________</td>
  </tr> 
  <tr>
  <td><i>R.U.C. N° :</i></td>
  <td align="left"> <?php echo $dnisolicitante; ?> _________________ <i>FECHA DE EMESIÓN: </i></td>
  <td> <?php echo date("d-m-Y",strtotime($fecha_factura));?> ____________</td>
  <td></td>
  </tr> 
</table>  

<table align="center"  border="1" style="width: 100%; color: #34495e; border-collapse: collapse;">
  <tr align="center">
    <td style="width: 25%;">CODIGO</td>
    <td style="width: 50%;">CONCEPTO</td>
    <td style="width: 25%;">IMPORTE</td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>Venta de Nicho pago al contado  <br>
    QEVF: <?php echo $difunto; ?> <br>
    CUARTEL: <?php echo $ubidifunto; ?>
    </td>
    <td><?php echo $ventatotal; ?></td>
  </tr> 
  <tr>
    <td colspan="2" align="right">TOTAL S/. </td>
    <td><?php echo $ventatotal; ?></td>
  </tr>
  <tr>
    <td colspan="3">SON: <?php echo convertir($ventatotal); ?> </td>
  </tr>
  
</table>
<span style="color: #34495e;font-size:11;font-weight:bold; font-style:normal; text-align:center ">ESTE RECIBO NO ES VALIDO SI NO LLEVA EL SELLO Y FIRMA DEL CAJERO AUTORIZADO</span>

<br> <br> <br><br><br>
-------------------------------------------------------------------------------------------------------------------------------->
    <br> <br> <br> <br> <br> 

	<table align="center"  border="0" style="width: 100%; color: #34495e;">
  <tr>
    <td rowspan="1" style="width: 13%;"><img style="width: 100px;" src="../../img/avatar_2x.png" alt="Logo"></td>
    <td style="color: #34495e;font-size:12px;text-align:center; width:56%;" align="center">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br><?php echo get_row('perfil','direccion', 'id_perfil', 1).", ". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?>(Costado del Cementerio)<br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?><br>
          <span style="color: #34495e;font-size:17px;font-weight:bold; font-style:normal;">MUTUAL MORTUORIA</span>
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
    <td> <?php echo $solicitante; ?> _</td> 
  </tr>
  <tr>
  <td><i>DOMICILIO : </i></td>
  <td colspan="2"> <?php echo $dsolicitante; ?> ___________________________________________________</td>
  </tr> 
  <tr>
  <td><i>R.U.C. N° :</i></td>
  <td align="left"> <?php echo $dnisolicitante; ?> _________________ <i>FECHA DE EMESIÓN: </i></td>
  <td> <?php echo date("d-m-Y",strtotime($fecha_factura));?> ____________</td>
  <td></td>
  </tr> 
</table>  

<table align="center"  border="1" style="width: 100%; color: #34495e; border-collapse: collapse;">
  <tr align="center">
    <td style="width: 25%;">CODIGO</td>
    <td style="width: 50%;">CONCEPTO</td>
    <td style="width: 25%;">IMPORTE</td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>Venta de Nicho pago al contado  <br>
    QEVF: <?php echo $difunto; ?> <br>
    CUARTEL: <?php echo $ubidifunto; ?>
    </td>
    <td><?php echo $ventatotal; ?></td>
  </tr> 
  <tr>
    <td colspan="2" align="right">TOTAL S/. </td>
    <td><?php echo $ventatotal; ?></td>
  </tr>
  <tr>
    <td colspan="3">SON: <?php echo convertir($ventatotal); ?> </td>
  </tr>
  
</table>
<span style="color: #34495e;font-size:11;font-weight:bold; font-style:normal; text-align:center ">ESTE RECIBO NO ES VALIDO SI NO LLEVA EL SELLO Y FIRMA DEL CAJERO AUTORIZADO</span>

</page>

