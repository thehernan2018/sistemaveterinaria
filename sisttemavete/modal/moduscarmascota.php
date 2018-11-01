              <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Lista de Mascotas
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Nombre</th>
                                            <th>Especie</th>
                                            <th>Raza</th>
                                            <th>Sexo</th>
                                            <th>Pelaje</th>
                                            <th>+</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        
                                        $s=1;
                                        $sql="SELECT * FROM mascota";
                                        $execute=mysqli_query($conexion,$sql);
                                        while($row=mysqli_fetch_array($execute)){
                                            
                                        
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php $i=$s++; echo $i; ?></td>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['especie']; ?></td>
                                            <td class="center"><?php echo $row['raza']; ?></td>
                                            <td class="center"><?php echo $row['sexo']; ?></td>
                                            <td class="center"><?php echo $row['pelaje']; ?></td>
                                            <td class="center"><button  cod='<?php echo $row['id_mascota'];?>' class="btn btn-success asignarmasc" type="button" >
                                                   
                                                    <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>
                                                </button></td>
                                        </tr>
                                    <?php } mysqli_close($conexion); ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
                                                 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
            </div>