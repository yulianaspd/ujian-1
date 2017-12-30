<?php
	
	include 'koneksi.php';
	
	extract($_REQUEST, EXTR_OVERWRITE);
	
	$arr = array();
	
	$q = mysql_query("select * from tb_mapel WHERE jurusan='$jurusan'");
	
	
	
	while ($row = mysql_fetch_assoc($q)) {
		$temp = array(
			"id_mapel" 			=> $row['id_mapel'],
			"jurusan" 			=> $row['jurusan'],
			"nama_mapel" 		=> $row['nama_mapel']
		);
		array_push($arr, $temp);
	}
	$data = json_encode($arr);
	$data = str_replace("\\", "", $data);
	echo "{\"daftar_mapel\":" . $data . "}";

?>