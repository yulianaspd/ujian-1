<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
		$cek = $this->session->userdata('login');
		if(empty($cek)) {
			redirect('');
		}
	}

	function index(){	

		$user			= $this->session->userdata('login');

		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel desc')->result_array();

		$sisw			= $this->model_admin->getSiswa();
		$siswa			= $sisw->num_rows();
		$mape			= $this->model_admin->getMapel();
		$mapel			= $mape->num_rows();
		$soa			= $this->model_admin->getSoal();
		$soal			= $soa->num_rows();

		$data 			= array(
							'title'			=> 'Administrator Panel',
							'user'			=> $this->session->userdata('nama'),
							'mapels'		=> $mapels,
							'mapel'			=> $mapel,
							'siswa'			=> $siswa,
							'soal'			=> $soal,
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/dashboard');

	}

	function logout(){

		$this->session->sess_destroy();
		redirect('');
		
	}

	function profil(){

		$user			= $this->session->userdata('login');
		$id_users		= $this->session->userdata['id_users'];
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel desc')->result_array();
		$user			= $this->model_admin->selectdata("tb_users where id_users='$id_users'")->result_array();
		
		$data			= array(
							'title'			=> 'Setting Akun',
							'user'			=> $user[0]['nama'],
							'mapels'		=> $mapels,
							'kode'			=> $user[0]['id_users'],
							'nama'			=> $user[0]['nama'],
							'email'			=> $user[0]['email'],
							'username'		=> $user[0]['username'],
							'password'		=> $user[0]['password'],
							'level'			=> $user[0]['level'],
							'status'		=> $user[0]['status'],
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/profil');

	}
		
	function profilsimpan(){
		
		if($_POST){
			
			$this->load->helper('url');
			
			$kode			= $this->input->post('kode');
			$nama			= $this->input->post('nama');
			$email			= $this->input->post('email');
			$username		= $this->input->post('username');
			$password		= md5($this->input->post('password'));
			$level			= $this->input->post('level');
			$status			= $this->input->post('status');
		
			$data = array(
						'nama'			=> $nama,
						'email'			=> $email,
						'username'		=> $username,
						'password'		=> $password,
						'level'			=> $level,
						'status'		=> $status,
			);				
			$this->model_admin->updatedata('tb_users',$data,array('id_users' => $kode));
			$this->session->set_flashdata("save_profil","<div class='alert alert-info alert-dismissable'>
                                <i class='fa fa-info'></i>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <b>Sukses!</b> Pengaturan Profil Berhasil Dirubah
                            </div>");
			redirect('admin');
		}
		else {
			echo "Halaman tidak ditemukan";
		}
					
	}

	function mapel(){
		
		$this->load->helper('text');
		$user			= $this->session->userdata('login');
		$mapel			= $this->model_admin->selectdata('tb_mapel order by id_mapel desc')->result_array();
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel desc')->result_array();
		
		$data 			= array(
			  				'title'			=> 'Data Mata Pelajaran',
			  				'user'			=> $this->session->userdata['nama'],
			  				'mapels'		=> $mapels,
			  				'mapel'			=> $mapel,
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/mapel_data');

	}

	function mapeltambah(){

		$user			= $this->session->userdata('login');
		$mapel			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();
		$this->load->helper('text');
		$this->load->helper('url');
		
		$data			= array(
							'title'			=> 'Tambah Mata Pelajaran Baru',
							'user'			=> $this->session->userdata['nama'],
							'mapel'			=> $mapel,
							'kode'			=> '',
							'nama_mapel'	=> '',
							'jurusan'		=> '',
							'stat'			=> 'new',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/mapel_form');

	}

	function mapelsimpan(){

		if($_POST){
			$this->load->helper('url');
			$kode			= $this->input->post('kode');
			$nama_mapel		= $this->input->post('nama_mapel');
			$jurusan		= $this->input->post('jurusan');
			$stat			= $this->input->post('stat');
			
			if($stat == 'new'){
				$data = array(
					  'nama_mapel'	=> $nama_mapel,
					  'jurusan'		=> $jurusan,
				);
				$this->model_admin->insertdata('tb_mapel',$data);
				$this->session->set_flashdata("save","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data Mata Pelajaran Berhasil Ditambahkan
                                    </div>");
				redirect('admin/mapel');
			}
			else{
				$this->db->where('id_mapel',$kode);
				$query	= $this->db->get('tb_mapel');
				$row	= $query->row();
				$data = array(
					  'nama_mapel'	=> $nama_mapel,
					  'jurusan'		=> $jurusan,
				);
				$this->model_admin->updatedata('tb_mapel',$data,array('id_mapel' => $kode));
				$this->session->set_flashdata("save","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data  Mata Pelajaran Berhasil Dirubah
                                    </div>");
				redirect('admin/mapel');
				}
		}
		else{
			echo "Halaman tidak ditemukan";
		}

	}

	function mapeledit($kode = 0){

		$user			= $this->session->userdata('login');
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();
		$data_konten	= $this->model_admin->getMapel("where id_mapel = '$kode'")->result_array();
		
		$data			= array(
							'title'			=> 'Data Mata Pelajaran',
							'user'			=> $this->session->userdata['nama'],
							'mapels'		=> $mapels,
							'kode'			=> $data_konten[0]['id_mapel'],
							'nama_mapel'	=> $data_konten[0]['nama_mapel'],
							'jurusan'		=> $data_konten[0]['jurusan'],
							'stat'			=> 'edit',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/mapel_form');

	}

	function mapelhapus($kode = 0){

		$this->model_admin->deldata('tb_mapel',array('id_mapel' =>$kode));
		$this->session->set_flashdata("save","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data Mata Pelajaran Berhasil Dihapus
                                    </div>");
		redirect('admin/mapel');
		
	}

	function datasoal($kode = 0){
		
		$this->load->helper('text');
		$user			= $this->session->userdata('login');
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel desc')->result_array();
		$soal			= $this->model_admin->getSoal("where nama_mapel = '$kode'")->result_array();
		
		$data 			= array(
			  				'title'			=> 'Data Soal Pelajaran',
			  				'user'			=> $this->session->userdata['nama'],
			  				'mapels'		=> $mapels,
			  				'soal'			=> $soal,
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/data_soal');

	}

	function soal(){
		
		$this->load->helper('text');
		$user			= $this->session->userdata('login');
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel desc')->result_array();
		$soal			= $this->model_admin->selectdata('tb_soal order by id_soal desc')->result_array();
		
		$data 			= array(
			  				'title'			=> 'Data Soal',
			  				'mapels'		=> $mapels,
			  				'user'			=> $this->session->userdata['nama'],
			  				'soal'			=> $soal,
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/soal_data');

	}

	function soaltambah($kode = 0){

		$user			= $this->session->userdata('login');
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();
		$this->load->helper('text');
		$this->load->helper('url');
		
		$data			= array(
							'title'			=> 'Tambah Soal Baru',
							'user'			=> $this->session->userdata['nama'],
							'mapels'		=> $mapels,
							'kode'			=> '',
							'jurusan'		=> '',
							'nama_mapel'	=> '',
							'tanggal'		=> '',
							'pertanyaan'	=> '',
							'jawaban'		=> '',
							'a'				=> '',
							'b'				=> '',
							'c'				=> '',
							'd'				=> '',
							'e'				=> '',
							'stat'			=> 'new',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/soal_form');

	}


	function soalsimpan(){

		if($_POST){
			$this->load->helper('url');
			$kode			= $this->input->post('kode');
			$jurusan		= $this->input->post('jurusan');
			$nama_mapel		= $this->input->post('nama_mapel');
			$pertanyaan		= $this->input->post('pertanyaan');
			$jawaban		= $this->input->post('jawaban');
			$a				= $this->input->post('a');
			$b				= $this->input->post('b');
			$c				= $this->input->post('c');
			$d				= $this->input->post('d');
			$e				= $this->input->post('e');
			$stat			= $this->input->post('stat');
			
			if($stat == 'new'){

				$data = array(
					  'jurusan'			=> $jurusan,
					  'nama_mapel'		=> $nama_mapel,
					  'pertanyaan'		=> $pertanyaan,
					  'jawaban'			=> $jawaban,
					  'a'				=> $a,
					  'b'				=> $b,
					  'c'				=> $c,
					  'd'				=> $d,
					  'e'				=> $e,
				);
				$this->model_admin->insertdata('tb_soal',$data);
				$this->session->set_flashdata("save","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data Soal Berhasil Ditambahkan
                                    </div>");
				redirect('admin/soal');
			}
			else{

				$data = array(
					  'jurusan'			=> $jurusan,
					  'nama_mapel'		=> $nama_mapel,
					  'pertanyaan'		=> $pertanyaan,
					  'jawaban'			=> $jawaban,
					  'a'				=> $a,
					  'b'				=> $b,
					  'c'				=> $c,
					  'd'				=> $d,
					  'e'				=> $e,
				);
				$this->model_admin->updatedata('tb_soal',$data,array('id_soal' => $kode));
				$this->session->set_flashdata("save","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data Soal Berhasil Dirubah
                                    </div>");
				redirect('admin/soal');
				}
		}
		else{
			echo "Halaman tidak ditemukan";
		}

	}

	function soaledit($kode = 0){

		$user			= $this->session->userdata('login');
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();
		$data_konten	= $this->model_admin->getSoal("where id_soal = '$kode'")->result_array();
		
		$data			= array(
							'title'			=> 'Data Soal',
							'user'			=> $this->session->userdata['nama'],
							'mapels'		=> $mapels,
							'kode'			=> $data_konten[0]['id_soal'],
							'jurusan'		=> $data_konten[0]['jurusan'],
							'nama_mapel'	=> $data_konten[0]['nama_mapel'],
							'pertanyaan'	=> $data_konten[0]['pertanyaan'],
							'jawaban'		=> $data_konten[0]['jawaban'],
							'a'				=> $data_konten[0]['a'],
							'b'				=> $data_konten[0]['b'],
							'c'				=> $data_konten[0]['c'],
							'd'				=> $data_konten[0]['d'],
							'e'				=> $data_konten[0]['e'],
							'stat'			=> 'edit',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/soal_form');

	}

	function soalhapus($kode = 0){

		$this->model_admin->deldata('tb_soal',array('id_soal' =>$kode));
		$this->session->set_flashdata("save","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data Soal Berhasil Dihapus
                                    </div>");
		redirect('admin/soal');
		
	}


	function siswa(){
		
		$this->load->helper('text');
		$user			= $this->session->userdata('login');
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();

		$siswa			= $this->model_admin->selectdata('tb_siswa order by id_siswa desc')->result_array();
		
		$data 			= array(
			  				'title'			=> 'Data Siswa',
			  				'user'			=> $this->session->userdata['nama'],
			  				'mapels'		=> $mapels,
			  				'siswa'			=> $siswa,
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/siswa_data');

	}

	function siswatambah(){

		$user			= $this->session->userdata('login');
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();
		$this->load->helper('text');
		$this->load->helper('url');
		
		$data			= array(
							'title'			=> 'Tambah Siswa Baru',
							'user'			=> $this->session->userdata['nama'],
							'mapels'		=> $mapels,
							'kode'			=> '',
							'nim'			=> '',
							'nama'			=> '',
							'jk'			=> '',
							'tempat_lahir'	=> '',
							'tanggal_lahir'	=> '',
							'agama'			=> '',
							'alamat'		=> '',
							'jurusan'		=> '',
							'username'		=> '',
							'password'		=> '',
						//  'foto'			=> '',
							'stat'			=> 'new',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/siswa_form');

	}

	function siswasimpan(){

		if($_POST){
			$this->load->helper('url');
			$kode			= $this->input->post('kode');
			$nim			= $this->input->post('nim');
			$nama			= $this->input->post('nama');
			$jk				= $this->input->post('jk');
			$tempat_lahir	= $this->input->post('tempat_lahir');
			$tanggal_lahir	= $this->input->post('tanggal_lahir');
			$agama			= $this->input->post('agama');
			$alamat			= $this->input->post('alamat');
			$jurusan		= $this->input->post('jurusan');
			$username		= $this->input->post('username');
			$password		= md5($this->input->post('password'));
			$stat			= $this->input->post('stat');
			
			if($stat == 'new'){
				/*
				if($_FILES['foto']['name'] != ""){
					$config['upload_path']          = 'images';
                	$config['allowed_types']        = 'jpeg|jpg|png';
                	$config['max_size']             = '20000';
					$config['remove_space']			= true;
					$config['overwrite']			= false;
					$config['encrypt_name']			= true;
					$config['max_width'] 			= '';
					$config['max_height']			= '';
					
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if(!$this->upload->do_upload('foto'))
					{
						print_r('Ukuran file terlalu besar. Maksimal 2 MB');
						exit();
						}
					else
					{
						$image = $this->upload->data();
						if($image['file_name'])
						{
							$data['file'] = $image['file_name'];
							}
						$img_header = $data['file'];
					}
				}
				*/
				
				$data = array(
					  'nim'				=> $nim,
					  'nama'			=> $nama,
					  'jk'				=> $jk,
					  'tempat_lahir'	=> $tempat_lahir,
					  'tanggal_lahir'	=> $tanggal_lahir,
					  'agama'			=> $agama,
					  'alamat'			=> $alamat,
					  'jurusan'			=> $jurusan,
					  'username'		=> $username,
					  'password'		=> $password,
					  //'foto'			=> $img_header,
				);
				$this->model_admin->insertdata('tb_siswa',$data);
				$this->session->set_flashdata("save","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data Siswa Berhasil Ditambahkan
                                    </div>");
				redirect('admin/siswa');
			}
			else{
				/*
				$this->db->where('id_siswa',$kode);
				$query	= $this->db->get('tb_siswa');
				$row	= $query->row();
				
				unlink(".images/$row->foto");
				if($_FILES['foto']['name'] != ""){
					$config['upload_path']          = 'images';
                	$config['allowed_types']        = 'jpeg|jpg|png';
                	$config['max_size']             = '2000';
					$config['remove_space']			= true;
					$config['overwrite']			= false;
					$config['encrypt_name']			= true;
					$config['max_width'] 			= '';
					$config['max_height']			= '';
					
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if(!$this->upload->do_upload('foto'))
					{
						print_r('Ukuran file terlalu besar. Maksimak 2 MB');
						exit();
						}
					else
					{
						$image = $this->upload->data();
						if($image['file_name'])
						{
						$data['file'] = $image['file_name'];
						}
						$img_header = $data['file'];
						}
					}
				*/

				$data = array(
					  'nim'				=> $nim,
					  'nama'			=> $nama,
					  'jk'				=> $jk,
					  'tempat_lahir'	=> $tempat_lahir,
					  'tanggal_lahir'	=> $tanggal_lahir,
					  'agama'			=> $agama,
					  'alamat'			=> $alamat,
					  'jurusan'			=> $jurusan,
					  'username'		=> $username,
					  'password'		=> $password,
					  //'foto'			=> $img_header,
				);
				$this->model_admin->updatedata('tb_siswa',$data,array('id_siswa' => $kode));
				$this->session->set_flashdata("save","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data Siswa Berhasil Dirubah
                                    </div>");
				redirect('admin/siswa');
				}
		}
		else{
			echo "Halaman tidak ditemukan";
		}

	}

	function siswadetail($kode = 0){
		
		$user		= $this->session->userdata('login');
		$data_konten= $this->model_admin->getSiswa("where id_siswa = '$kode'")->result_array();
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();
		$data		= array(
							'title'			=> 'Data Siswa',
							'user'			=> $this->session->userdata['nama'],
							'mapels'		=> $mapels,
							'nim'			=> $data_konten[0]['nim'],
							'nama'			=> $data_konten[0]['nama'],
							'jk'			=> $data_konten[0]['jk'],
							'tempat_lahir'	=> $data_konten[0]['tempat_lahir'],
							'tanggal_lahir'	=> $data_konten[0]['tanggal_lahir'],
							'agama'			=> $data_konten[0]['agama'],
							'alamat'		=> $data_konten[0]['alamat'],
							'jurusan'		=> $data_konten[0]['jurusan'],
							'username'		=> $data_konten[0]['username'],
							//'foto'			=> $data_konten[0]['foto'],
							);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/siswa_detail');
		
	}

	function siswaedit($kode = 0){

		$user			= $this->session->userdata('login');
		$data_konten	= $this->model_admin->getSiswa("where id_siswa = '$kode'")->result_array();
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();
		
		$data			= array(
							'title'			=> 'Data Siswa',
							'user'			=> $this->session->userdata['nama'],
							'mapels'		=> $mapels,
							'kode'			=> $data_konten[0]['id_siswa'],
							'nim'			=> $data_konten[0]['nim'],
							'nama'			=> $data_konten[0]['nama'],
							'jk'			=> $data_konten[0]['jk'],
							'tempat_lahir'	=> $data_konten[0]['tempat_lahir'],
							'tanggal_lahir'	=> $data_konten[0]['tanggal_lahir'],
							'agama'			=> $data_konten[0]['agama'],
							'alamat'		=> $data_konten[0]['alamat'],
							'jurusan'		=> $data_konten[0]['jurusan'],
							'username'		=> $data_konten[0]['username'],
							'password'		=> $data_konten[0]['password'],
							//'foto'			=> $data_konten[0]['foto'],
							'stat'			=> 'edit',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/siswa_form');

	}

	function siswahapus($kode = 0){

		/*
		$this->db->where('id_siswa',$kode);
		$query = $this->db->get('tb_siswa');
		$row   = $query->row();
		unlink("./images/$row->foto");
		*/
		$this->model_admin->deldata('tb_siswa',array('id_siswa' =>$kode));
		$this->session->set_flashdata("save","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data Siswa Berhasil Dihapus
                                    </div>");
		redirect('admin/siswa');
		
	}

	function user(){
		
		$this->load->helper('text');
		$user		= $this->session->userdata('login');
		$useri		= $this->model_admin->selectdata('tb_users order by id_users desc')->result_array();
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();
		
		$data 			= array(
			  				'title'			=> 'Data User Admin',
			  				'user'			=> $this->session->userdata['nama'],
			  				'useri'			=> $useri,
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/user_data');

	}

	function usertambah(){

		$user		= $this->session->userdata('login');
		$siswa		= $this->model_admin->selectdata('tb_siswa order by id_siswa')->result_array();
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();
		$this->load->helper('text');
		$this->load->helper('url');
		
		$data		= array(
						'title'			=> 'Tambah User Baru',
						'user'			=> $this->session->userdata['nama'],
						'mapels'		=> $mapels,
						'siswa'			=> $siswa,
						'kode'			=> '',
						'nama'			=> '',
						'username'		=> '',
						'password'		=> '',
						'level'			=> '',
						'status'		=> '',
						'stat'			=> 'new',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/user_form');

	}

	function usersimpan(){

		if($_POST){
			$this->load->helper('url');
			$kode			= $this->input->post('kode');
			$nama			= $this->input->post('nama');
			$username		= $this->input->post('username');
			$password		= md5($this->input->post('password'));
			$level			= $this->input->post('level');
			$status			= $this->input->post('status');
			$stat			= $this->input->post('stat');
			if($stat == 'new'){
				$data = array(
					  'nama'		=> $nama,
					  'username'	=> $username,
					  'password'	=> $password,
					  'level'		=> $level,
					  'status'		=> $status,

				);
				$this->model_admin->insertdata('tb_users',$data);
				$this->session->set_flashdata("save_user","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data User Berhasil Ditambahkan
                                    </div>");
				redirect('admin/user');
			}
			else{
				$this->db->where('id_users',$kode);
				$query	= $this->db->get('tb_users');
				$row	= $query->row();
				$data = array(
					 'nama'			=> $nama,
					  'username'	=> $username,
					  'password'	=> $password,
					  'level'		=> $level,
					  'status'		=> $status,
				);
				$this->model_admin->updatedata('tb_users',$data,array('id_users' => $kode));
				$this->session->set_flashdata("save_user","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data User Kuliner Dirubah
                                    </div>");
				redirect('admin/user');
				}
		}
		else{
			echo "Halaman tidak ditemukan";
		}

	}


	function useredit($kode = 0){

		$user			= $this->session->userdata('login');
		$data_konten	= $this->model_admin->getUser("where id_users = '$kode'")->result_array();
		$mapels			= $this->model_admin->selectdata('tb_mapel order by id_mapel')->result_array();
		
		$data			= array(
							'title'			=> 'Data User',
							'user'			=> $this->session->userdata['nama'],
							'mapels'		=> $mapels,
							'kode'			=> $data_konten[0]['id_users'],
							'nama'			=> $data_konten[0]['nama'],
							'username'		=> $data_konten[0]['username'],
							'password'		=> $data_konten[0]['password'],
							'level'			=> $data_konten[0]['level'],
							'status'		=> $data_konten[0]['status'],
							'stat'			=> 'edit',
		);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/user_form');

	}

	function userhapus($kode = 0){

		$this->db->where('id_users',$kode);
		$query = $this->db->get('tb_users');
		$row   = $query->row();
		$this->model_admin->deldata('tb_users',array('id_users' =>$kode));
		$this->session->set_flashdata("save_user","<div class='alert alert-info alert-dismissable'>
                                        <i class='fa fa-info'></i>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <b>Sukses!</b> Data User Berhasil Dihapus
                                    </div>");
		redirect('admin/user');

	}



}