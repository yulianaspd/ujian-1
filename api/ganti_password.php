<?php
	include "koneksi.php";
	
	$id_siswa 	= $_POST['id_siswa'];
	$username 	= $_POST['username'];
	$password 	= md5($_POST['password']);
	
	class emp{}
	
	if (empty($id_siswa) || empty($username) || empty($password)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("UPDATE tb_siswa SET username='".$username."', password='".$password."' WHERE id_siswa='".$id_siswa."'");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data Profil Berhasil Dirubah";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Data Profil Gagal Dirubah";
			die(json_encode($response)); 
		}	
	}
?>