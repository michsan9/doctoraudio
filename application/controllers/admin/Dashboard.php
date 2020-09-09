<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->model('produk_model');
	}

	public function index()
	{
		$sie= $this->produk_model->total_produk();
		$site= $this->produk_model->total_kategori1();
		$cart = $this->produk_model->listing();
		$data = array ('title' => 'Halaman Administrator',
					'sie'	=> $sie,
					'site'	=> $site,
					'cart'	=> $cart,
					'isi'  => 'admin/dashboard/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */