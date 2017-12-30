<aside class="right-side">
    <section class="col-lg-8 connectedSortable">
        <div class="box box-primary">
            <div class="box-header">
                <div class="pull-right box-tools">                                        
                    <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                </div>
                <i class="fa fa-users"></i>
                <h3 class="box-title">
                    Data Siswa
                </h3>
            </div>
            <div class="box">
                <div class="box-body">
                 <table class="table table-striped">                               
                        <tr>
                            <th width='30%'>NIM Siswa</th>
                            <td><?php echo $nim; ?></td>
                        </tr>
                        <tr>
                            <th width='30%'>Nama Siswa</th>
                            <td><?php echo $nama; ?></td>
                        </tr> 
                        <tr>
                            <th width='30%'>Jenis Kelamin</th>
                            <td><?php echo $jk; ?></td>
                        </tr>                                    
                        <tr>
                            <th width='30%'>Tempat, Tangal Lahir</th>
                            <td><?php echo $tempat_lahir; ?>, <?php echo $tanggal_lahir; ?></td>
                        </tr>                                                               
                        <tr>
                            <th width='30%'>Agama</th>
                            <td><?php echo $agama; ?></td>
                        </tr>                                
                        <tr>
                            <th width='30%'>Alamat</th>
                            <td><?php echo $alamat; ?></td>
                        </tr>                                
                        <tr>
                            <th width='30%'>Jurusan</th>
                            <td><?php echo $jurusan; ?></td>
                        </tr>
                         <tr>
                            <th width='30%'>Username</th>
                            <td><?php echo $username; ?></td>
                        </tr>                                            
                        <!--
                        <tr>
                            <th width='30'>Foto</th>
                            <td>
                                <img style="height:200px;" src="<?php echo base_url(); ?>images/<?php echo $foto ?>">
                            </td>
                        </tr>
                        -->                                
                    </table>
                </div>
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