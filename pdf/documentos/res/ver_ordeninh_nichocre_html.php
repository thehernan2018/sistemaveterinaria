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


<table align="center"  border="1" style="width: 100%; color: #34495e; border-collapse: collapse;">
  <tr align="center">
    <td style="width: 100%;"><h2>SOCIEDAD DE BENEFICENCIA PUBLICA DE PAITA </h2>
    <h4>ORDEN DE INHUMACION N° <?php echo $nroorden; ?>....... <?php echo date("Y",strtotime($fecharegistroo)); ?>...</h4></td>
  </tr>
  <tr>
    <td style="width: 95%;">
    
    <table align="center"  border="0" style="width: 100%; color: #34495e; border-collapse: collapse;">
  <tr>
    <td colspan="2" style="width: 100%;"><i>Señor:  </i></td>
    </tr>
  <tr>
    <td colspan="2"><i>ENCARGADO DEL CEMENTERIO SAN FRANCISCO </i></td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2">Sirvase atender al Sr. (a).: </td>
    </tr>
  <tr>
    <td colspan="2"><i><?php echo $solicitante; ?></i></td>
    </tr>
  <tr>
    <td colspan="2"><i>Dirección: <?php echo $direccions; ?> </i></td>
    </tr>
  <tr>
    <td colspan="2"><i>R.U.C N° <?php echo $dnis; ?></i></td>
    </tr>
  <tr>
    <td colspan="2"><i>Con:  Servicio de Sepultura <?php echo $ubicaciond; ?></i></td>
    </tr>
  <tr>
    <td colspan="2"><i>______________________________________________________________________________  </i></td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2"><i>PARA INHUMAR LOS RESTOS DE: </i></td>
    </tr>
  <tr>
    <td colspan="2"><i>Q.E.V.F: <?php echo $difunto; ?></i></td>
    </tr>
  <tr>
    <td colspan="2"><i>Fallecio: <?php echo date("d-m-Y",strtotime($falleciod)); ?></i></td>
    </tr>
  <tr>
    <td colspan="2"><i>Enfermedad:  <?php echo $enfermedadd; ?></i></td>
    </tr>
  <tr>
    <td colspan="2"><i>Papeleta de Difunción:  <?php echo $papeletadifunciond; ?></i></td>
    </tr>
  <tr>
    <td colspan="2"><i>Municipalidad:  <?php echo $municipalidadd; ?></i></td>
    </tr>
  <tr>
    <td colspan="2"><i>Comprobante de pago: <?php echo $idventa.", "; ?> <?php echo 'C/P N° '.$idcompromisopago; ?> </i></td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2"><i>Observaciones:  <?php echo $observacionesd; ?></i></td>
    </tr>
  <tr>
    <td><i>Sepelio: <?php echo date("d-m-Y",strtotime($sepeliod)); ?></i></td>
    <td><i>Hora: <?php echo date("g:ia",strtotime($sepeliod)); ?></i></td>
  </tr>
  <tr>
    <td colspan="2"><i>______________________________________________________________________________ </i></td>
    </tr>
  <tr>
    <td colspan="2" align="right"><i>
    <?php
	date_default_timezone_set('America/Lima');
			//Variable nombre del mes 
$nommes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"); 
//variable nombre día 
$nomdia = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");   
$dia = date("j",strtotime($fecharegistroo)); //Dia del mes en numero 
$mes = date("n",strtotime($fecharegistroo)); //Mes actual en numero 
$diasemana =date("w",strtotime($fecharegistroo)); //Dia de semana en numero 

$hoy = $dia." de ".$nommes[$mes-1]." del ".date("Y",strtotime($fecharegistroo)); 

echo 'Paita, '.$hoy;
	?> 
    </i></td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________ <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V° B°</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________ <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AUTORIZADO</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telef.: 211108 - Dirección: Carretera Paita - Sullana Km1 Mza. Y Lote. 02</td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
</table>

    
    </td>
  </tr>
</table>

</page>

