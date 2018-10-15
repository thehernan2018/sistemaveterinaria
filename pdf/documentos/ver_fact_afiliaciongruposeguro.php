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
	$idgrupo= intval($_GET['idgrupo']);
	$venta= intval($_GET['venta']);
	$sql_count=mysqli_query($con,"select * from t_grupo  where idgrupo='".$idgrupo."'");
	$count=mysqli_num_rows($sql_count);
	if ($count==0)
	{
	echo "<script>alert('Factura y grupo no encontrados')</script>";
	echo "<script>window.close();</script>";
	exit;
	} 
	//$sqlvent="select tv.idventa, tv.nrecibo, tv.fecha, tv.totalventa, tp.idgrupo, tp.idoperacionafiliado, tg.ncontrato from t_ventas tv, t_pagos tp, t_grupo tg, t_persona tps where tv.idventa=tp.idventa and tps.idpersona=tv.idusuario and tp.idgrupo=tg.idgrupo and tp.idgrupo='".$grupoasegurado."' GROUP BY tv.idventa";

	$sql_factura=mysqli_query($con,"select tv.idventa,tps.dni,tps.direccion, concat(tps.nombre,' ', tps.apellido) as sol, concat(tpu.nombre,' ', tpu.apellido) as usu, tv.fecha, tv.totalventa, tp.idgrupo, tp.idoperacionafiliado,tv.nrecibo, tg.ncontrato from t_ventas tv, t_pagos tp,t_grupo tg, t_persona tps, t_persona tpu where tv.idventa=tp.idventa and tps.idpersona=tv.idsolicitante  and tpu.idpersona=tv.idusuario and tp.idgrupo=tg.idgrupo and tp.idgrupo='".$idgrupo."' and tv.idventa='".$venta."' ");
	$rw_factura=mysqli_fetch_row($sql_factura);
						$numero_factura=$rw_factura[0];
						$dni_solicitante=$rw_factura[1];
						$dire_solicitante=$rw_factura[2];
						$id_solicitante=$rw_factura[3];
						$id_vendedor=$rw_factura[4];
						$fecha_factura=$rw_factura[5]; 
						$ventatotal=$rw_factura[6]; 
						$grupo=$rw_factura[7];
						$operacion1=$rw_factura[8];
						$nrecibo = $rw_factura[9];
						$numcontrato=$rw_factura[10]; 
						if($operacion1==1){
							$operacion="Inscripción";
						}elseif($operacion1==2){
							$operacion="Reinscripción";
						}
	$simbolo_moneda=get_row('perfil','moneda', 'id_perfil', 1);
	
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/res/ver_fact_afiliaciongruposeguro_html.php');
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
        $html2pdf->Output('Recibo.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
