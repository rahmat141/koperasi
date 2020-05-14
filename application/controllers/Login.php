<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation','session');
		$this->load->model('Login_model');
		$this->load->model('model_pegawai');
		$this->load->model('model_produk');
		$this->load->model('Model_cashflow');

	}
	
	public function index(){
		if (!$this->session->username) {
			redirect('Login/login');
		}
		redirect('sekertaris');
	}

	public function login(){
		$this->load->view('login');
	}

	public function aksi_login(){
		
		if ($this->session->username) {
			redirect('sekertaris');	
			
		}

		if ($this->input->method(TRUE) == 'GET') {
			$this->load->view('login');
		} else {
			$user = $this->Login_model->ambil_akun(
				$this->input->post('username'),
				$this->input->post('password'));

			if ($user) {
				$this->session->set_userdata(
					array(
						'username'		=> $user[0]->username,
						'password'		=> $user[0]->password));
				redirect('/Login');
			} 
			 else {
				$this->session->set_flashdata(
					'pesan', 'Username atau Password salah.');
				$this->load->view('login');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login/login');
	}
}