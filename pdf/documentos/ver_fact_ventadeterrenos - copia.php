<?php
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

	$idalum= $_GET['idpagoalu'];
	$ae= $_GET['aes'];
	$mespagado= $_GET['mpago'];
    $tipo=$_GET['tipo'];

	$sql_count=mysqli_query($conexion,"SELECT * FROM deporpagarpension  where idalumnos='".$idalum."' 
    and añoescolar='".$ae."' and mes='".$mespagado."'");
	$count=mysqli_num_rows($sql_count);
	if ($count==0)
	{
	echo "<script>alert('Factura no encontrados')</script>";
	echo "<script>window.close();</script>";
	exit;
	}

if ($tipo==1){
$idalum= $_GET['idpagoalu'];
	$ae= $_GET['aes'];
	$mespagado= $_GET['mpago'];
    $tipo=$_GET['tipo'];
    
$sql_factura=mysqli_query($conexion,"SELECT * FROM deporpagarpension d
inner join alumnos a on d.idalumnos=a.idalumnos
inner join matricula m on m.idalumnos=a.idalumnos
 where d.idalumnos='".$idalum."'  and d.añoescolar='".$ae."' and d.mes='".$mespagado."'");
	$rw_factura=mysqli_fetch_row($sql_factura);
						$numero_factura=$rw_factura[0]; 
						$solicitante=$rw_factura[11]." ".$rw_factura[12]; 
						$grado=$rw_factura[21]; 
						$mes=$rw_factura[3]; 
						$fecha_factura=$rw_factura[8]; 
						$ventatotal=$rw_factura[7];  
                        $bono1=$rw_factura[5]; 
                        $bono2=$rw_factura[6]; 
                        $fecha1=$rw_factura[8]; 
                        $fe=$rw_factura[9]; 
                        $cos=$rw_factura[23]; 
}elseif ($tipo==2){
    
   $idalum= $_GET['idpagoalu'];
	$ae= $_GET['aes'];
	$mespagado= $_GET['mpago'];
    $tipo=$_GET['tipo'];
    
    $sql_factura=mysqli_query($conexion,"SELECT * FROM deporpagarpension d
inner join alumnos a on d.idalumnos=a.idalumnos
inner join matricula m on m.idalumnos=a.idalumnos
 where d.idalumnos='".$idalum."'  and d.añoescolar='".$ae."' and d.mes='".$mespagado."'");
	$rw_factura=mysqli_fetch_row($sql_factura);
						$numero_factura=$rw_factura[0]; 
						$solicitante=$rw_factura[11]." ".$rw_factura[12]; 
						$grado=$rw_factura[21]; 
						$mes=$rw_factura[3]; 
						$fecha_factura=$rw_factura[8]; 
						$ventatotal=$rw_factura[7]; 
                        $bono1=$rw_factura[5]; 
                        $bono2=$rw_factura[6]; 
                        $fecha1=$rw_factura[8]; 
                        $fe=$rw_factura[9]; 
                        $cos=$rw_factura[23]; 
    //print_r ($rw_factura);
}
	$simbolo_moneda=get_row('perfil','moneda', 'id_perfil', 1);
	
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/res/ver_fact_ventadeterrenosc_html.php');
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
    
