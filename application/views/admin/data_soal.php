<aside class="right-side">
    <section class="col-lg-12 connectedSortable">
        <!-- Map box -->
        <div class="box box-primary">
            <div class="box-header">
                <!-- tools box -->
                <div class="pull-right box-tools">                                        
                    <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                </div><!-- /. tools -->
                <i class="fa fa-list"></i>
                <h3 class="box-title">
                    Data Soal
                </h3>
            </div>
            <div class="box-footer">
            </div>
                <a href="<?php echo base_url();?>admin/soaltambah/" class="btn btn-primary btn-sm">
                    <i class='fa fa-plus-circle'></i> 
                    Tambah Soal
                </a>
                <br /><br />               
                <?php echo $this->session->flashdata('save');?>
                <table width="100%" border="1" bordercolor="#CCCCCC" cellspacing="1" cellpadding="1" class="table table-striped">
                    <tr>
                        <td width="4%"><b>No.</b></td>
                        <td width="15%"><b>Mapel</b></td>
                        <td width="10%"><b>Jurusan</b></td>
                        <td width="40%"><b>Soal</b></td>
                        <td width="30%"><b>Jawaban</b></td>
                        <td width="5%"><b>Kunci</b></td>
                        <td colspan="3" align="center"><b>Aksi</b></td>
                    </tr>
                    <?php
                        $no = 1; 
                        foreach ($soal as $s) {
                    ?>
                    <tr>
                        <td align="center"><?php echo $no++; ?></td>
                        <td><?php echo $s['nama_mapel']; ?></td>
                        <td><?php echo $s['jurusan']; ?></td>
                        <td><?php echo $s['pertanyaan']; ?></td>

                        <td>
                            A. <?php echo $s['a']; ?> <br /><br />
                            B. <?php echo $s['b']; ?> <br /><br />
                            C. <?php echo $s['c']; ?> <br /><br />
                            D. <?php echo $s['d']; ?> <br /><br />
                            E. <?php echo $s['e']; ?> <br /><br />
                            
                        </td>
                        <td><?php echo $s['jawaban']; ?></td>
                        <td align="center">
                            <a href="<?=base_url('admin/soaledit')?>/<?=$s['id_soal']?>">
                                <button class="btn bg-blue btn-circle"><i class="fa fa-edit"></i></button>
                            </a>
                        </td>
                        <td align="center">
                            <a onclick="return confirm('Yakin ingin menghapus data soal ini..?')" href="<?=base_url('admin/soalhapus')?>/<?=$s['id_soal']?>">
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

</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- jQuery 2.0.2 -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- jQuery UI 1.10.3 -->
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- fullCalendar -->
<script src="<?php echo base_url();?>assets/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/js/AdminLTE/app.js" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/js/AdminLTE/dashboard.js" type="text/javascript"></script>        

</body>
</html>