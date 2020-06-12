<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_Ajax_Model extends CI_Model{

	public function view(){
		return $this->db->get('tbl_produk')->result();
	}

	public function search($keyword){
		$this->db->like('nama_produk', $keyword);
		
		$result = $this->db->get('tbl_produk')->result();
		return $result;
	}
}