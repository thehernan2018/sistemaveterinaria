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
	border-top: solid 1px #FF0000;
	
}
.border-left{
	border-left: solid 1px #FF0000;
}
.border-right{
	border-right: solid 1px #FF0000;
}
.border-bottom{
	border-bottom: solid 1px #FF0000;
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
            <br><?php echo get_row('perfil','direccion', 'id_perfil', 1).", ". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?><br> 
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
    <td colspan="4" style="width: 100%;">Cuota Fondo Mortuorio Mes de: <?php echo $operacion; ?>  del <?php echo date("Y",strtotime($fecha_factura)); ?></td>
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
	<br> <br> <br> <br> <br> 
-------------------------------------------------------------------------------------------------------------------------------->
    <br> <br> <br> <br> 
	
    
<table align="center"  border="0" style="width: 100%;">
  <tr>
    <td rowspan="5" style="widtdh 13%;">&nbsp;</td>
    <td  rowspan="3" style="color: #34495e;font-size:12px;text-align:center; width:68%;" align="center">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br><?php echo get_row('perfil','direccion', 'id_perfil', 1).", ". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?><br> 
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
    <td colspan="4" style="width: 100%;">Cuota Fondo Mortuorio Mes de: <?php echo $operacion; ?>  del <?php echo date("Y",strtotime($fecha_factura)); ?></td>
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
<br><br> 
</page> 
<page backtop="15mm" backbottom="15mm" backleft="30mm" backright="20mm" style="font-size: 12pt; font-family: arial" >
        <page_footer>
    </page_footer> 
<!-- CONTRATO -->
<table align="center"  border="0" style="width: 100%;">
  <tr>
    <td style="widtdh 13%;">&nbsp;</td>
    <td style="color: #34495e;font-size:12px;text-align:center; width:25%;" align="center">
<img src="../../img/mmpv.png" alt="Logo" width="129px" style="width: 250px; height:100px"><br>
    </td>
    <td style="color: #34495e;font-size:12px;text-align:center; width:60%;" align="center">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><br><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br><?php echo get_row('perfil','direccion', 'id_perfil', 1).", ". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?><br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?> 
    </td>
    <td style="width: 2%;" rowspan="3">&nbsp;</td>
  </tr> 
   
</table>  

<p class="MsoNormal" style="text-align: center;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;CONTRATO&nbsp; N&deg; &nbsp; <?php echo $numcontrato; ?>&nbsp; MUTUAL MORTUORIA</strong></p> 
<p class="MsoNormal" style="text-align: justify; font-size:12px;">Por el presente Contrato La Mutual de Servicios Mortuorio de la Sociedad de Beneficencia de Paita, representada por la Sra. KARINA QUEREVALU RUESTA &nbsp;identificada con DNI &nbsp;N&deg; 03492151, con domicilio legal en, &nbsp;A.H LAS MERCEDES Mz C LOTE. 03 &nbsp;&nbsp;, de esta ciudad, el Sr. (a)&nbsp; <?php echo $id_solicitante; ?>, quien en adelante se le denominar&aacute; TITULAR identificado (a) con DNI&nbsp; N&deg; <?php echo $dni_solicitante; ?> domiciliado en: <?php echo $dire_solicitante; ?> &nbsp;de profesi&oacute;n u ocupaci&oacute;n en su centro de Trabajo denominado &nbsp;acuerdan lo siguiente:</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">PRIMERO.- La Mutual de Servicio Mortuorio, es el servicio familiar que presta la Sociedad de Beneficencia de Paita al P&uacute;blico en general, con la finalidad de facilitar y/o auxiliar a los hogares de medianos y bajos recursos econ&oacute;micos, en los momentos cr&iacute;ticos ocasionados por el fallecimiento de uno de sus miembros, brind&aacute;ndoles un Sepelio decoroso.</p> 
<p class="MsoNormal" style="text-align: justify; font-size:12px;">SEGUNDO.- EL SERVICIO, ser&aacute; otorgado en la Ciudad de Paita, para el TITULAR Y BENEFICIARIOS, del grupo familiar siguiente: <!--[endif]--></p>
 <table cellspacing="0" border="1" style="width: 100%;border-collapse: collapse; font-size:12px; padding: 15px;"> 
	<tr> 
		<th colspan="2" style="width: 33%; font-size:12px;" align="center">NOMBRES Y APELLIDOS</th>
		<th style="width: 8%;text-align: center;" >EDAD</th>
		<th style="width: 16%;text-align: center;" >F. NACIMIENTO</th> 
        <th style="width: 23%;text-align: center;">FECHA DE INSCRIPCION</th> 
        <th style="width: 20%;text-align: center;">SERVICIO A PARTIR DE</th> 
	</tr>
    <?php 
$sql_afiliados_titular = mysqli_query($con,"select ta.idgrupo, concat(tp.nombre, ' ', tp.apellido) as nombres, year(tp.fechanacimiento) as 'edad', tp.fechanacimiento   from t_persona tp, t_afiliado ta, t_tipoafiliado ttf where tp.idpersona=ta.idpersona and ttf.idtipoafiliado=ta.idtipoafiliado and idgrupo='".$grupo."' ORDER by ta.idtipoafiliado");
$contador=1;
				//ta.idafiliado, tp.dni, tp.nombre, tp.apellido, ttf.nombre, ta.idgrupo,ta.idpersona, ta.idtipoafiliado,ta.idgrupo	
				while ($row=mysqli_fetch_row($sql_afiliados_titular)){ 
						$dniafiliado=$row[0]; 
						$personaafiliado=$row[1];
						$edadafiliado=$row[2]; 
						$nac_afiliado=$row[3];  
	?>
    <tr>
    <td style="width: 2%;" align="center"><?php echo $grupo.".".$contador++; ?></td>
    <td style="width: 8%;"><?php echo $personaafiliado; ?></td>
    <td align="center">
    <?php
                         $añoactual=date("Y"); 
                        echo $edadactual=$añoactual - $edadafiliado." Años";
                        ?>
    </td>
    <td align="center"><?php echo date("d/m/Y",strtotime($nac_afiliado)); ?></td>
    <td align="center"><?php echo date("d/m/Y",strtotime($fecha_factura)); ?></td>
    <td align="center"><?php echo date("d/m/Y",strtotime($fecha_factura)); ?></td>
    </tr>
    <?php } ?>
    </table>
                
<p class="MsoNormal" style="text-align: justify; font-size:12px;">Quienes deber&aacute;n acreditar su identidad con los siguientes documentos: copia de DNI o partida de nacimiento si se tratara de menores de edad. El n&uacute;mero de integrantes no deber&aacute; ser mayor de cinco ni menor de tres, asimismo EL TITULAR, no deber&aacute; ser mayor de sesenta a&ntilde;os.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">TERCERO.- La Mutual de Servicio Mortuorio, otorgar&aacute; al TITULAR Y BENEFICIARIOS, inscritos en la cl&aacute;usula segunda:</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">* Nicho en Quinta Fila<br /> * Ata&uacute;d tipo Biblia o Imperial de madera<br /> * Servicio de Capilla Ardiente<br /> * Arreglo Floral</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">CUARTO.- EL TITULAR, se compromete abonar por adelantado a la Mutual de Servicio Mortuorio, la cuota $.20.00 y por &uacute;nica vez abonara el derecho de inscripci&oacute;n de $.25.00</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">QUINTO.- Para&nbsp; gozar de los derechos de la mutual de servicio mortuorio, el TITULAR deber&aacute; tener una antig&uuml;edad de cuatro meses de estar inscrito y estar al d&iacute;a en sus aportaciones.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">Si el TITULAR&nbsp; inscribe a BENEFICIARIOS personas mayores de sesenta (60) a&ntilde;os de edad, en este para gozar del servicio que brinda la Mutual mortuoria deber&aacute;n tener como m&iacute;nimo una antig&uuml;edad de a&ntilde;o y medio de aportaciones&nbsp; y estar al d&iacute;a en las mismas.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">Adem&aacute;s se presentara el Contrato, la papeleta de defunci&oacute;n en original, copia del certificado m&eacute;dico de defunci&oacute;n y los tres &uacute;ltimos recibos de pago.<br /> Si se diera el caso de fallecimiento del titular inscrito en el presente contrato antes de cumplir los cuatro meses no tendr&aacute; derecho al Servicio, asimismo es para los beneficiarios que tengan sesenta a&ntilde;os de edad y no cumplan con el requisito previo, sin embargo se deja expresa constancia que para el caso de accidente no se tendr&aacute; en cuanta el requisito de los cuatro meses continuos para el titular ni para los beneficiarios.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">SEXTO.-Del monto de cuotas abonadas se destinara el 50% que es la cuota capital, para cubrir los gastos de la prestaci&oacute;n del Servicio, la misma que no constituye Patrimonio de la instituci&oacute;n y se depositar&aacute; en una Entidad Bancaria, el 30% se atribuir&aacute; como gastos&nbsp; administrativos y el 20% restante como apoyo Social.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">SEPTIMO.-Los pagos de las cuotas se realizar&aacute;n&nbsp; o tendr&aacute;n fecha de vencimiento aquella fecha en que pagaron la primera cuota que en algunas ocasiones&nbsp; coincidir&aacute; con la firma de &eacute;ste contrato si se tratara de socios nuevos. Los&nbsp; pagos se realizar&aacute;n en las oficinas de la Sociedad de Beneficencia de Paita o se har&aacute;n a trav&eacute;s de una persona debidamente autorizada por la instituci&oacute;n.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">OCTAVO.- EL TITULAR y sus BENEFICIARIOS, perder&aacute;n el derecho a gozar los servicios de la Mutual, cuando dejen de aportar las cuotas establecidas por m&aacute;s de dos meses, siendo declarados como no socios sin ning&uacute;n derecho, si la mora se excediera a m&aacute;s de cuatro meses. Si al tercer mes se pusieran totalmente al d&iacute;a es sus pagos recuperar&aacute;n el derecho despu&eacute;s de un mes.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">NOVENO.- EL TITULAR, en cualquier momento, no habiendo recibido ning&uacute;n Servicio Funerario, teniendo una antig&uuml;edad &nbsp;de socio no mayor a diez a&ntilde;os y nunca haber tenido retrasos en los pagos &nbsp;y por ende estar al d&iacute;a en sus pagos mensuales, podr&aacute; resolver este contrato de com&uacute;n acuerdo con la Mutual, teniendo derecho al reembolso del 50% de las aportaciones que se considera no ser patrimonio de la Sociedad de Beneficencia en el Art. Sexto de este contrato y siendo la devoluci&oacute;n despu&eacute;s de los&nbsp; treinta d&iacute;as de la Resoluci&oacute;n.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO.- Solo proceder&aacute; el cambio del BENEFICIARIO, al fallecimiento de un miembro del grupo familiar, el mismo que tiene que ser menor de sesenta a&ntilde;os, el plazo m&aacute;ximo de cobertura de vacante ser&aacute; de treinta d&iacute;as de efectuado el sepelio. Tambi&eacute;n procede el cambio de titular o beneficiario a solicitud expresa del titular del contrato. En ambos casos el derecho a servicio ser&aacute; de acuerdo a lo establecido en el art&iacute;culo quinto del presente Contrato y se contara a partir del d&iacute;a siguiente de incorporado a la Mutual de Servicio Mortuorio.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">DECIMO PRIMERO.- Se&nbsp; deja establecido que los l&iacute;mites de edad del grupo familiar ser&aacute; de la siguiente manera: EL TITULAR, no deber&aacute; ser mayor de sesenta a&ntilde;os al momento de la inscripci&oacute;n del contrato, se permitir&aacute; que un solo BENEFICIARIO tenga entre sesenta y setenta a&ntilde;os, estando los otros tres en un rango de cero a cincuentainueve &nbsp;a&ntilde;os once meses veintinueve d&iacute;as. En caso de que requieran inscribir a m&aacute;s beneficiarios que cumplan el l&iacute;mite de edad el pago se incrementar&aacute; en 40% de la cuota mensual por cada inscrito.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">DECIMO SEGUNDO.- La vigencia del presente Contrato ser&aacute; por cuatro a&ntilde;os debiendo renovarse para que persista la consistencia legal del acuerdo, sin embargo la asistencia por parte de La Mutual y la obligaci&oacute;n por parte del socio TITULAR, ser&aacute;n de tiempo indefinido. En caso de recibir Los servicios el TITULAR o quien quede como titular deber&aacute; seguir cancelando las cuotas y tendr&aacute; la obligaci&oacute;n &nbsp;de reemplazar al Beneficiario faltante.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO TERCERO.- AL TITULAR, que haciendo gozado de los servicios de LA MUTUAL y decidiera inconsultamente suspender el pago de dos cuotas consecutivas ser&aacute; sometido al fuero Judicial de acuerdo a la Ley de Cementerios debiendo pagar moras e intereses Judiciales por los gastos ocasionados en el proceso legal. Por otro lado se destinara al familiar sepultado a la Fosa Com&uacute;n.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO CUARTO.- Si el TITULAR O BENEFICIARIO, fallecido fuera sepultado en Mausoleo o en nicho adquirido en vida esta perder&aacute; todo derecho de uso del nicho que le proporcione LA MUTUAL. &nbsp;Asimismo si el TITULAR O BENEFICIARIO desearan sepultar al fallecido en un nicho de otro nivel, deber&eacute; cancelar la diferencia entre &eacute;ste y el que le corresponde.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO QUINTO.- LA MUTUAL, si as&iacute; lo deseara podr&aacute; certificar la documentaci&oacute;n &nbsp;correspondiente para otorgar los servicios funerarios, de acuerdo al reglamento de LA MUTUAL de Servicio Mortuorio.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO SEXTO.- Todos&nbsp; los contratos&nbsp; antiguos perder&aacute;n su vigencia, teniendo la obligaci&oacute;n ambas partes de renovarlos y perder&aacute;n su derecho al Servicio si incumplen en los pagos de seis meses consecutivos sin opci&oacute;n a volver a formar parte de la MUTUAL.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO SETIMO.- En caso de fallecimiento del TITULAR del presente contrato. LA MUTUAL de Servicios Mortuorio de la Sociedad de Paita otorgar&aacute; el servicio siempre que uno de los BENEFICIARIOS &nbsp;contin&uacute;e aportando las cuotas establecidas, pasando autom&aacute;ticamente a reemplazar al TITULAR.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO OCTAVO.- En que el titular, inconsultamente usara los servicios funerarios de otras empresas parcial o totalmente dentro de la misma ciudad, LA MUTUAL de Servicio Mortuorio quedara libre de las obligaciones materia del presente contrato. A excepci&oacute;n si el sepelio se realiza en otras provincias, donde LA MUTUAL no pudiera atender el Servicio Funerario s&oacute;lo se le reconocer&aacute; como gastos el valor de:</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">* Ata&uacute;d<br /> * Capilla Ardiente<br /> * Nicho en Quinto Nivel<br /> * Arreglo Floral</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO NOVENO.- De ocurrir desastres naturales o calamidades colectivas, guerra civil o b&eacute;licas y otras de fuerza mayor imprevisibles, La Mutual de servicio Mortuorio se reservar&aacute; el derecho de atenci&oacute;n al servicio de acuerdo a las circunstancias fortuitas.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">VIGESIMO.- EL TITULAR tiene el derecho de denunciar entre la Sociedad de Beneficencia de Paita, las irregularidades que existan en la Operaci&oacute;n del Sistema o Violaci&oacute;n de las Cl&aacute;usulas Contractuales.</p> 
<p class="MsoNormal" style="text-align: right;font-size:12px;" align="right">
<?php

?>
Paita, 07 de Junio de 2017 <br style="font-size:12px;"> POR
<br style="font-size:12px;">BENEFICENCIA DE PAITA &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
</p>  
<p class="MsoNormal" style="font-size:12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;TITULAR </p>
<p class="MsoNormal" style="font-size:12px;"><br> <br>&nbsp; &nbsp; &nbsp; &nbsp; 
<?php echo $id_solicitante; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<br style="font-size:12px;">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<?php echo $dni_solicitante; ?>
</p> 

    <!-- FIN DE CONTRATO -->

<br><br><br><br> <br><br><br><br> <br><br><br><br> 
</page> 
<page backtop="15mm" backbottom="15mm" backleft="30mm" backright="20mm" style="font-size: 12pt; font-family: arial" >
        <page_footer>
    </page_footer> 
<!-- CONTRATO -->
<table align="center"  border="0" style="width: 100%;">
  <tr>
    <td style="widtdh 13%;">&nbsp;</td>
    <td style="color: #34495e;font-size:12px;text-align:center; width:25%;" align="center">
<img src="../../img/mmpv.png" alt="Logo" width="129px" style="width: 250px; height:100px"><br>
    </td>
    <td style="color: #34495e;font-size:12px;text-align:center; width:60%;" align="center">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><br><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br><?php echo get_row('perfil','direccion', 'id_perfil', 1).", ". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?><br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?> 
    </td>
    <td style="width: 2%;" rowspan="3">&nbsp;</td>
  </tr> 
   
</table>  

<p class="MsoNormal" style="text-align: center;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;CONTRATO&nbsp; N&deg; &nbsp; <?php echo $numcontrato; ?>&nbsp; MUTUAL MORTUORIA</strong></p> 
<p class="MsoNormal" style="text-align: justify; font-size:12px;">Por el presente Contrato La Mutual de Servicios Mortuorio de la Sociedad de Beneficencia de Paita, representada por la Sra. KARINA QUEREVALU RUESTA &nbsp;identificada con DNI &nbsp;N&deg; 03492151, con domicilio legal en, &nbsp;A.H LAS MERCEDES Mz C LOTE. 03 &nbsp;&nbsp;, de esta ciudad, el Sr. (a)&nbsp; <?php echo $id_solicitante; ?>, quien en adelante se le denominar&aacute; TITULAR identificado (a) con DNI&nbsp; N&deg; <?php echo $dni_solicitante; ?> domiciliado en: <?php echo $dire_solicitante; ?> &nbsp;de profesi&oacute;n u ocupaci&oacute;n en su centro de Trabajo denominado &nbsp;acuerdan lo siguiente:</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">PRIMERO.- La Mutual de Servicio Mortuorio, es el servicio familiar que presta la Sociedad de Beneficencia de Paita al P&uacute;blico en general, con la finalidad de facilitar y/o auxiliar a los hogares de medianos y bajos recursos econ&oacute;micos, en los momentos cr&iacute;ticos ocasionados por el fallecimiento de uno de sus miembros, brind&aacute;ndoles un Sepelio decoroso.</p> 
<p class="MsoNormal" style="text-align: justify; font-size:12px;">SEGUNDO.- EL SERVICIO, ser&aacute; otorgado en la Ciudad de Paita, para el TITULAR Y BENEFICIARIOS, del grupo familiar siguiente: <!--[endif]--></p>
 <table cellspacing="0" border="1" style="width: 100%;border-collapse: collapse; font-size:12px; padding: 15px;"> 
	<tr> 
		<th colspan="2" style="width: 33%; font-size:12px;" align="center">NOMBRES Y APELLIDOS</th>
		<th style="width: 8%;text-align: center;" >EDAD</th>
		<th style="width: 16%;text-align: center;" >F. NACIMIENTO</th> 
        <th style="width: 23%;text-align: center;">FECHA DE INSCRIPCION</th> 
        <th style="width: 20%;text-align: center;">SERVICIO A PARTIR DE</th> 
	</tr>
    <?php 
$sql_afiliados_titular = mysqli_query($con,"select ta.idgrupo, concat(tp.nombre, ' ', tp.apellido) as nombres, year(tp.fechanacimiento) as 'edad', tp.fechanacimiento   from t_persona tp, t_afiliado ta, t_tipoafiliado ttf where tp.idpersona=ta.idpersona and ttf.idtipoafiliado=ta.idtipoafiliado and idgrupo='".$grupo."' ORDER by ta.idtipoafiliado");
$contador=1;
				//ta.idafiliado, tp.dni, tp.nombre, tp.apellido, ttf.nombre, ta.idgrupo,ta.idpersona, ta.idtipoafiliado,ta.idgrupo	
				while ($row=mysqli_fetch_row($sql_afiliados_titular)){ 
						$dniafiliado=$row[0]; 
						$personaafiliado=$row[1];
						$edadafiliado=$row[2]; 
						$nac_afiliado=$row[3];  
	?>
    <tr>
    <td style="width: 2%;" align="center"><?php echo $grupo.".".$contador++; ?></td>
    <td style="width: 8%;"><?php echo $personaafiliado; ?></td>
    <td align="center">
    <?php
                         $añoactual=date("Y"); 
                         $edadactual=$añoactual - $edadafiliado;
                        echo $edadactual." Años";
                        ?>
    </td>
    <td align="center"><?php echo $nac_afiliado; ?></td>
    <td align="center"><?php echo date("d/m/Y",strtotime($fecha_factura)); ?></td>
    <td align="center"><?php if($edadactual>=60){echo date("d/m/Y", strtotime("+18 month",strtotime($fecha_factura)));}else{echo date("d/m/Y", strtotime("+6 month",strtotime($fecha_factura)));} ?></td>
    </tr>
    <?php } ?>
    </table>
                
<p class="MsoNormal" style="text-align: justify; font-size:12px;">Quienes deber&aacute;n acreditar su identidad con los siguientes documentos: copia de DNI o partida de nacimiento si se tratara de menores de edad. El n&uacute;mero de integrantes no deber&aacute; ser mayor de cinco ni menor de tres, asimismo EL TITULAR, no deber&aacute; ser mayor de sesenta a&ntilde;os.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">TERCERO.- La Mutual de Servicio Mortuorio, otorgar&aacute; al TITULAR Y BENEFICIARIOS, inscritos en la cl&aacute;usula segunda:</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">* Nicho en Quinta Fila<br /> * Ata&uacute;d tipo Biblia o Imperial de madera<br /> * Servicio de Capilla Ardiente<br /> * Arreglo Floral</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">CUARTO.- EL TITULAR, se compromete abonar por adelantado a la Mutual de Servicio Mortuorio, la cuota $.20.00 y por &uacute;nica vez abonara el derecho de inscripci&oacute;n de $.25.00</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">QUINTO.- Para&nbsp; gozar de los derechos de la mutual de servicio mortuorio, el TITULAR deber&aacute; tener una antig&uuml;edad de cuatro meses de estar inscrito y estar al d&iacute;a en sus aportaciones.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">Si el TITULAR&nbsp; inscribe a BENEFICIARIOS personas mayores de sesenta (60) a&ntilde;os de edad, en este para gozar del servicio que brinda la Mutual mortuoria deber&aacute;n tener como m&iacute;nimo una antig&uuml;edad de a&ntilde;o y medio de aportaciones&nbsp; y estar al d&iacute;a en las mismas.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">Adem&aacute;s se presentara el Contrato, la papeleta de defunci&oacute;n en original, copia del certificado m&eacute;dico de defunci&oacute;n y los tres &uacute;ltimos recibos de pago.<br /> Si se diera el caso de fallecimiento del titular inscrito en el presente contrato antes de cumplir los cuatro meses no tendr&aacute; derecho al Servicio, asimismo es para los beneficiarios que tengan sesenta a&ntilde;os de edad y no cumplan con el requisito previo, sin embargo se deja expresa constancia que para el caso de accidente no se tendr&aacute; en cuanta el requisito de los cuatro meses continuos para el titular ni para los beneficiarios.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">SEXTO.-Del monto de cuotas abonadas se destinara el 50% que es la cuota capital, para cubrir los gastos de la prestaci&oacute;n del Servicio, la misma que no constituye Patrimonio de la instituci&oacute;n y se depositar&aacute; en una Entidad Bancaria, el 30% se atribuir&aacute; como gastos&nbsp; administrativos y el 20% restante como apoyo Social.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">SEPTIMO.-Los pagos de las cuotas se realizar&aacute;n&nbsp; o tendr&aacute;n fecha de vencimiento aquella fecha en que pagaron la primera cuota que en algunas ocasiones&nbsp; coincidir&aacute; con la firma de &eacute;ste contrato si se tratara de socios nuevos. Los&nbsp; pagos se realizar&aacute;n en las oficinas de la Sociedad de Beneficencia de Paita o se har&aacute;n a trav&eacute;s de una persona debidamente autorizada por la instituci&oacute;n.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">OCTAVO.- EL TITULAR y sus BENEFICIARIOS, perder&aacute;n el derecho a gozar los servicios de la Mutual, cuando dejen de aportar las cuotas establecidas por m&aacute;s de dos meses, siendo declarados como no socios sin ning&uacute;n derecho, si la mora se excediera a m&aacute;s de cuatro meses. Si al tercer mes se pusieran totalmente al d&iacute;a es sus pagos recuperar&aacute;n el derecho despu&eacute;s de un mes.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">NOVENO.- EL TITULAR, en cualquier momento, no habiendo recibido ning&uacute;n Servicio Funerario, teniendo una antig&uuml;edad &nbsp;de socio no mayor a diez a&ntilde;os y nunca haber tenido retrasos en los pagos &nbsp;y por ende estar al d&iacute;a en sus pagos mensuales, podr&aacute; resolver este contrato de com&uacute;n acuerdo con la Mutual, teniendo derecho al reembolso del 50% de las aportaciones que se considera no ser patrimonio de la Sociedad de Beneficencia en el Art. Sexto de este contrato y siendo la devoluci&oacute;n despu&eacute;s de los&nbsp; treinta d&iacute;as de la Resoluci&oacute;n.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO.- Solo proceder&aacute; el cambio del BENEFICIARIO, al fallecimiento de un miembro del grupo familiar, el mismo que tiene que ser menor de sesenta a&ntilde;os, el plazo m&aacute;ximo de cobertura de vacante ser&aacute; de treinta d&iacute;as de efectuado el sepelio. Tambi&eacute;n procede el cambio de titular o beneficiario a solicitud expresa del titular del contrato. En ambos casos el derecho a servicio ser&aacute; de acuerdo a lo establecido en el art&iacute;culo quinto del presente Contrato y se contara a partir del d&iacute;a siguiente de incorporado a la Mutual de Servicio Mortuorio.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">DECIMO PRIMERO.- Se&nbsp; deja establecido que los l&iacute;mites de edad del grupo familiar ser&aacute; de la siguiente manera: EL TITULAR, no deber&aacute; ser mayor de sesenta a&ntilde;os al momento de la inscripci&oacute;n del contrato, se permitir&aacute; que un solo BENEFICIARIO tenga entre sesenta y setenta a&ntilde;os, estando los otros tres en un rango de cero a cincuentainueve &nbsp;a&ntilde;os once meses veintinueve d&iacute;as. En caso de que requieran inscribir a m&aacute;s beneficiarios que cumplan el l&iacute;mite de edad el pago se incrementar&aacute; en 40% de la cuota mensual por cada inscrito.</p>
<p class="MsoNormal" style="text-align: justify; font-size:12px;">DECIMO SEGUNDO.- La vigencia del presente Contrato ser&aacute; por cuatro a&ntilde;os debiendo renovarse para que persista la consistencia legal del acuerdo, sin embargo la asistencia por parte de La Mutual y la obligaci&oacute;n por parte del socio TITULAR, ser&aacute;n de tiempo indefinido. En caso de recibir Los servicios el TITULAR o quien quede como titular deber&aacute; seguir cancelando las cuotas y tendr&aacute; la obligaci&oacute;n &nbsp;de reemplazar al Beneficiario faltante.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO TERCERO.- AL TITULAR, que haciendo gozado de los servicios de LA MUTUAL y decidiera inconsultamente suspender el pago de dos cuotas consecutivas ser&aacute; sometido al fuero Judicial de acuerdo a la Ley de Cementerios debiendo pagar moras e intereses Judiciales por los gastos ocasionados en el proceso legal. Por otro lado se destinara al familiar sepultado a la Fosa Com&uacute;n.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO CUARTO.- Si el TITULAR O BENEFICIARIO, fallecido fuera sepultado en Mausoleo o en nicho adquirido en vida esta perder&aacute; todo derecho de uso del nicho que le proporcione LA MUTUAL. &nbsp;Asimismo si el TITULAR O BENEFICIARIO desearan sepultar al fallecido en un nicho de otro nivel, deber&eacute; cancelar la diferencia entre &eacute;ste y el que le corresponde.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO QUINTO.- LA MUTUAL, si as&iacute; lo deseara podr&aacute; certificar la documentaci&oacute;n &nbsp;correspondiente para otorgar los servicios funerarios, de acuerdo al reglamento de LA MUTUAL de Servicio Mortuorio.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO SEXTO.- Todos&nbsp; los contratos&nbsp; antiguos perder&aacute;n su vigencia, teniendo la obligaci&oacute;n ambas partes de renovarlos y perder&aacute;n su derecho al Servicio si incumplen en los pagos de seis meses consecutivos sin opci&oacute;n a volver a formar parte de la MUTUAL.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO SETIMO.- En caso de fallecimiento del TITULAR del presente contrato. LA MUTUAL de Servicios Mortuorio de la Sociedad de Paita otorgar&aacute; el servicio siempre que uno de los BENEFICIARIOS &nbsp;contin&uacute;e aportando las cuotas establecidas, pasando autom&aacute;ticamente a reemplazar al TITULAR.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO OCTAVO.- En que el titular, inconsultamente usara los servicios funerarios de otras empresas parcial o totalmente dentro de la misma ciudad, LA MUTUAL de Servicio Mortuorio quedara libre de las obligaciones materia del presente contrato. A excepci&oacute;n si el sepelio se realiza en otras provincias, donde LA MUTUAL no pudiera atender el Servicio Funerario s&oacute;lo se le reconocer&aacute; como gastos el valor de:</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">* Ata&uacute;d<br /> * Capilla Ardiente<br /> * Nicho en Quinto Nivel<br /> * Arreglo Floral</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">DECIMO NOVENO.- De ocurrir desastres naturales o calamidades colectivas, guerra civil o b&eacute;licas y otras de fuerza mayor imprevisibles, La Mutual de servicio Mortuorio se reservar&aacute; el derecho de atenci&oacute;n al servicio de acuerdo a las circunstancias fortuitas.</p>
<p class="MsoNormal" style="text-align: justify;font-size:12px;">VIGESIMO.- EL TITULAR tiene el derecho de denunciar entre la Sociedad de Beneficencia de Paita, las irregularidades que existan en la Operaci&oacute;n del Sistema o Violaci&oacute;n de las Cl&aacute;usulas Contractuales.</p> 
<p class="MsoNormal" style="text-align: right;font-size:12px;" align="right">
<?php

?>
Paita, 07 de Junio de 2017 <br style="font-size:12px;"> POR
<br style="font-size:12px;">BENEFICENCIA DE PAITA &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
</p>  
<p class="MsoNormal" style="font-size:12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;TITULAR </p>
<p class="MsoNormal" style="font-size:12px;"><br> <br>&nbsp; &nbsp; &nbsp; &nbsp; 
<?php echo $id_solicitante; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<br style="font-size:12px;">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<?php echo $dni_solicitante; ?>
</p> 

    <!-- FIN DE CONTRATO -->
</page>

