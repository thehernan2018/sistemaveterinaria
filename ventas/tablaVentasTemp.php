<?php 

	session_start();
	//print_r($_SESSION['tablaComprasTemp']);
 ?>
<div class="table-responsive">
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 	
 	<tr>
 		<td>Nombre</td>
 		<td>Precio</td>
 		<td>Cantidad</td>
 		<td>Total</td>
 		<td>Quitar</td>
 	</tr>
 	<?php 
 	$total=0;//esta variable tendra el total de la compra en dinero
        $totigv=0;
        $totalapagar=0;
        $in=0;
 	$cliente=""; //en esta se guarda el nombre del cliente
 		if(isset($_SESSION['tablaComprasTemp'])):
 			$i=0;
 			foreach (@$_SESSION['tablaComprasTemp'] as $key) {

 				$d=explode("||", @$key);
 	 ?>

 	<tr>  
            <td>
                <input type="hidden" name="txtidpro[]"  id="txtidpro[]"  value="<?php echo $d[5]; ?>">
                <input type="hidden" name="txtcan[]"  id="txtcan[]"  value="<?php echo $d[2]; ?>">
                <input type="hidden" name="txtpre[]"  id="txtpre[]"  value="<?php echo $d[1]; ?>">
                    
              <?php echo $d[0]; ?>
            
            </td>
 		<td><?php echo $d[1]; ?></td>
 		<td><?php echo $d[2]; ?></td>
 		<td><?php echo $d[2]*$d[1]; ?></td>
 		
 		<td>
 			<span class="btn btn-danger btn-xs" onclick="quitarP('<?php echo $i; ?>')">
 				<span class="glyphicon glyphicon-remove"></span>
 			</span>
 		</td>
 	</tr>

 <?php 
 		$total=$total + $d[2]*$d[1];
                $in=number_format($total/1.18);
 		$i++;
                $totigv=$total-$in;
                $totalapagar=$totigv+$in;
 	}
 	endif; 
 ?>

 	<tr>
            <td>
                <input type="text" hidden="false" name="txtin" id="txtin" value="<?php echo $in;?>">  Importe Neto : <?php echo "S/.".$in.'.00'; ?></td>
 	</tr>
 	<tr>
 	   <td><input type="text" hidden="false" name="txtigv" id="txtigv" value="<?php echo $totigv;?>">IGV : <?php echo "S/.".$totigv; ?></td>
 	</tr>
 	<tr>
            <td> <input type="text" hidden="false" name="txttot" id="txttot" value="<?php echo $totalapagar;?>"><strong>Total : <?php echo "S/.".$totalapagar; ?></strong></td>
 	</tr>

 </table>

</div>