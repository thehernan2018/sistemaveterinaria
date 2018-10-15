<?php
	/*-------------------------
	Autor: HCDD_MAH
	---------------------------*/
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: ../../login.php");
		exit;
    }
	/* Connect To Database*/
	include("../../config/db.php");
	include("../../config/conexion.php");
	include('../../convertirmoneda.php'); 
	//Archivo de funciones PHP
	include("../../funciones.php");
	$idcaja= intval($_GET['idcaja']);
	$sql_count=mysqli_query($con,"select * from t_cajachica  where id_cajachica ='".$idcaja."'");
	$count=mysqli_num_rows($sql_count);
	if ($count==0)
	{
	echo "<script>alert('Factura no encontrados')</script>";
	echo "<script>window.close();</script>";
	exit;
	}
	$sql_caja=mysqli_query($con,"select tcaj.id_cajachica , tcaj.idtrabajador, concat_WS(' ',tpt.nombre, tpt.apellido) as 'trabajador', tpt.dni, tcaj.descripcion , tcaj.fecha, tcaj.monto, concat_WS(' ', tpu.nombre, tpu.apellido) as 'usuario' from t_cajachica tcaj INNER JOIN t_trabajador tt ON tcaj.idtrabajador = tt.idtrabajador INNER JOIN t_persona tpt ON tt.idpersona = tpt.idpersona INNER JOIN t_usuario tu ON tcaj.idusuario = tu.idusuario INNER JOIN t_persona tpu ON tu.idpersona = tpu.idpersona  and tcaj.id_cajachica='".$idcaja."' order by tpt.nombre desc");
	$rw_caja=mysqli_fetch_row($sql_caja);
						$idcaja=$rw_caja[0]; 
						$Trabajador=$rw_caja[2]; 
						$dniTrabajador=$rw_caja[3]; 
						$descripcion=$rw_caja[4]; 
						$fecha_caja=$rw_caja[5]; 
						$monto=$rw_caja[6];
						$usuario=$rw_caja[7];   
	$simbolo_moneda=get_row('perfil','moneda', 'id_perfil', 1);
	
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/res/ver_fact_cajas_html.php');
    $content = ob_get_clean();

    try
    {
        // init HTML2PDF
        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', array(0, 0, 0, 0));
        // display the full page
        $html2pdf->pdf->SetDisplayMode('fullpage');
        // convert
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        // send the PDF
        $html2pdf->Output('Factura.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
