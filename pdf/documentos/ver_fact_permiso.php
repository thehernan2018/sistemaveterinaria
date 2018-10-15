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
	$idpermiso= intval($_GET['idpermiso']);
	$sql_count=mysqli_query($con,"select * from t_permisos  where idpermiso ='".$idpermiso."'");
	$count=mysqli_num_rows($sql_count);
	if ($count==0)
	{
	echo "<script>alert('Factura no encontrados')</script>";
	echo "<script>window.close();</script>";
	exit;
	}
	$sql_permiso=mysqli_query($con,"select tper.idpermiso, tper.idtrabajador, concat_WS(' ',tpt.nombre, tpt.apellido)as 'trabajador', tper.motivo, tper.fecha, tper.tiempo, concat_WS(' ', tpu.nombre, tpu.apellido)as 'usuario', tper.iddependencia from t_permisos tper INNER JOIN t_trabajador tt ON tper.idtrabajador = tt.idtrabajador INNER JOIN t_persona tpt ON tt.idpersona = tpt.idpersona INNER JOIN t_usuario tu ON tper.idusuario = tu.idusuario INNER JOIN t_persona tpu ON tu.idpersona = tpu.idpersona  and tper.idpermiso='".$idpermiso."' order by tpt.nombre desc ");
	$rw_permiso=mysqli_fetch_row($sql_permiso);
						$idpersmio=$rw_permiso[0]; 
						$Trabajador=$rw_permiso[2]; 
						$motivo=$rw_permiso[3]; 
						$fecha_permiso=$rw_permiso[4]; 
						$tiempo=$rw_permiso[5];
						$usuario=$rw_permiso[6];
						$dependencia=$rw_permiso[7];   
	$simbolo_moneda=get_row('perfil','moneda', 'id_perfil', 1);
	
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/res/ver_fact_permisos_html.php');
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
