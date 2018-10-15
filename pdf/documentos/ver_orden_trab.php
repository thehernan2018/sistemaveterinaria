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
	/*
	$idventa= intval($_GET['idventa']);
	$sql_count=mysqli_query($con,"select * from t_ventas  where idventa='".$idventa."'");
	$count=mysqli_num_rows($sql_count);
	if ($count==0)
	{
	echo "<script>alert('Factura no encontrados')</script>";
	echo "<script>window.close();</script>";
	exit;
	}
	*/
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
$sql_factura=mysqli_query($con,"select tot.orden, concat(tps.nombre, ' ', tps.apellido) as solicitante, tps.dni, tot.tipo, td.ubicacion, concat(tpd.nombre, ' ', tpd.apellido) as difunto, tvs.totalventa,  tvs.idventa,tot.otrosaindicar, tot.fecha
                from t_ventas tvs, t_persona tpd, t_persona tps, t_usuario tu, t_difunto td, t_orden_trabajo tot 
                WHERE
                tot.iddifunto=tpd.idpersona and
                tot.idsolicitante=tps.idpersona and 
                tot.iddifunto=td.idpersona and 
                tot.idventa=tvs.idventa and 
                tot.idorden='".$_GET['idortrab']."' limit 1");
	$rw_factura=mysqli_fetch_row($sql_factura);
						$orden=$rw_factura[0];
						$solicitante=$rw_factura[1];
						$dnis=$rw_factura[2];
						$tipoo=$rw_factura[3];
						$ubicaciond=$rw_factura[4]; 
						$difunto=$rw_factura[5];  
						$totalventa=$rw_factura[6]; 
						$idventa=$rw_factura[7]; 
						$otrosaindicar=$rw_factura[8]; 
						$fecha=$rw_factura[9];   
	$simbolo_moneda=get_row('perfil','moneda', 'id_perfil', 1);
	
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/res/ver_orden_trab_html.php');
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
