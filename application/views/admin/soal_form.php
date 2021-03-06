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
        				    echo "Mengelola Data Soal - Tambah Soal";
        				}
        			    else{
        				    echo "Mengelola Data Soal - Edit Soal";
        				}
        			?>
                </h3>
            </div>

            <div class="box-footer">
                <form action="<?php echo base_url('admin/soalsimpan');?>" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input type="hidden" name="kode" value="<?=$kode?>" />
                        <input type="hidden" name="stat" value="<?=$stat?>" />
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                             <select class="form-control" name="nama_mapel" value="<?=$nama_mapel ?>" style="width: 100;">
                              <?php 
                              foreach($mapels as $m){
                                if(!in_array($m['nama'],$label_post)){
                                  ?>
                                  <option value="<?php echo $m['nama_mapel'] ?>"><?php echo $m['nama_mapel'] ?></option>
                                  <?php } else { ?>
                                  <option selected="selected" value="<?php echo $m['nama_mapel'] ?>"><?php echo $m['nama_mapel'] ?></option>
                                  <?php } } ?>
                            </select>
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
                        <label>Pertanyaan</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa  fa-list-alt"></i>
                            </div>
                            <textarea name="pertanyaan" rows="10" cols="118"><?=$pertanyaan ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jawaban A</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="a" value="<?=$a ?>" required=""/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Jawaban B</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="b" value="<?=$b ?>" required=""/>
                         </div>
                    </div>
                   <div class="form-group">
                        <label>Jawaban C</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="c" value="<?=$c ?>" required=""/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Jawaban D</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="d" value="<?=$d ?>" required=""/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Jawaban E</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="e" value="<?=$e ?>" required=""/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Kunci Jawaban</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <select class="form-control" name="jawaban" value="<?=$jawaban ?>">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                         </div>   
                    </div>
                    <div class="box-footer">
        				<button type="submit" class="btn btn-warning btn-block btn-sm">
                     	     <?php
                   			      if($stat == 'new'){
        						      echo "Simpan Data Soal";
        					       }
        					       else{
        						      echo "Perbarui Data Soal";
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