<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function selectdata($where = ''){
		return $this->db->query("select * from $where; ");
	}

	function insertdata($tabel, $data){
		return $this->db->insert($tabel, $data);
	}

	function updatedata($tabel,$data,$where){
		return $this->db->update($tabel, $data, $where);
	}

	function deldata($tabel,$where){
		return $this->db->delete($tabel,$where);
	}

	function manualQuery($q)
  	{
      return $this->db->query($q);
  	}

	function getUser($where = ''){
		return $this->db->query("select * from tb_users $where; ");
	}

	function getMapel($where = ''){
		return $this->db->query("select * from tb_mapel $where; ");
	}

	function getSoal($where = ''){
		return $this->db->query("select * from tb_soal $where; ");
	}

	function getSiswa($where = ''){
		return $this->db->query("select * from tb_siswa $where; ");
	}

	function getBahas($where = ''){
		return $this->db->query("select * from tb_bahas $where; ");
	}

	function getNilai($where = ''){
		return $this->db->query("select * from tb_nilai $where; ");
	}

	function get_all_nilai(){
		$this->db->from('tb_nilai');
		$query=$this->db->get();
		return $query->result();
	}


}