                <div class="row">
                    <div class="col-md-21">
                        <h2 class="page-header">
                            Keripik Wisuda <small>Data Investasi</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-21">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('investasi/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="info">
                                                <th>No.</th>
                                                <!-- <th>Id Investasi</th> -->
                                                <th>A1C1</th>
                                                <th>A1C2</th>
                                                <th>A1C3</th>
                                                <th>A1C4</th>
                                                <th>A1C5</th>

                                                <th>A2C1</th>
                                                <th>A2C2</th>
                                                <th>A2C3</th>
                                                <th>A2C4</th>
                                                <th>A2C5</th>

                                                <th>A3C1</th>
                                                <th>A3C2</th>
                                                <th>A3C3</th>
                                                <th>A3C4</th>
                                                <th>A3C5</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <!-- <td><?php echo $r->id_investasi ?></td> -->
                                                <!-- <td><?php echo $r->id_data ?></td> -->
                                                <td><?php echo $r->a1c1 ?></td>
                                                <td><?php echo $r->a1c2 ?></td>
                                                <td><?php echo $r->a1c3 ?></td>
                                                <td><?php echo $r->a1c4 ?></td>
                                                <td><?php echo $r->a1c5 ?></td>

                                                <td><?php echo $r->a2c1 ?></td>
                                                <td><?php echo $r->a2c2 ?></td>
                                                <td><?php echo $r->a2c3 ?></td>
                                                <td><?php echo $r->a2c4 ?></td>
                                                <td><?php echo $r->a2c5 ?></td>

                                                <td><?php echo $r->a3c1 ?></td>
                                                <td><?php echo $r->a3c2 ?></td>
                                                <td><?php echo $r->a3c3 ?></td>
                                                <td><?php echo $r->a3c4 ?></td>
                                                <td><?php echo $r->a3c5 ?></td>

                                               
                                               <!--  <td class="center"> -->
                                                 <!-- <?php  echo anchor('Investasi/hasil/'.$r->id_data,'<i class="fa fa-eye fa-lg" aria-hidden="true"></i>',array('style'=>'color:blue;'))?>&nbsp;&nbsp;&nbsp;
                                                 <?php  echo anchor('investasi/delete/'.$r->id_data,'<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>',array('style'=>'color:red;'))?> -->

                                                     
                                                <!--  </td> -->
                                            </tr>

                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <center/><i class="fa fa-arrow-down fa-5x" aria-hidden="true"></i><br><br>

                                 <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="info">
                                                
                                                <th>No.</th>
                                                <th>A4C1</th>
                                                <th>A4C2</th>
                                                <th>A4C3</th>
                                                <th>A4C4</th>
                                                <th>A4C5</th>

                                                <th>W1</th>
                                                <th>W2</th>
                                                <th>W3</th>
                                                <th>W4</th>
                                                <th>W5</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->a4c1 ?></td>
                                                <td><?php echo $r->a4c2 ?></td>
                                                <td><?php echo $r->a4c3 ?></td>
                                                <td><?php echo $r->a4c4 ?></td>
                                                <td><?php echo $r->a4c5 ?></td>


                                                <td><?php echo $r->w1 ?></td>
                                                <td><?php echo $r->w2 ?></td>
                                                <td><?php echo $r->w3 ?></td>
                                                <td><?php echo $r->w4 ?></td>
                                                <td><?php echo $r->w5 ?></td>
                                                <td class="center">
                                                 <?php  echo anchor('Investasi/hasil/'.$r->id_data,'<i class="fa fa-eye fa-lg" aria-hidden="true"></i>',array('style'=>'color:blue;'))?>&nbsp;&nbsp;&nbsp;
                                                 <?php  echo anchor('investasi/delete/'.$r->id_data,'<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>',array('style'=>'color:red;'))?>

                                                     
                                                 </td>
                                            </tr>

                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>

                <!-- /. ROW  -->
