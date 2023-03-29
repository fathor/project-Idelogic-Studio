<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal3 extends CI_Controller {

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
		$this->load->view('soal3');
		$this->load->view('template/footer');
	}

	function get_produk($id){
		$query=$this->db->query("SELECT *FROM mapping a JOIN produk b ON a.id_produk = b.id WHERE a.id_kategori = $id ");
		$data ="<option value=''>-pilih-</option>";
		foreach ($query->result() as $row) {
			$data.="<option value='".$row->id."'>".$row->nama_produk."</option>";
		}
		echo $data;
	}

	function hasil()
	{
		$id = $this->input->post('id_produk');
		$jml = $this->input->post('jumlah');
		$query=$this->db->query("SELECT * FROM harga_produk a WHERE a.id_produk = $id AND MIN <= $jml ORDER BY MAX DESC LIMIT 1 ")->row();
      	echo json_encode($query);
	}
}
