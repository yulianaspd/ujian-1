<aside class="right-side">
    <section class="col-lg-8 connectedSortable">
        <div class="box box-primary">
            <div class="box-header">
                <div class="pull-right box-tools">                                        
                    <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                </div>
                <i class="fa fa-users"></i>
                <h3 class="box-title">
                    Pengaturan Profil
                </h3>
            </div>
            <div class="box-footer">
                <?php echo $this->session->flashdata('save_profil');?>
                <form action="<?php echo base_url('admin/profilsimpan');?>" enctype="multipart/form-data" method="POST">
                	<div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="hidden" name="kode" value="<?=$kode?>" />
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-male"></i>
                            </div>
                            <input type="text" class="form-control" name="nama" value="<?=$nama ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" class="form-control" name="email" value="<?=$email ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" class="form-control" name="username" value="<?=$username ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-unlock-alt"></i>
                            </div>
                            <input type="text" class="form-control" name="password" placeholder="Masukan password baru disini"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <select class="form-control" name="level" value="<?=$level ?>"> 
                                <option>Admin</option>
                                <option>Siswa</option>
                            </select>
                         </div>   
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <select class="form-control" name="status" value="<?=$status ?>"> 
                                <option>Aktif</option>
                                <option>Tida</option>
                            </select>
                         </div>   
                    </div>
                    <button type="submit" class="btn btn-warning btn-block btn-sm">Perbarui Profil</button>
                </form>
            </div>
        </div>
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