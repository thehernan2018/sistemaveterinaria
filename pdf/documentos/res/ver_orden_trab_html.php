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
<table border="1" align="center" style="width: 100%; color: #34495e; border-collapse: collapse;">
  <tr>
    <td style="width: 100%;">
    <table border="0" align="left" style="width: 100%; color: #34495e; border-collapse: collapse;" >
      <tr>
        <td style="width: 40%;" align="center" class='midnight-blue'>
          <h3>SOCIENDAD DE BENEFICIENCIA PUBLICA
            DE PAITA</h3>
          </td>
        <td style="width: 40%;"  colspan="3" rowspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td align="center"><b>Km. 1 Mz. &quot;Y&quot; Lote 2 Carretera Paita - Sullana </b> <br>
          <b>Telefax:073-211105</b>
          </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td align="center" style="width: 100%;"><b>ORDEN DE TRABAJO Nº...... <?php echo $orden; ?>. ....2017</b></td>
  </tr>
  <tr>
    <td style="width: 100%;">Mediante el presente documento se autoriza a:<br><br>
    <?php echo $solicitante; ?> 
    con D.N.I. N° <?php echo $dnis; ?>  a realizar trabajos en:
    <br><br>
    
    <table border="0" align="left" style="width: 100%; color: #34495e; border-collapse: collapse;">
         <tr>
           <td colspan="5" style="width: 100%;"  height="25"><?php echo $tipoo; ?> &nbsp;&nbsp;&nbsp; <?php echo $ubicaciond; ?></td> 
          </tr> 
         <tr>
           <td width="11%"  colspan="5" style="width: 100%;" height="25" >Q.E.V.P.:&nbsp;&nbsp;&nbsp;<?php echo $difunto; ?></td> 
          </tr>
          <tr>
           <td style="width: 40%;" colspan="3" height="25">Ha canceladdo en caja S/. <?php echo $totalventa; ?></td> 
           <td width="6%" >&nbsp;</td>
           <td width="36%">&nbsp;</td>
         </tr>
         <tr>
           <td style="width: 15%;" height="25">con R/N :</td>
           <td width="36%" style="width: 15%;" align="left"><?php echo $idventa; ?></td>
           <td> por concepto de:</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td  colspan="3">
           <?php
					$sumador_total=0;
	$sql=mysqli_query($con, "select * from t_servicio, t_detalleventaservicios  where t_servicio.idservicio=t_detalleventaservicios .idservicio and t_detalleventaservicios.idventa='".$idventa."'"); 
	$correlativop="1";
	while ($row=mysqli_fetch_array($sql))
	{
		//idservicio,precioventa, cantidad, session_id
	$id_temp_serventa=$row['iddetalleventaservicio'];
	$idservicio=$row['idservicio'];
	$servicio_nombre=$row['nombre'];   
		?>
	<?php echo $correlativop++.".- ".$servicio_nombre."<br>";
	}?> 
           </td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr> 
          <tr>
           <td colspan="5" height="25">Otros indicar: <?php echo $otrosaindicar; ?></td>
          </tr>
         <tr>
           <td colspan="5" height="25">El presente documento tiene vigencia de treinta dias a partir de la fecha de emisión.</td>
        </tr>
          <tr>
           <td colspan="2" height="25">&nbsp;</td>
           <td colspan="3" align="right" >Paita, 26 de Agosto del 2017</td>
          </tr>
         <tr>
           <td colspan="5">&nbsp;</td> 
         </tr>
         <tr>
           <td colspan="5">&nbsp;</td> 
         </tr>
         <tr>
           <td colspan="5">&nbsp;</td> 
         </tr>
         <tr>
         <td colspan="5" style="width:100%;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ______________________________   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______________________________<br />
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AUTORIZADO SBPP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FIRMA USUARIO
         </td>
         </tr>
         <tr>
           <td colspan="5"><h6>C.C. ARCHIVO <br>C.C. ALBAÑIL <br> C.C.OFICINA CEMENTO</h6></td> 
         </tr>
      </table>
        </td>
  </tr>
   
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table border="1" align="center" style="width: 100%; color: #34495e; border-collapse: collapse;">
  <tr>
    <td style="width: 100%;">
    <table border="0" align="left" style="width: 100%; color: #34495e; border-collapse: collapse;" >
      <tr>
        <td style="width: 40%;" align="center" class='midnight-blue'>
          <h3>SOCIENDAD DE BENEFICIENCIA PUBLICA
            DE PAITA</h3>
          </td>
        <td style="width: 40%;"  colspan="3" rowspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td align="center"><b>Km. 1 Mz. &quot;Y&quot; Lote 2 Carretera Paita - Sullana </b> <br>
          <b>Telefax:073-211105</b>
          </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td align="center" style="width: 100%;"><b>ORDEN DE TRABAJO Nº...... <?php echo $orden; ?>. ....2017</b></td>
  </tr>
  <tr>
    <td style="width: 100%;">Mediante el presente documento se autoriza a:<br><br>
    <?php echo $solicitante; ?> 
    con D.N.I. N° <?php echo $dnis; ?>  a realizar trabajos en:
    <br><br>
    
    <table border="0" align="left" style="width: 100%; color: #34495e; border-collapse: collapse;">
         <tr>
           <td colspan="5" style="width: 100%;"  height="25"><?php echo $tipoo; ?> &nbsp;&nbsp;&nbsp; <?php echo $ubicaciond; ?></td> 
          </tr> 
         <tr>
           <td width="11%"  colspan="5" style="width: 100%;" height="25" >Q.E.V.P.:&nbsp;&nbsp;&nbsp;<?php echo $difunto; ?></td> 
          </tr>
          <tr>
           <td style="width: 40%;" colspan="3" height="25">Ha canceladdo en caja S/. <?php echo $totalventa; ?></td> 
           <td width="6%" >&nbsp;</td>
           <td width="36%">&nbsp;</td>
         </tr>
         <tr>
           <td style="width: 15%;" height="25">con R/N :</td>
           <td width="36%" style="width: 15%;" align="left"><?php echo $idventa; ?></td>
           <td> por concepto de:</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td  colspan="3">
           <?php
					$sumador_total=0;
	$sql=mysqli_query($con, "select * from t_servicio, t_detalleventaservicios  where t_servicio.idservicio=t_detalleventaservicios .idservicio and t_detalleventaservicios.idventa='".$idventa."'"); 
	$correlativop="1";
	while ($row=mysqli_fetch_array($sql))
	{
		//idservicio,precioventa, cantidad, session_id
	$id_temp_serventa=$row['iddetalleventaservicio'];
	$idservicio=$row['idservicio'];
	$servicio_nombre=$row['nombre'];   
		?>
	<?php echo $correlativop++.".- ".$servicio_nombre."<br>";
	}?> 
           </td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr> 
          <tr>
           <td colspan="5" height="25">Otros indicar: <?php echo $otrosaindicar; ?></td>
          </tr>
         <tr>
           <td colspan="5" height="25">El presente documento tiene vigencia de treinta dias a partir de la fecha de emisión.</td>
        </tr>
          <tr>
           <td colspan="2" height="25">&nbsp;</td>
           <td colspan="3" align="right" >Paita, 26 de Agosto del 2017</td>
          </tr>
         <tr>
           <td colspan="5">&nbsp;</td> 
         </tr>
         <tr>
           <td colspan="5">&nbsp;</td> 
         </tr>
         <tr>
           <td colspan="5">&nbsp;</td> 
         </tr>
         <tr>
         <td colspan="5" style="width:100%;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ______________________________   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______________________________<br />
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AUTORIZADO SBPP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FIRMA USUARIO
         </td>
         </tr>
         <tr>

           <td colspan="5"><h6>C.C. ARCHIVO <br>C.C. ALBAÑIL <br> C.C.OFICINA CEMENTO</h6></td> 
         </tr>
      </table>
        </td>
  </tr>
   
</table>
</page>

