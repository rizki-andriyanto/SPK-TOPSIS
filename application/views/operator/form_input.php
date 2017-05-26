                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Keripik Wisuda <small>Tambah Data Operator</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('operator/post'); ?>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"  name="password" placeholder="Password">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> &nbsp;&nbsp; 
                                <?php echo anchor('operator','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->