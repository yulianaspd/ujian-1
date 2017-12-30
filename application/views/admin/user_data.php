<aside class="right-side">
    <section class="col-lg-12 connectedSortable">
        <div class="box box-primary">
            <div class="box-header">
                <div class="pull-right box-tools">                                        
                    <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                </div>
                <i class="fa fa-list"></i>
                <h3 class="box-title">
                    Data User Admin
                </h3>
            </div>
            <div class="box-footer">
                <a href="<?php echo base_url();?>admin/usertambah" class="btn btn-primary btn-sm"><i class='fa fa-plus-circle'></i> Tambah User</a>
                <br /><br />    
                <?php echo $this->session->flashdata('save_user');?>
                <table width="100%" border="1" bordercolor="#CCCCCC" cellspacing="1" cellpadding="1" class="table table-striped">
                    <tr>
                        <td width="5%"><b>No.</b></td>
                        <td width="20%"><b>Nama User</b></td>
                        <td width="20%"><b>Username</b></td>
                        <td width="20%"><b>Level</b></td>
                        <td width="20%"><b>Status</b></td>
                        <td colspan="2" align="center"><b>Aksi</b></td>
                    </tr>
                    <?php
                        $no = 1; 
                        foreach ($useri as $u) {
                    ?>
                    <tr>
                        <td align="center"><?php echo $no++; ?></td>
                        <td><?php echo $u['nama']; ?></td>   
                        <td><?php echo $u['username']; ?></td>
                        <td><?php echo $u['level']; ?></td>
                        <td><?php echo $u['status']; ?></td>
                        <td align="center">
                            <a href="<?=base_url('admin/useredit')?>/<?=$u['id_users']?>">
                                <button class="btn bg-blue btn-circle"><i class="fa fa-edit"></i></button>
                            </a>
                        </td>
                        <td align="center">
                            <a onclick="return confirm('Yakin ingin menghapus data user ini..?')" href="<?=base_url('admin/userhapus')?>/<?=$u['id_users']?>">
                                <button class="btn bg-red btn-circle"><i class="fa fa-trash-o"></i></button>
                            </a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
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