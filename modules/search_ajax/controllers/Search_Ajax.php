<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_Ajax extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Search_Ajax_Model');
	}

	function index(){
		$data['judul'] = "Search Ajax";
		$data['products'] = $this->Search_Ajax_Model->view();
		$this->load->view('index', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$products = $this->Search_Ajax_Model->search($keyword);
		$hasil = $this->load->view('view', array('products'=>$products), true);
		$callback = array(
			'hasil' => $hasil,
		);
		echo json_encode($callback);
	}	   

}
