 <?php 
$cod=$_POST['id'];
require_once ("../config/db.php");
require_once ("../config/conexion.php");
$sql="SELECT * FROM cliente where id_cliente='".$cod."'";
$execute=mysqli_query($conexion,$sql);
$result = mysqli_fetch_assoc($execute);
$data=NULL;
if($result){
    $data = mysqli_fetch_assoc($execute);
}
echo json_encode($result);
?>