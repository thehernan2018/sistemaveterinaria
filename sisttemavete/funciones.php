<?php 
function get_row($table,$row, $id, $equal){
	global $conexion;
	$query=mysqli_query($conexion,"select $row from $table where $id='$equal'");
	$rw=mysqli_fetch_array($query);
	$value=$rw[$row];
	return $value;
}
?>