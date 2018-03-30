<?php
 	define('HOST','localhost');
 	define('USER','root');
 	define('PASS','');
 	define('DB','db_ujian');
 
 	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

	if($_SERVER['REQUEST_METHOD']=='POST'){
			
			//Mendapatkan Nilai Variable
			$nis 			= $_POST['nis'];
			$nama 			= $_POST['nama'];
			$nama_mapel 	= $_POST['nama_mapel'];
			$jurusan	 	= $_POST['jurusan'];
			$durasi	 		= $_POST['durasi'];
			$benar 			= $_POST['benar'];
			$nilai 			= $_POST['nilai'];
			
			//Pembuatan Syntax SQL
			$sql = "INSERT INTO tb_nilai (nis,nama,nama_mapel,jurusan,durasi,benar,nilai) VALUES ('$nis','$nama','$nama_mapel','$jurusan','$durasi','$benar','$nilai')";
			
			//Eksekusi Query database
			if(mysqli_query($con,$sql)){
				echo 'Nilai Anda Berhasil Disimpan';
			}else{
				echo 'Nilai Anda Gagal Disimpan';
			}
			
			mysqli_close($con);
	}


 ?>