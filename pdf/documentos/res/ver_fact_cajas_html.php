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

	<br> 
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;" align="center">
  <tr>
    <td colspan="3" class='midnight-blue' align="center"><h5><b>RECIBO DE CAJA CHICA</b></h5></td>
  </tr>
  <tr>
    <td colspan="3">
			<?php echo "<b>Recibí de: </b>"."LA SOCIEDAD DE BENEFICENCIA PUBLICA DE PAITA: ";
			//echo $fecha_permiso; 
			//echo "<br> ----------------------------------------------------------------------- "; ?>
    </td>
  </tr>
  <tr>
    <td colspan="3">
			<?php echo "<b>La cantidad de : </b>";
			echo convertir($monto);
			//echo "<br> ----------------------------------------------------------------------- "; ?>
    </td>
  </tr>
  <tr>
    <td colspan="3">
			<?php echo "<b>Por Concepto de: </b>";
				echo $descripcion;    
			//echo "<br> -----------------------------------------------------------------------"; ?>
    </td>
  </tr>
  
  
   <tr>
    <td colspan="3">
			<?php 
			echo "<br>";
			echo "<b>RECIBÍ CONFORME                            </b>";
			date_default_timezone_set('America/Lima');
			//Variable nombre del mes 
$nommes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"); 
//variable nombre día 
$nomdia = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"); 
/* date(j) toma valores de 1 al 31 segun el dia del mes 
date(n) devuelve numero del 1 al 12 segun el mes 
date(w) devuelve 0 a 6 del dia de la semana empezando el domingo 
date(Y) devuelve el año en 4 digitos */ 
$dia = date("j",strtotime($fecha_caja)); //Dia del mes en numero 
$mes = date("n",strtotime($fecha_caja)); //Mes actual en numero 
$diasemana =date("w",strtotime($fecha_caja)); //Dia de semana en numero 

$hoy = $nomdia[$diasemana].", ".$dia." de ".$nommes[$mes-1]." del ".date("Y",strtotime($fecha_caja)).", "."Hora: ".date("g:ia",strtotime($fecha_caja)); 

echo 'Paita,'.$hoy;
			//echo 'Paita, '.date("D-F-Y",strtotime($fecha_caja))."Hora: ".date("g:ia",strtotime($fecha_caja));
			//echo substr($fecha_caja,5,2);
			//echo "<br> ----------------------------------------------------------------------- ";
			?>
    </td>
  </tr>
  <tr>
    <td colspan="3">
			<?php 
			echo "<br>";
			echo "--------------------------------------"; 
			?>
    </td>
  </tr>
  
   <tr>
    <td colspan="3">
			<?php 
			echo "DNI. N°: ".$dniTrabajador; 
			?>
    </td>
  </tr>
  <tr>
    <td colspan="3">
			<?php 
			echo "NOMBRE: ".$Trabajador; 
			?>
    </td>
  </tr>
  
  
  
    <tr>
    <td align="left">
			<?php 
			echo "--------------------------------------"; 
			?>
    </td> 
    <td align="left">
			<?php 
			echo "-------------------------------"; 
			?>
    </td> 
    <td align="left">
			<?php 
			echo "-------------------------------"; 
			?>
    </td>
  </tr>
</table>
<br /><br />
	<div style="font-size:11pt;text-align:center;font-weight:bold">Dios le bendiga!</div>
	
	
	  

</page>

