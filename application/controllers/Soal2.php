<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal2 extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('soal2');
		$this->load->view('template/footer');
	}

	function load_data()
	{
		// code...
		$query = $this->db->query("
			SELECT b.id,b.nama_produk,c.kategori 
			FROM `mapping` a
			JOIN produk b ON a.id_produk = b.id
			JOIN kategori_pekerjaan c ON a.id_kategori=c.id")->result();

		$data = array();
		foreach ($query as $hasil) {
			$row = array();
			$row [] = $hasil->id;
			$row [] = $hasil->nama_produk;
			$row [] = $hasil->kategori;
			$data[] = $row;
		}
		echo json_encode(array("data"=>$data));
	}
}
