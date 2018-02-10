<?php
	
	include 'koneksi.php';
	
	extract($_REQUEST, EXTR_OVERWRITE);
	
	$arr = array();
	
	$q = mysql_query("select * from tb_bahas WHERE jurusan='$jurusan'");
	
	
	
	while ($row = mysql_fetch_assoc($q)) {
		$temp = array(
			"id_bahas" 		=> $row['id_bahas'],
			"nama_mapel" 	=> $row['nama_mapel'],
			"jurusan" 		=> $row['jurusan'],
			"keterangan" 	=> $row['keterangan'],
			"file" 			=> $row['file']
		);
		array_push($arr, $temp);
	}
	$data = json_encode($arr);
	$data = str_replace("\\", "", $data);
	echo "{\"daftar_pembahasan\":" . $data . "}";

?>