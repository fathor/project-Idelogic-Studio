<?php 
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Rest_api extends REST_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }    

    function index_get(){
    	$query = $this->db->query("SELECT *FROM produk")->result();
    	if ($query) {
    		// code...
    		$this->response([
    			'status' => TRUE,
    			'data' => $query
    		], REST_Controller::HTTP_OK);
    	}
    }
}