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
	<table align="center"  border="0" style="width: 100%;">
  <tr>
    <td rowspan="5" style="widtdh 13%;">&nbsp;</td>
    <td  rowspan="3" style="color: #34495e;font-size:12px;text-align:center; width:68%;" align="center">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br><?php echo get_row('perfil','direccion', 'id_perfil', 1).", ". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?>(Costado del Cementerio)<br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?><br>
          <span style="color: #34495e;font-size:17px;font-weight:bold; font-style:normal;">MUTUAL MORTUORIA</span>
    </td>
    <td style="width: 17%;">&nbsp;</td>
    <td style="width: 2%;" rowspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">RECIBO DE COTIZACIÓN</td>
    </tr>
  <tr>
    <td align="right">Nº <?php echo '0'.$nrecibo; ?></td>
    </tr> 
    <tr> 
    <td></td>
    <td align="right"></td>
    </tr>
  <tr> 
    <td>Fecha de Emisión: <?php echo date("d/m/Y",strtotime($fecha_factura)); ?></td>
    <td align="right">$/. <?php echo $ventatotal; ?></td>
    </tr>
   
</table>  
<style type="text/css"> 
.mytable{border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000;}
</style>
<table border="0" align="center" style="width: 100%; " >
  <tr>
  	<td style="width: 1%;"></td>
    <td style="width: 0%;"></td>
    <td style="width: 96%; border-radius: 16px 16px 16px 16px; -moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000"bordercolor="#000000">
    
    <table style="width: 100%; border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000;" border="0" class="mytable">
  <tr> 
    <td colspan="4" style="width: 100%;" align="left">Hemos Recibido de: <?php echo $id_solicitante; ?> </td> 
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">La Cantidad de: <?php echo convertir($ventatotal); ?></td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;"> _____________________________________________________________________</td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">por Concepto de MUTUAL MORTUORIA CONTRATO N° <?php echo $numcontrato; ?> </td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">_________________________________________________________________________</td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">
    <?php
$sqlra="select monto, idoperacionafiliado, mespago from t_pagos where idventa='".$venta."' and idgrupo='".$grupo."'";
		$queryra = mysqli_query($con,$sqlra);  
		$numrowsra = mysqli_num_rows($queryra); 
		function meses($mes){
		switch ($mes) { 
   case "01":
         $nmes="Enero"; 
         break;
   case "02":
         $nmes="Febrero";  
         break;
   case "03":
         $nmes="Marzo";
         break;
   case "04":
         $nmes="Abril";
         break;
   case "05":
         $nmes="Mayo";
         break;
   case "06":
         $nmes="Junio";
         break;
   case "07":
         $nmes="Julio";
         break;
   case "08":
         $nmes="Agosto";
         break;
   case "09":
         $nmes="Septiembre";
         break;
   case 10:
         $nmes="Octubre";
         break;
   case 11:
         $nmes="Noviembre";
         break;
   case 12:
         $nmes="Diciembre";
         break;

	default: 
	$nmes="Enero"; 
	break;
}
return $nmes;
	}
		if ($numrowsra>=1){  
        $correlativora=1;
		echo "Cuota Fondo Mortuorio Mes de: ";
				while ($rowra=mysqli_fetch_row($queryra)){
						$requesitos=$rowra[1]; 
						$ultimomp=substr($rowra[2], 0, 2);
						//echo meses($mn);
				echo meses($ultimomp)." (".date("Y",strtotime($fecha_factura))."). "; 
				}
		//echo " del ".date("Y",strtotime($fecha_factura));
		}
 ?>
 </td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">Otros:____________________________________________________________________</td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">_________________________________________________________________________</td>
  </tr>
  <tr>
    <td style="width: 50%;"></td>
    <td align="center" style="font-size:10px; width: 50%;">SOCIEDAD DE BENEFICENCIA PUBLICA - PAITA 
    <br>MUTUAL MORTUORIA</td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;"></td>
  </tr>
  <tr>
    <td style="font-size:11px; width: 50%;" align="center"> 
    _____________________________________
    <br>
    SOCIEDAD DE BENEFICENCIA PUBLICA 
    <br>PAITA
    </td>
    <td style="font-size:12px; width: 50%;" >FECHA: <?php echo date("d-m-Y",strtotime($fecha_factura)).", "."Hora: ".date("g:ia",strtotime($fecha_factura)); ?>
    <br> 
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #34495e;font-size:17px;font-weight:bold; font-style:normal;">CANCELADO</span></td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;"></td>
  </tr>
</table> 
    </td>
    <td style="width: 0%;"></td>
    <td style="width: 3%;"></td>
  </tr>
</table>
	<br> <br> <br>
-------------------------------------------------------------------------------------------------------------------------------->
    <br> <br> <br> <br> 

	<table align="center"  border="0" style="width: 100%;">
  <tr>
    <td rowspan="5" style="widtdh 13%;">&nbsp;</td>
    <td  rowspan="3" style="color: #34495e;font-size:12px;text-align:center; width:68%;" align="center">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br><?php echo get_row('perfil','direccion', 'id_perfil', 1).", ". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?>(Costado del Cementerio)<br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?><br>
          <span style="color: #34495e;font-size:17px;font-weight:bold; font-style:normal;">MUTUAL MORTUORIA</span>
    </td>
    <td style="width: 17%;">&nbsp;</td>
    <td style="width: 2%;" rowspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">RECIBO DE COTIZACIÓN</td>
    </tr>
  <tr>
    <td align="right">Nº <?php echo '0'.$nrecibo; ?></td>
    </tr> 
    <tr> 
    <td></td>
    <td align="right"></td>
    </tr>
  <tr> 
    <td>Fecha de Emisión: <?php echo date("d/m/Y",strtotime($fecha_factura)); ?></td>
    <td align="right">$/. <?php echo $ventatotal; ?></td>
    </tr>
   
</table>  
<style type="text/css"> 
.mytable{border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000;}
</style>
<table border="0" align="center" style="width: 100%;" >
  <tr>
  	<td style="width: 1%;"></td>
    <td style="width: 0%;"></td>
    <td style="width: 96%; border-radius: 16px 16px 16px 16px; -moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000"bordercolor="#000000">
    
    <table style="width: 100%; border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000" border="0" class="mytable">
  <tr> 
    <td colspan="4" style="width: 100%;" align="left">Hemos Recibido de: <?php echo $id_solicitante; ?></td> 
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">La Cantidad de: <?php echo convertir($ventatotal); ?></td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;"> _____________________________________________________________________</td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">por Concepto de MUTUAL MORTUORIA CONTRATO N° <?php echo $numcontrato; ?> </td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">_________________________________________________________________________</td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">
    <?php
$sqlra="select monto, idoperacionafiliado, mespago from t_pagos where idventa='".$venta."' and idgrupo='".$grupo."'";
		$queryra = mysqli_query($con,$sqlra);  
		$numrowsra = mysqli_num_rows($queryra); 
		function meses2($mes){
		switch ($mes) { 
   case "1-":
         $nmes="Enero"; 
         break;
   case "2-":
         $nmes="Febrero";  
         break;
   case "3-":
         $nmes="Marzo";
         break;
   case "4-":
         $nmes="Abril";
         break;
   case "5-":
         $nmes="Mayo";
         break;
   case "6-":
         $nmes="Junio";
         break;
   case "7-":
         $nmes="Julio";
         break;
   case "8-":
         $nmes="Agosto";
         break;
   case "9-":
         $nmes="Septiembre";
         break;
   case 10:
         $nmes="Octubre";
         break;
   case 11:
         $nmes="Noviembre";
         break;
   case 12:
         $nmes="Diciembre";
         break;

	default: 
	$nmes="Enero"; 
	break;
}
return $nmes;
	}
		if ($numrowsra>=1){  
        $correlativora=1;
		echo "Cuota Fondo Mortuorio Mes de: ";
				while ($rowra=mysqli_fetch_row($queryra)){
						$requesitos=$rowra[1]; 
						$ultimomp=substr($rowra[2], 0, 2);
						//echo meses($mn);
				echo meses($ultimomp)." (".date("Y",strtotime($fecha_factura))."). "; 
        }
    //echo " del ".date("Y",strtotime($fecha_factura));
    }
 ?>
 </td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">Otros:____________________________________________________________________</td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;">_________________________________________________________________________</td>
  </tr>
  <tr>
    <td style="width: 50%;"></td>
    <td align="center" style="font-size:10px; width: 50%;">SOCIEDAD DE BENEFICENCIA PUBLICA - PAITA 
    <br>MUTUAL MORTUORIA</td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;"></td>
  </tr>
  <tr>
    <td style="font-size:11px; width: 50%;" align="center"> 
    _____________________________________
    <br>
    SOCIEDAD DE BENEFICENCIA PUBLICA 
    <br>PAITA
    </td>
    <td style="font-size:12px; width: 50%;" >FECHA: <?php echo date("d-m-Y",strtotime($fecha_factura)).", "."Hora: ".date("g:ia",strtotime($fecha_factura)); ?>
    <br> 
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #34495e;font-size:17px;font-weight:bold; font-style:normal;">CANCELADO</span></td>
  </tr>
  <tr>
    <td colspan="4" style="width: 100%;"></td>
  </tr>
</table> 
    </td>
    <td style="width: 0%;"></td>
    <td style="width: 3%;"></td>
  </tr>
</table>
	
	  

</page>

