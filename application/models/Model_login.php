<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model{
	
	function construct(){
		parent::__construct();
	}

	public function takeUser($username, $password) 
  	{ 
	    $this->db->select('*');
	    $this->db->from('tb_users');
	    $this->db->where('username', $username);
	    $this->db->where('password', $password);
	    $this->db->where('status', 'Aktif');
	    //$this->db->where('level', $level);
	    $query = $this->db->get();
	    return $query->num_rows(); 
  	}
		
	function login($where = ''){
		return $this->db->query("select * from tb_users $where;");
		
	}

	function insertdata($tabel, $data){
		return $this->db->insert($tabel, $data);
	}

	function selectdata($where = ''){
		return $this->db->query("select * from $where; ");
	}
		
}