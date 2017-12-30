<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<script>
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor importcss"
        ],
        content_css: "css/development.css",
        add_unload_trigger: false,

        toolbar1: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",
        toolbar2: "custompanelbutton textbutton spellchecker",

        image_advtab: true,

        style_formats: [
            {title: 'Bold text', format: 'h1'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        template_replace_values : {
            username : "Jack Black"
        },

        template_preview_replace_values : {
            username : "Preview user name"
        },

        //file_browser_callback: function() {},

        templates: [ 
            {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'}, 
            {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'} 
        ],

        setup: function(ed) {
            ed.addButton('custompanelbutton', {
                type: 'panelbutton',
                text: 'Panel',
                panel: {
                    type: 'form',
                    items: [
                        {type: 'button', text: 'Ok'},
                        {type: 'button', text: 'Cancel'}
                    ]
                }
            });

            ed.addButton('textbutton', {
                type: 'button',
                text: 'Text'
            });
        },

        spellchecker_callback: function(method, words, callback) {
            if (method == "spellcheck") {
                var suggestions = {};

                for (var i = 0; i < words.length; i++) {
                    suggestions[words[i]] = ["First", "second"];
                }

                callback(suggestions);
            }
        }
    });
</script>
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
        				    echo "Form Tambah Soal";
        				}
        			    else{
        				    echo "Form Edit Soal";
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
                                <option>ADM Perkantoran</option>
                                <option>Akutansi</option>
                                <option>Tata Niaga</option>
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
                            <input type="text" class="form-control" name="a" value="<?=$a ?>"/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Jawaban B</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="b" value="<?=$b ?>"/>
                         </div>
                    </div>
                   <div class="form-group">
                        <label>Jawaban C</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="c" value="<?=$c ?>"/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Jawaban D</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="d" value="<?=$d ?>"/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Jawaban E</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <input type="text" class="form-control" name="e" value="<?=$e ?>"/>
                         </div>
                    </div>
                    <div class="form-group">
                        <label>Kunci Jawaban</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <select class="form-control" name="jawaban" value="<?=$jawaban ?>">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
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
        						      echo "Update Data Soal";
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