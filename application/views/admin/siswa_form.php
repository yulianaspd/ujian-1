<aside class="right-side">
    <section class="col-lg-10 connectedSortable">
        <div class="box box-primary">
            <div class="box-header">
                <div class="pull-right box-tools">                                        
                    <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                </div>
                <i class="fa fa-list"></i>
                <h3 class="box-title">
                    <?php
                        if($stat == 'new'){
        				    echo "Mengelola Data Siswa - Tambah Siswa";
        				}
        			    else{
        				    echo "Mengelola Data Siswa - Edit Siswa";
        				}
        			?>
                </h3>
            </div>

            <div class="box-footer">
                <form action="<?php echo base_url('admin/siswasimpan');?>" enctype="multipart/form-data" method="POST">
                	<div class="form-group">
                        <label>NIS</label>
                        <input type="hidden" name="kode" value="<?=$kode?>" />
                        <input type="hidden" name="stat" value="<?=$stat?>" />
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="nis" value="<?=$nis ?>"  required=""/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="nama" value="<?=$nama ?>" required=""/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Tempat Tanggal Lahir Siswa</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="tempat_lahir" value="<?=$tempat_lahir ?>" required=""/>
                            <input type="date" class="form-control" name="tanggal_lahir" value="<?=$tanggal_lahir ?>"/>
                         </div>
                    </div>
                     <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <select class="form-control" name="jk" value="<?=$jk ?>"> 
                                <option>Laki -Laki</option>
                                <option>Perempuan</option>
                            </select>
                         </div>   
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <select class="form-control" name="agama" value="<?=$agama ?>"> 
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Katholik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                            </select>
                         </div>   
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="alamat" value="<?=$alamat ?>" required=""/>
                         </div>
                    </div>
                   <div class="form-group">
                        <label>Jurusan</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <select class="form-control" name="jurusan" value="<?=$jurusan ?>"> 
                                <option>TKI</option>
                                <option>ADM-Perkantoran</option>
                                <option>Akuntansi</option>
                                <option>Pemasaran</option>
                                <option>Keperawatan</option>
                            </select>
                         </div>   
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="username" value="<?=$username ?>" required=""/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="password" value="<?=$password ?>" required=""/>
                         </div>
                    </div>
                    <div class="box-footer">
        				<button type="submit" class="btn btn-warning btn-block btn-sm">
                     	     <?php
                   			  if($stat == 'new'){
        						  echo "Simpan Data Siswa";
        					   }
        					   else{
        						  echo "Perbarui Data Siswa";
        					   }
        				    ?>
                        </button>
        		    </div>
                </form>
            </div>
        </div>
    </section>
</aside>
</div>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/AdminLTE/dashboard.js" type="text/javascript"></script>        
</body>
</html>