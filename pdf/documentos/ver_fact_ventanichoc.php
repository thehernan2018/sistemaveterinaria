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
	//Archivo de funciones PHP
	include("../../funciones.php");
	include('../../convertirmoneda.php');
	$idventa= intval($_GET['idventa']);
	$sql_count=mysqli_query($con,"select * from t_ventas  where idventa='".$idventa."'");
	$count=mysqli_num_rows($sql_count);
	if ($count==0)
	{
	echo "<script>alert('Factura no encontrados')</script>";
	echo "<script>window.close();</script>";
	exit;
	}
	/*
$sql_factura=mysqli_query($con,"select tvs.idventa, tpd.nombre, tpd.apellido,  tps.nombre, tps.apellido, tpu.nombre, tpu.apellido,tvs.fecha, tvs.totalventa
from t_ventas tvs, t_persona tpd, t_persona tps, t_usuario tu, t_persona tpu
WHERE 	
tvs.iddifunto=tpd.idpersona and 
tvs.idsolicitante=tps.idpersona and
tvs.idusuario=tu.idusuario and
tu.idpersona=tpu.idpersona and 
tvs.idventa='".$idventa."'
order by tvs.idventa desc");
*/
$sql_factura=mysqli_query($con,"select tvs.idventa,tps.dni, concat(tps.nombre, ' ', tps.apellido) as solicitante, tps.direccion, concat(tpd.nombre, ' ', tpd.apellido) as difunto, td.ubicacion, tvs.fecha, tvs.totalventa
from t_ventas tvs, t_detalleventanicho tdvn, t_persona tpd, t_persona tps, t_difunto td
WHERE  
tvs.idsolicitante=tps.idpersona  and 
tdvn.iddifunto=tpd.idpersona and 
tdvn.iddifunto=td.idpersona  and 
tdvn.idventanicho=tvs.idventa  and  
tvs.idventa='".$idventa."'
order by tvs.idventa desc");
	$rw_factura=mysqli_fetch_row($sql_factura);
						$numero_factura=$rw_factura[0];
						$dnisolicitante=$rw_factura[1];
						$solicitante=$rw_factura[2];
						$dsolicitante=$rw_factura[3];
						$difunto=$rw_factura[4]; 
						$ubidifunto=$rw_factura[5];  
						$fecha_factura=$rw_factura[6]; 
						$ventatotal=$rw_factura[7];  
	$simbolo_moneda=get_row('perfil','moneda', 'id_perfil', 1);
	
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/res/ver_fact_ventadenichoc_html.php');
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
