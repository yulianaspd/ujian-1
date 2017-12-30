<aside class="right-side">
     <section class="content">



     	   <div class="panel-body" style="height: 800px; overflow: auto;">
                             <form role="form" action="<?php echo base_url(); ?>jawaban/jawab" method="post" onsubmit="return confirm('Anda Yakin ?')">
                             <input type="hidden" name="jumlah_soal" value="<?php echo $total_soal; ?>">
                             <input type="hidden" name="id_jawaban" value="<?php echo $id_jawaban; ?>">
                                <?php $no=0; foreach($soal as $soal) { $no++ ?>
                                    <div class="form-group">
                                        <b><?php echo $no; ?>. </b><label>
                                        <?php echo $soal['pertanyaan']; ?></label>
                                        <?php if($soal['foto'] == ""){ echo '';?><?php } else { ?> <img style="height:180px; width:250px" src="<?php echo base_url() ?>soalku/<?php echo $soal['foto']; ?>" alt="" /><?php } ?>
                                        <input type='hidden' name='soal[]' value='<?php echo $soal['id_soal']; ?>'/>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal['id_soal']; ?>]" id="optionsRadios1" value="A" required/><b>A. </b> <?php echo $soal['a']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal['id_soal']; ?>]" id="optionsRadios2" value="B" required/><b>B. </b><?php echo $soal['b']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal['id_soal']; ?>]" id="optionsRadios3" value="C" required/><b>C. </b><?php echo $soal['c']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal['id_soal']; ?>]" id="optionsRadios4" value="D" required/><b>D. </b><?php echo $soal['d']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal['id_soal']; ?>]" id="optionsRadios5" value="E" required/><b>E. </b><?php echo $soal['e']; ?>
                                            </label>
					                   </div>
				    </div>
					    <?php } ?>                                
                                 <button type="submit" class="btn btn-primary">Selesai</button> 
                                </form>
                                <br />
                        </div>





    </section>
</aside>
</div>
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