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
       <?php
	   function dependencia($dep){
		switch ($dep) { 
   			case 1:  
				 $n1='OFICINA';
        	break;
			case 2:  
				 $n1='CEMENTERIO';
        	break;
			case 3:  
				 $n1='OTROS';
        	break;
		default: 
				$n1='OTROS';
		break;
}
return $n1;
}
	   ?>
	<br> 
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
  <tr>
    <td colspan="3" class='midnight-blue' align="center">PAPELETA DE SALIDA</td>
  </tr>
  <?php 
			$idpersmio=$rw_permiso[0]; 
						$Trabajador=$rw_permiso[2]; 
						$motivo=$rw_permiso[3]; 
						$fecha_permiso1=$rw_permiso[4];
						$fecha_permiso=date("d-m-Y",strtotime($fecha_permiso1)); 
						$tiempo=$rw_permiso[5];
						$usuario=$rw_permiso[6]; 
						$dependencia=$rw_permiso[7];
						?>
  <tr>
    <td colspan="3">
			<?php echo "<b>FECHA:</b> ";
			echo $fecha_permiso; 
			//echo "<br> ----------------------------------------------------------------------- "; ?>
    </td>
  </tr>
  <tr>
    <td colspan="3">
			<?php echo "<b>NOMBRE DEL SERVIDOR: </b>";
			echo $Trabajador; 
			//echo "<br> ----------------------------------------------------------------------- "; ?>
    </td>
  </tr>
  <tr>
    <td colspan="3">
			<?php echo "<b>DEPENDENCIA: </b>";
			echo dependencia($dependencia);  
			//echo "<br> -----------------------------------------------------------------------"; ?>
    </td>
  </tr>
  <tr>
    <td colspan="3">
			<?php 
			echo "<br>";
			echo $tiempo;
			//echo "<br> ----------------------------------------------------------------------- ";
			?>
    </td>
  </tr>
  <tr>
    <td colspan="3">
			<?php echo "<br>"; 
			echo "<b>MOTIVO: </b>";
			echo $motivo; 
			//echo "<br> ----------------------------------------------------------------------- "; ?>
    </td>
  </tr>
  <tr>
    <td align="center"><?php 
		  	echo "<br> ------------------------ "; 
			echo "<br>   Jefe Inmediato: "; 
			?>
    </td>
    <td align="center">
    		<?php 
		  	echo "<br> ------------------------ "; 
			echo "<br>      Administrador: "; 
			?>
    </td>
    <td align="center">
    		<?php 
		  	echo "<br> ------------------------ "; 
			echo "<br>        Servidor: "; 
			?>
    </td>
  </tr>
</table>
<br /><br />
	<div style="font-size:11pt;text-align:center;font-weight:bold">Dios le bendiga!</div>
	
	
	  

</page>

