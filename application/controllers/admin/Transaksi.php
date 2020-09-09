<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->model('rekening_model');
		$this->load->model('header_transaksi_model');
		$this->load->model('konfigurasi_model');
	}

	public function index()
	{
		$header_transaksi = $this->header_transaksi_model->listing();
		$data = array('title' => 'Data Transaksi',
						'header_transaksi' => $header_transaksi,
						'isi' => 'admin/transaksi/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function detail($kode_transaksi)
	{		
		$header_transaksi 	= $this->header_transaksi_model->kode_transaksi($kode_transaksi);
		$transaksi 			= $this->transaksi_model->kode_transaksi($kode_transaksi);

		$data = array('title' => 'Detail Belanja',
					  'header_transaksi' => $header_transaksi,
					  'transaksi'	=> $transaksi,
					  'isi' => 'admin/transaksi/detail');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function cetak($kode_transaksi)
	{		
		$header_transaksi 	= $this->header_transaksi_model->kode_transaksi($kode_transaksi);
		$transaksi 			= $this->transaksi_model->kode_transaksi($kode_transaksi);
		$site 				= $this->konfigurasi_model->listing();

		$data = array('title' => 'Detail Belanja',
					  'header_transaksi' => $header_transaksi,
					  'transaksi'	=> $transaksi,
						'site' => $site);
			$this->load->view('admin/transaksi/cetak', $data, FALSE);	
		
		// $html = 
		// $mpdf = new \Mpdf\Mpdf();
		// // Write some HTML code:
		// $mpdf->WriteHTML($html);
		// // Output a PDF file directly to the browser
		// $mpdf->Output();
	}

	public function pdf($kode_transaksi)
	{		
		$header_transaksi 	= $this->header_transaksi_model->kode_transaksi($kode_transaksi);
		$transaksi 			= $this->transaksi_model->kode_transaksi($kode_transaksi);
		$site 				= $this->konfigurasi_model->listing();

		$data = array('title' => 'Detail Belanja',
					  'header_transaksi' => $header_transaksi,
					  'transaksi'	=> $transaksi,
						'site' => $site);
				
		
		$html = $this->load->view('admin/transaksi/cetak', $data, TRUE);
		$mpdf = new \Mpdf\Mpdf();
		// Write some HTML code:
		$mpdf->WriteHTML($html);
		// Output a PDF file directly to the browser
		$mpdf->Output();
	}



}

/* End of file Transaksi.php */
/* Location: ./application/controllers/admin/Transaksi.php */