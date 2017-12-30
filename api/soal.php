<?php

	extract($_REQUEST, EXTR_OVERWRITE);
	
	include 'koneksi.php';
	
	$arr = array();
	
	$q = mysql_query("select * from tb_soal WHERE nama_mapel='$nama_mapel'");
	
	
	
	while ($row = mysql_fetch_assoc($q)) {
		$temp = array(
			"id_soal" 			=> $row['id_soal'],
			"jurusan" 			=> $row['jurusan'],
			"nama_mapel" 		=> $row['nama_mapel'],
			"pertanyaan"		=> $row['pertanyaan'],
			"jawaban" 			=> $row['jawaban'],
			"a"					=> $row['a'],
			"b"					=> $row['b'],
			"c" 				=> $row['c'],
			"d" 				=> $row['d'],
			"e" 				=> $row['e']
			
		);
		array_push($arr, $temp);
	}
	$data = json_encode($arr);
	$data = str_replace("\\", "", $data);
	echo "{\"daftar_soal\":" . $data . "}";

?>