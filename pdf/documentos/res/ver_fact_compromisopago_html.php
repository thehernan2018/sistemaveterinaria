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

<br><br>
<table align="center"  border="0" style="width: 100%; color: #34495e;font-size:9;">
  <tr>
    <td style="width: 48%;color: #34495e;font-size:9;">
    <table width="100%" border="0">
  <tr>
    <td colspan="5" align="center"><h5>COMPROMISO DE PAGO N° <?php echo $nrocompromiso; ?>  - <?php echo date("Y",strtotime($fecharegistro)); ?> - MIMP/DBPV - SBPP</h5></td>
    </tr>
  <tr>
    <td height="16" colspan="3" style="width: 15%;">ACEPTANTE: &nbsp;&nbsp;<?php echo $aceptante; ?></td>
    <td align="right">DNI/RUC</td>
    <td><?php echo $dnia; ?></td>
  </tr>
  <tr>
    <td height="16" colspan="5">DIRECCIÓN: &nbsp;&nbsp;<?php echo $direcciona; ?></td>
    </tr>
  <tr>
    <td height="16">TELF./CEL.</td>
    <td height="16"><?php echo $telefonoa; ?></td>
    <td height="16">Referencia:</td>
    <td colspan="2" height="20">&nbsp;</td>
    </tr>
  <tr>
    <td height="16">GARANTE:</td>
    <td colspan="2">&nbsp;</td>
    <td align="right">DNI/RUC</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="16">DIRECCIÓN:</td>
    <td colspan="4">&nbsp;</td>
    </tr>
  <tr>
    <td height="16">TELF./CEL.</td>
    <td>&nbsp;</td>
    <td>Referencia:</td>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="4" height="16">Se acepta el presente compromiso de pago por la adquisión de:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" height="16"><b>NICHO UBICADO EN EL CUARTEL:</b> <?php echo $ubicaciond; ?></td>
    </tr>
  <tr>
    <td colspan="5" height="16">TRASPASO DE DEUDA DEL COMPROMISO DE PAGO N° 009-2012 POR S/ <?php $saldo=$precionicho-$abonado; echo $saldo; ?></td>
    </tr>
  <tr>
    <td colspan="5" align="left" height="16">&nbsp;&nbsp;&nbsp;&nbsp;QEVF. <?php echo $difunto; ?></td>
    </tr>
  <tr>
    <td height="16">&nbsp;</td>
    <td>&nbsp;</td>
    <td height="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio Nicho</td>
    <td>&nbsp;</td>
    <td align="right"><?php echo $precionicho; ?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td height="16">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abonado</td>
    <td>&nbsp;</td>
    <td align="right"><?php echo $abonado; ?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td height="16">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saldo</td>
    <td>&nbsp;</td>
    <td align="right"><?php echo $saldo; ?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" height="16">Orden de Inhumación N° &nbsp;&nbsp;&nbsp;  <?php echo $nroorden; ?></td>
    </tr>
  <tr>
    <td colspan="5">
    FECHA DE PAGO <br>
    <?php
	$sql_dtc="select fechacompromisopago, monto from t_detallecompromiso where idcompromiso='".$_GET['idcompp']."'";
	$query_dtc = mysqli_query($con, $sql_dtc);
	$num_dtc=mysqli_num_rows($query_dtc);
	if ($num_dtc>0){
		while ($row_dtc=mysqli_fetch_row($query_dtc)){
			echo "&nbsp;&nbsp;&nbsp;".date("d-m-Y",strtotime($row_dtc[0]))."............".$row_dtc[1]."<br>";
			
		}
	}
	?> 
    </td>
    </tr>
  <tr>
    <td colspan="5" height="16">En caso de Incumplimiento revierte el nicho a la institución y los restos seran trasladados a la fosa común</td>
    </tr>
  <tr>
    <td colspan="4" align="right" height="16">
    <?php
	date_default_timezone_set('America/Lima'); 
$nommes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");   
$dia = date("j",strtotime($fecharegistro)); 
$mes = date("n",strtotime($fecharegistro));  
$hoy = $dia." de ".$nommes[$mes-1]." del ".date("Y",strtotime($fecharegistro)); 

echo 'Paita, '.$hoy;
	?>  
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" height="16">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2" align="center">FIRMA DEL ACEPTANTE</td>
    <td>&nbsp;</td>
    <td colspan="2" align="center">FIRMA DE GARANTE</td>
    </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2" align="center">
    ................................................. <br>
    <?php echo $aceptante; ?> <br>
    <?php echo $dnia; ?> <br>
    DNI</td>
    <td>&nbsp;</td>
    <td colspan="2" align="center">................................................. <br><br><br>DNI</td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    </tr> 
</table>

    </td>
    <td style="width: 4%;">&nbsp;</td>
    <td style="width: 48%;">
     <table width="100%" border="0">
  <tr>
    <td colspan="5" align="center"><h5>COMPROMISO DE PAGO N° <?php echo $nrocompromiso; ?>  - <?php echo date("Y",strtotime($fecharegistro)); ?> - MIMP/DBPV - SBPP</h5></td>
    </tr>
  <tr>
    <td height="16" colspan="3" style="width: 15%;">ACEPTANTE: &nbsp;&nbsp;<?php echo $aceptante; ?></td>
    <td align="right">DNI/RUC</td>
    <td><?php echo $dnia; ?></td>
  </tr>
  <tr>
    <td height="16" colspan="5">DIRECCIÓN: &nbsp;&nbsp;<?php echo $direcciona; ?></td>
    </tr>
  <tr>
    <td height="16">TELF./CEL.</td>
    <td height="16"><?php echo $telefonoa; ?></td>
    <td height="16">Referencia:</td>
    <td colspan="2" height="20">&nbsp;</td>
    </tr>
  <tr>
    <td height="16">GARANTE:</td>
    <td colspan="2">&nbsp;</td>
    <td align="right">DNI/RUC</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="16">DIRECCIÓN:</td>
    <td colspan="4">&nbsp;</td>
    </tr>
  <tr>
    <td height="16">TELF./CEL.</td>
    <td>&nbsp;</td>
    <td>Referencia:</td>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="4" height="16">Se acepta el presente compromiso de pago por la adquisión de:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" height="16"><b>NICHO UBICADO EN EL CUARTEL:</b> <?php echo $ubicaciond; ?></td>
    </tr>
  <tr>
    <td colspan="5" height="16">TRASPASO DE DEUDA DEL COMPROMISO DE PAGO N° 009-2012 POR S/ <?php $saldo=$precionicho-$abonado; echo $saldo; ?></td>
    </tr>
  <tr>
    <td colspan="5" align="left" height="16">&nbsp;&nbsp;&nbsp;&nbsp;QEVF. <?php echo $difunto; ?></td>
    </tr>
  <tr>
    <td height="16">&nbsp;</td>
    <td>&nbsp;</td>
    <td height="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio Nicho</td>
    <td>&nbsp;</td>
    <td align="right"><?php echo $precionicho; ?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td height="16">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abonado</td>
    <td>&nbsp;</td>
    <td align="right"><?php echo $abonado; ?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td height="16">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saldo</td>
    <td>&nbsp;</td>
    <td align="right"><?php echo $saldo; ?>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" height="16">Orden de Inhumación N° &nbsp;&nbsp;&nbsp;  <?php echo $nroorden; ?></td>
    </tr>
  <tr>
    <td colspan="5">
    FECHA DE PAGO <br>
    <?php
	$sql_dtc="select fechacompromisopago, monto from t_detallecompromiso where idcompromiso='".$_GET['idcompp']."'";
	$query_dtc = mysqli_query($con, $sql_dtc);
	$num_dtc=mysqli_num_rows($query_dtc);
	if ($num_dtc>0){
		while ($row_dtc=mysqli_fetch_row($query_dtc)){
			echo "&nbsp;&nbsp;&nbsp;".date("d-m-Y",strtotime($row_dtc[0]))."............".$row_dtc[1]."<br>";
			
		}
	}
	?> 
    </td>
    </tr>
  <tr>
    <td colspan="5" height="16">En caso de Incumplimiento revierte el nicho a la institución y los restos seran trasladados a la fosa común</td>
    </tr>
  <tr>
    <td colspan="4" align="right" height="16">
    <?php
	date_default_timezone_set('America/Lima'); 
$nommes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");   
$dia = date("j",strtotime($fecharegistro)); 
$mes = date("n",strtotime($fecharegistro));  
$hoy = $dia." de ".$nommes[$mes-1]." del ".date("Y",strtotime($fecharegistro)); 

echo 'Paita, '.$hoy;
	?>  
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" height="16">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2" align="center">FIRMA DEL ACEPTANTE</td>
    <td>&nbsp;</td>
    <td colspan="2" align="center">FIRMA DE GARANTE</td>
    </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2" align="center">
    ................................................. <br>
    <?php echo $aceptante; ?> <br>
    <?php echo $dnia; ?> <br>
    DNI</td>
    <td>&nbsp;</td>
    <td colspan="2" align="center">................................................. <br><br><br>DNI</td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    </tr> 
</table>
    </td>
  </tr>
</table>

</page>

