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
if (isset($_GET['idventado'])){ 
$sql_factura=mysqli_query($con,"select toi.nroorden, concat(tps.nombre, ' ', tps.apellido) as solicitante, tps.direccion, tps.dni,td.ubicacion, concat(tpd.nombre, ' ', tpd.apellido) as difunto, toi.fallecio, toi.enfermedad, toi.papeletadifuncion, toi.municipalidad, toi.idcompromisopago,toi.observaciones, toi.sepelio, toi.fecharegistro 
from t_ordeninhumacion toi, t_persona tpd, t_persona tps, t_difunto td
WHERE  
toi.idsolicitante =tps.idpersona  and 
toi.iddifunto  =tpd.idpersona and 
toi.iddifunto  =td.idpersona  and  
toi.iddonacion='".$_GET['idventado']."' 
");
}
	$rw_factura=mysqli_fetch_row($sql_factura);
						$nroorden=$rw_factura[0];
						$solicitante=$rw_factura[1];
						$direccions=$rw_factura[2];
						$dnis=$rw_factura[3];
						$ubicaciond=$rw_factura[4]; 
						$difunto=$rw_factura[5];  
						$falleciod=$rw_factura[6]; 
						$enfermedadd=$rw_factura[7]; 
						$papeletadifunciond=$rw_factura[8]; 
						$municipalidadd=$rw_factura[9]; 
						$observacionesd=$rw_factura[11]; 
						$sepeliod=$rw_factura[12]; 
						$fecharegistroo=$rw_factura[13];   
	$simbolo_moneda=get_row('perfil','moneda', 'id_perfil', 1);
	
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/res/ver_ordeninh_nichodo_html.php');
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
