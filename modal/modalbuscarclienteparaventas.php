         <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Lista de Clientes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Apellidos</th>
                                            <th>Nombres</th>
                                            <th>Telefonos</th>
                                            <th>Dirección</th>
                                            <th>Email</th>
                                            <th>+</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            require_once ("config/db.php");
			                                require_once ("config/conexion.php");
                                        $s=1;
                                        $sql="SELECT * FROM cliente";
                                        $execute=mysqli_query($conexion,$sql);
                                        while($row=mysqli_fetch_array($execute)){
                                            
                                        
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php $i=$s++; echo $i; ?></td>
                                            <td><?php echo $row['apellidos']; ?></td>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td class="center"><?php echo $row['telf1'].' / '.$row['telf2']; ?></td>
                                            <td class="center"><?php echo $row['direccion']; ?></td>
                                            <td class="center"><?php echo $row['email']; ?></td>
                                            <td class="center"><button  cod='<?php echo $row['id_cliente'];?>' class="btn btn-success asignarcliente" type="button" >+</button></td>
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
