<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
	} 
	
	public function index()
	{
		$data['tbl_produk'] = $this->m_account->tampil()->result();
		$this->load->view('dashboardv',$data);
	}

	function hapus($id_produk){
		$where = array('id_produk' => $id_produk);
		$this->m_account->hapus_data($where,'tbl_produk');
		redirect(base_url('dashboard'));
	}

	function edit($id_produk){
		$where = array('id_produk' => $id_produk);
		$data['tbl_produk'] = $this->m_account->edit_data($where,'tbl_produk')->result();
		$this->load->view('v_edit',$data);
	}

	function upload(){
			$config['upload_path']         = 'assets/images';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
				$id_produk = $this->input->post('id_produk');
	        	$nama_produk = $this->input->post('nama_produk');
	        	$deskripsi = $this->input->post('deskripsi');
		        $harga = $this->input->post('harga');
		        $gambar = $this->input->post('gambar');
		        $kategori = $this->input->post('kategori');
				$stock_barang = $this->input->post('stock_barang');

		        $data = array(
		        	'id_produk' => $id_produk,
		        	'nama_produk' => $nama_produk,
		        	'deskripsi' => $deskripsi,
		        	'harga' => $harga,
		        	'gambar' => $gambar,
		        	'kategori' => $kategori,
					'stock_barang' => $stock_barang
		        );

		        $where = array (
		        	'id_produk' => $id_produk
		        );

		        $this->m_account->update_data($where,$data,'tbl_produk');
		        redirect(base_url('dashboard'));
            }
            else {
				$id_produk = $this->input->post('id_produk');
		        $nama_produk = $this->input->post('nama_produk');
		        $deskripsi = $this->input->post('deskripsi');
		        $harga = $this->input->post('harga');
		        $file = $this->upload->data();
		        $gambar = $file['file_name'];
		        $kategori = $this->input->post('kategori');
				 $stock_barang = $this->input->post('stock_barang');
	 
		$data = array(
			'id_produk' => $id_produk,
			'nama_produk' => $nama_produk,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'gambar' => $gambar,
			'kategori' => $kategori,
			'stock_barang' => $stock_barang
		);
	 
		$where = array(
			'id_produk' => $id_produk
		);
	 
		$this->m_account->update_data($where,$data,'tbl_produk');
		redirect(base_url('dashboard'));
		}
	}

	function invoice(){
		$data['tbl_order'] = $this->m_account->get_order();
		$this->load->view('invoice',$data);
	}

	function detail(){
		$id = ($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['tbl_pelanggan'] = $this->m_account->get_pelanggan_id($id);
		$data['tbl_detail_order'] = $this->m_account->get_detail_id($id);
		$this->load->view('detail', $data);
	}
	function kategori(){
		$data['tbl_kategori'] = $this->m_account->get_kategori();
		$this->load->view('kategori',$data);
	}
	function editkategori($id){
		$where = array('id' => $id);
		$data['tbl_kategori'] = $this->m_account->edit_kategori($where,'tbl_kategori')->result();
		$this->load->view('edit_kategori',$data);
	}
	function hapuskategori($id){
		$where = array('id' => $id);
		$this->m_account->hapus_kategori($where,'tbl_kategori');
		redirect(base_url('dashboard/kategori'));
	}
	function updatekategori(){
			
            $this->load->library('upload', $config);
 
            
		$id = $this->input->post('id');
        $nama_kategori = $this->input->post('nama_kategori');

	 
		$data = array(
			'id' => $id,
			'nama_kategori' => $nama_kategori,
			
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->m_account->update_kategori($where,$data,'tbl_kategori');
		redirect(base_url('dashboard/kategori'));
	
	}
}
