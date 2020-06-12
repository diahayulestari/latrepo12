<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class M_account extends CI_Model{

	function tambah($data)
	{
		$this->db->insert('tbl_produk', $data);
	} 

	function tampil(){
		return $this->db->get('tbl_kategori');
	}
} 
?>