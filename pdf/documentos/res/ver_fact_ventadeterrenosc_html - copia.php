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
            <br>
            <?php echo get_row('perfil','direccion', 'id_perfil', 1)."<br>"."-". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?><br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?></td>
    <td rowspan="2" style="width: 29%; border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000">
    &nbsp; R.U.C. N° 20398995318 <br>
    <h4> &nbsp; BOLETA DE VENTA</h4>  
    &nbsp; 0001- Nº <b><?php echo '0'.$numero_factura; ?></b></td>
    <td style="width: 2%;" rowspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td><i>ALUMNO : </i></td>
    <td> <?php echo $solicitante; ?> </td>
  </tr>
  <tr>
    <td><i>GRADO :</i></td>
    <td colspan="2" align="left"><?php echo $grado; ?>  _________<i>MES : <?php echo $mes; ?></i>______ <i>FECHA : 
      <?php 
		if(empty($fe)){
		
				echo date("d-m-Y",strtotime($fecha_factura));
				
			}else{
			
					//echo date("d-m-Y",strtotime($fecha_factura)).' / '.date("d-m-Y",strtotime($fe));
				echo date("d-m-Y",strtotime($fe));
			}
			
		
	
	?>
    </i>  _______</td>
    <td></td>
  </tr> 
</table>  

<table align="center"  border="1" style="width: 100%; color: #34495e; border-collapse: collapse;">
  <tr align="center">
    <td style="width: 88%;">CONCEPTO</td>
    <td width="25%" style="width: 25%;">IMPORTE</td>
  </tr>
   <?php 
  if(!empty($fe)){
			echo '<tr> <td >ADELANTO DE PENSIÒN DIA '.date("d-m-Y",strtotime($fecha_factura)).' S/. </td>  <td>';
  				echo number_format($bono1, 2, '.', '');
			echo '</td></tr>';
			 
			}
	  if(!empty($fe)){
			echo '<tr> <td >COMPLETO PENSIÒN DIA '.date("d-m-Y",strtotime($fe)).' S/. </td>  <td>';
  				echo number_format($bono2, 2, '.', '');
			echo '</td></tr>';
			 
			}
  
  ?>
  
  <tr>
    <td >
    <?php 

	
	if($ventatotal==0){
		
			echo 'ADELANTO DEL MES DE <i>';
			}else{
				echo 'PENSIÓN DEL MES DE <i>';
				}
	
	?>
    
	
	<?php 
	//echo $mes;
	 if ($mes=="1")  {
            echo "ENERO";
        }
		else 
            if ($mes=="2" ) {
             echo "FEBRERO";
        }else
            if ($mes=="3" ) {
            echo "MARZO";
        }else 
            if ($mes=="4" ) {
             echo "ABRIL";
        }else 
            if ($mes=="5" ) {
             echo "MAYO";
        }else 
             if ($mes=="6" ) {
             echo "JUNIO";
        }else 
             if ($mes=="7" ) {
            echo"JULIO";
        }else 
            if ($mes=="8" ) {
            echo "AGOSTO";
        }else 
            if ($mes=="9" ) {
            echo "SEPTIEMBRE";
        }else 
            if ($mes=="10" ) {
            echo "OCTUBRE";
        }else 
             if ($mes=="11" ) {
             echo "NOVIEMBRE";
        }else
             if ($mes=="12" ) {
            echo "DICIEMBRE";
        }
	
	 ?></i><br>    </td>
    <td><?php 
		//echo $ventatotal; 
		if($ventatotal==0){
			echo $bono1;
			}else{
				echo $ventatotal;
				}
			
	?></td>
  </tr> 
    
  <tr>
    <td align="right"  bgcolor="#E6E6E6">TOTAL S/. </td>
    <td  bgcolor="#E6E6E6"><?php 
			if($ventatotal==0){
			echo $bono1;
			}else{
				echo $ventatotal;
				}
	//echo $ventatotal; 
	
	?></td>
  </tr>
  <?php 
  if($ventatotal==0){
			echo '<tr> <td align="right">RESTA S/. </td>  <td>';
  				echo number_format($cos-$bono1, 2, '.', '');
			echo '</td></tr>';
			 
			}else{
				
				}
  
  ?>
  <tr>
    <td colspan="2">SON: <?php 
	if($ventatotal==0){
		echo convertir($bono1);
		}else{
			echo convertir($ventatotal);
			}
	
	
	 ?> </td>
  </tr>
  
</table>
<span style="color: #34495e;font-size:11;font-weight:bold; font-style:normal; text-align:center ">ESTE RECIBO NO ES VALIDO SI NO LLEVA EL SELLO Y FIRMA DEL CAJERO AUTORIZADO</span>

<br> <br> <br><br><br><br> <br> <br><br><br>
-------------------------------------------------------------------------------------------------------------------------------->
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 

	<table align="center"  border="0" style="width: 100%; color: #34495e;">
  <tr>
    <td rowspan="1" style="width: 13%;"><img style="width: 100px;" src="../../img/avatar_2x.png" alt="Logo"></td>
    <td style="color: #34495e;font-size:12px;text-align:center; width:56%;" align="center">
    <span style="color: #34495e;font-size:14px;font-weight:bold"><?php echo get_row('perfil','nombre_empresa', 'id_perfil', 1);?></span>
            <br>
            <?php echo get_row('perfil','direccion', 'id_perfil', 1)."<br>"."-". get_row('perfil','ciudad', 'id_perfil', 1)." ".get_row('perfil','estado', 'id_perfil', 1);?><br> 
	            Teléfono: <?php echo get_row('perfil','telefono', 'id_perfil', 1);?></td>
    <td rowspan="2" style="width: 29%; border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #000000">
    &nbsp; R.U.C. N° 20398995318 <br>
    <h4> &nbsp; BOLETA DE VENTA</h4>  
    &nbsp; 0001- Nº <b><?php echo '0'.$numero_factura; ?></b></td>
    <td style="width: 2%;" rowspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td><i>ALUMNO : </i></td>
    <td> <?php echo $solicitante; ?> </td>
  </tr>
  <tr>
    <td><i>GRADO :</i></td>
    <td colspan="2" align="left"><?php echo $grado; ?>  _________<i>MES : <?php echo $mes; ?></i>______ <i>FECHA : 
      <?php 
		if(empty($fe)){
		
				echo date("d-m-Y",strtotime($fecha_factura));
				
			}else{
			
					//echo date("d-m-Y",strtotime($fecha_factura)).' / '.date("d-m-Y",strtotime($fe));
				echo date("d-m-Y",strtotime($fe));
			}
			
		
	
	?>
    </i>  _______</td>
    <td></td>
  </tr> 
</table>  

<table align="center"  border="1" style="width: 100%; color: #34495e; border-collapse: collapse;">
  <tr align="center">
    <td style="width: 88%;">CONCEPTO</td>
    <td width="25%" style="width: 25%;">IMPORTE</td>
  </tr>
   <?php 
  if(!empty($fe)){
			echo '<tr> <td >ADELANTO DE PENSIÒN  DIA '.date("d-m-Y",strtotime($fecha_factura)).' S/. </td>  <td>';
  				echo number_format($bono1, 2, '.', '');
			echo '</td></tr>';
			 
			}
	  if(!empty($fe)){
			echo '<tr> <td >COMPLETO PENSIÒN DIA '.date("d-m-Y",strtotime($fe)).' S/. </td>  <td>';
  				echo number_format($bono2, 2, '.', '');
			echo '</td></tr>';
			 
			}
  
  ?>
  
  <tr>
    <td >
    <?php 

	
	if($ventatotal==0){
		
			echo 'ADELANTO DEL MES DE <i>';
			}else{
				echo 'PENSIÓN DEL MES DE <i>';
				}
	
	?>
    
	
	<?php 
	//echo $mes;
	 if ($mes=="1")  {
            echo "ENERO";
        }
		else 
            if ($mes=="2" ) {
             echo "FEBRERO";
        }else
            if ($mes=="3" ) {
            echo "MARZO";
        }else 
            if ($mes=="4" ) {
             echo "ABRIL";
        }else 
            if ($mes=="5" ) {
             echo "MAYO";
        }else 
             if ($mes=="6" ) {
             echo "JUNIO";
        }else 
             if ($mes=="7" ) {
            echo"JULIO";
        }else 
            if ($mes=="8" ) {
            echo "AGOSTO";
        }else 
            if ($mes=="9" ) {
            echo "SEPTIEMBRE";
        }else 
            if ($mes=="10" ) {
            echo "OCTUBRE";
        }else 
             if ($mes=="11" ) {
             echo "NOVIEMBRE";
        }else
             if ($mes=="12" ) {
            echo "DICIEMBRE";
        }
	
	 ?></i><br>    </td>
    <td><?php 
		//echo $ventatotal; 
		if($ventatotal==0){
			echo $bono1;
			}else{
				echo $ventatotal;
				}
			
	?></td>
  </tr> 
    
  <tr>
    <td align="right" bgcolor="#E6E6E6">TOTAL S/. </td>
    <td  bgcolor="#E6E6E6"><?php 
			if($ventatotal==0){
			echo $bono1;
			}else{
				echo $ventatotal;
				}
	//echo $ventatotal; ºº
	
	?></td>
  </tr>
  <?php 
  if($ventatotal==0){
			echo '<tr> <td align="right">RESTA S/. </td>  <td>';
  				echo number_format($cos-$bono1, 2, '.', '');
			echo '</td></tr>';
			 
			}else{
				
				}
  
  ?>
  <tr>
    <td colspan="2">SON: <?php 
	if($ventatotal==0){
		echo convertir($bono1);
		}else{
			echo convertir($ventatotal);
			}
	
	
	 ?> </td>
  </tr>
  
</table>
<span style="color: #34495e;font-size:11;font-weight:bold; font-style:normal; text-align:center ">ESTE RECIBO NO ES VALIDO SI NO LLEVA EL SELLO Y FIRMA DEL CAJERO AUTORIZADO</span>

</page>

