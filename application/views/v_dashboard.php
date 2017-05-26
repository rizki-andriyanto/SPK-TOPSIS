                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                        Dashboard <small>
                        PENGEMBANGAN UKM KERIPIK
                        DENGAN METODE FMADM & METODE TOPSIS
                        </small>
                          
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                  
                        <div class="col-md-9">
                          <div class="thumbnail">

                            <img  src="<?php echo base_url() ?>/assets/img/keripikwisuda.jpg"/>
                           
                          </div>
                        </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-user fa-5x"></i>
                                <h3> <?php $query = $this->db->get('operator');
                                echo $query->num_rows(); ?> </h3>
                            </div>
                            <div class="panel-footer back-footer-brown">
                               
                               <?php 
                               
                               $user = $this->session->userdata("username");
                               echo anchor('operator',$user,array('style'=>'color:white;')) ?>
                            </div>
                        </div>
                    </div>

                </div>

                