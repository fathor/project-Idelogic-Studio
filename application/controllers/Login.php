<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	}
	public function index()
	{
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => ($password)
		);
		$sql = $this->db->query('SELECT *FROM login WHERE username="'.$username.'" AND password ="'.$password.'" ')->row();
		if($sql){

			$data_session = array(
				'nama' => $sql->username,
				'status' => "login",
				'kategori' => $sql->kategori
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("home"));

		}else{
			echo '<script type="text/javascript">alert("Salah")</script>';
			echo '<script type="text/javascript">window.location.href = "http://localhost/ci_test/login";</script>';
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
