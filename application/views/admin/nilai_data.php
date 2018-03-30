<aside class="right-side">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Laporan Nilai Ujian</h3>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td><b>No.</b></td>
                                    <td width="8%"><b>NIS</b></td>
                                    <td width="30%"><b>Nama</b></td>
                                    <td width="15%"><b>Jurusan</b></td>
                                    <td width="20%"><b>Mata Pelajaran</b></td>
                                    <td><b>Durasi</b></td>
                                    <td><b>Nilai</b></td>
                                    <td colspan="1" align="center"><b>Aksi</b></td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no = 1; 
                                foreach ($nilai as $row) {
                            ?>
                            <tr>
                                <td align="center"><?php echo $no++; ?></td>
                                <td><?php echo $row->nis;?></td>
                                <td><?php echo $row->nama;?></td>
                                <td><?php echo $row->jurusan;?></td>
                                <td><?php echo $row->nama_mapel;?></td>
                                <td><?php echo $row->durasi;?></td>
                                <td><?php echo $row->nilai;?></td>
                                <td>
                                    <a onclick="return confirm('Yakin ingin menghapus artikel ini..?')" href="<?=base_url('admin/artikelhapus')?>/<?php echo $row->id_nilai;?>">
                                      <button class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i> Hapus
                                      </button>
                                    </a>
                                </td>
                            </tr>
                            <?php
                                 }
                            ?>
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/AdminLTE/demo.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>

</body>
</html>