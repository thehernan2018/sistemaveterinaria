         <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Lista de Productos
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Descripción</th>
                                            <th>Precio</th>
                                            <th>Stock</th>
                                            <th>CB</th>
                                            <th>Observación</th>
                                           
                                            <th>+</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                             require_once ("config/db.php");
			                                require_once ("config/conexion.php");
                                        $s=1;
                                        $sql="SELECT * FROM producto";
                                        $execute=mysqli_query($conexion,$sql);
                                        while($row=mysqli_fetch_array($execute)){
                                            
                                        
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php $i=$s++; echo $i; ?></td>
                                            <td><?php echo $row['descripcion']; ?></td>
                                            <td><?php echo $row['precio']; ?></td>
                                            <td class="center"><?php echo $row['stock']; ?></td>
                                            <td class="center"><?php echo $row['observacion']; ?></td>
                                            <td class="center"><?php echo $row['codigo']; ?></td>
                                           
                                            <td class="center"><button  cod='<?php echo $row['id_producto'];?>' pre='<?php echo $row['precio'];?>'  class="btn btn-success btnAgregaVenta" type="button" >+</button></td>
                                        </tr>
                                    <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
                                                 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       </div>
            </div>
