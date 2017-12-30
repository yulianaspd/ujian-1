<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_login');
		$this->load->library('form_validation');
	}

	function ceklogin(){

		$this->form_validation->set_rules('username','Username'.'required|trim|xss_clean');
		$this->form_validation->set_rules('password','Password'.'required|trim|xss_clean');
		
		if($this->form_validation->run() == TRUE){
			redirect('');
		}

		$username	= $this->input->post('username');
		$password	= md5($this->input->post('password'));
		$auth = $this->db->get_where('tb_users',array('username'=>$username, 'password' => $password))->row();

		if($auth != NULL)
		{
			$data = array(
				'login'			=>'ok',
				'id_users'		=> $auth->id_users,
				'username'		=> $auth->username,
				'nama'			=> $auth->nama,
				'email'			=> $auth->email,
				'password'		=> $auth->password,
				'level'			=> $auth->level,
				'status'		=> $auth->status,
			);
			$this->session->set_userdata($data);
			redirect('admin');
	
		}else{
			redirect(base_url());
		}

	}

}
