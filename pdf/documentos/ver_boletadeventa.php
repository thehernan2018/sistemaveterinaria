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

	$idcliente= $_GET['idcliente'];
	$importeneto= $_GET['ine'];
	$igv= $_GET['igv'];
    $total=$_GET['total'];
	$idventa=$_GET['idventa'];
	$tipo=$_GET['tcom'];

	$sqlbus="SELECT * FROM documento  where id_documento='".$idventa."'";
    $sql_count=mysqli_query($conexion,$sqlbus);
                           // echo $sqlbus;

	$count=mysqli_num_rows($sql_count);
	if ($count==0)
	{
	echo "<script>alert('Factura no encontrados')</script>";
	echo "<script>window.close();</script>";
	exit;
	}

if ($tipo==1){
	$idcliente= $_GET['idcliente'];
	$importeneto= $_GET['ine'];
	$igv= $_GET['igv'];
    $total=$_GET['total'];
	$idventa=$_GET['idventa'];
	$tipo=$_GET['tcom'];
    
$sql_factura=mysqli_query($conexion,"SELECT * FROM documento d
inner join cliente c on c.id_cliente=d.id_cliente
inner join movimiento m on m.id_movimiento=d.id_movimiento
inner join detalle dt on dt.id_documento=d.id_documento
inner join producto p on p.id_producto=dt.id_producto
where d.comprobante='Boleta' and d.id_documento='".$idventa."';");
	$rw_factura=mysqli_fetch_row($sql_factura);
						$numero_factura=$rw_factura[0]; 
						$solicitante=$rw_factura[14]." ".$rw_factura[15]; 
						$grado=$rw_factura[21]; 
						$tipomovimiento=$rw_factura[26]; 
						$fecha_factura=$rw_factura[3]; 
						$ventatotal=$rw_factura[5];  
						$dni=$rw_factura[20];
                       

}
	$simbolo_moneda=get_row('perfil','moneda', 'id_perfil', 1);
	
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/res/ver_boletadeventasf.php');
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
    
