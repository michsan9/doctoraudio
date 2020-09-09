<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			$this->load->model('produk_model');
			$this->load->model('kategori_model');
			$this->load->model('konfigurasi_model');
			$this->load->model('pelanggan_model');
			$this->load->model('header_transaksi_model');
			$this->load->model('transaksi_model');
			$this->load->helper('string');
	}



	public function index()
	{
		$keranjang = $this->cart->contents();

		$data = array('title'  => 'Keranjang Belanja',
					  'keranjang' => $keranjang,
						'isi' 	=> 'belanja/list');

		$this->load->view('layout/wrapper', $data, FALSE);
	}


	public function sukses()
	{
	

		$data = array('title'  => 'Belanja Berhasil',
								'isi' 	=> 'belanja/sukses');

		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function checkout()
	{
		if ($this->session->userdata('email')) {
			$email 	   		= $this->session->userdata('email');
			$nama_pelanggan =$this->session->userdata('nama_pelanggan');
			$pelanggan 		= $this->pelanggan_model->sudah_login($email,$nama_pelanggan);

			$keranjang = $this->cart->contents();

			$valid = $this->form_validation;

				$valid->set_rules('nama_pelanggan','Nama lengkap','required',
				array('required' => '%s harus diisi'));

				$valid->set_rules('telepon','Nomor Telepon','required',
				array('required' => '%s harus diisi'));

				$valid->set_rules('email','Email','required|valid_email',
				array('required' => '%s harus diisi',
					  'valid_email' => '%s tidak valid'));

				$valid->set_rules('alamat','Alamat','required',
				array('required' => '%s harus diisi'));

		
				

		if ($valid->run()===FALSE){

					$data = array('title'  => 'Checkout',
					  'keranjang' => $keranjang,
					  'pelanggan' => $pelanggan,
						'isi' 	=> 'belanja/checkout');

			$this->load->view('layout/wrapper', $data, FALSE);

			//masuk db
			}else{
				$i = $this->input;
				$data = array( 'id_pelanggan'			 =>  $pelanggan->id_pelanggan,

								'nama_pelanggan'		 => $i->post('nama_pelanggan'),
							   'email' 					=> $i->post('email'),
							   'telepon' 				=> $i->post('telepon'),
							   	'alamat' 				=> $i->post('alamat'),
							   	'kode_transaksi' 		=> $i->post('kode_transaksi'),
							   	'tanggal_transaksi' 		=> $i->post('tanggal_transaksi'),
							   	'jumlah_transaksi' 		=> $i->post('jumlah_transaksi'),
							   	'status_bayar' 		=> 'Belum',
							   	'tanggal_post' => date('Y-m-d H:i:s'),
							);
				$this->header_transaksi_model->tambah($data);

				foreach ($keranjang as $keranjang) {
					$biaya = explode(',', $this->input->post('layanan', TRUE));
					$totals = $this->cart->total() + $biaya[0];
					// $sub_total = $keranjang['price'] * $keranjang['qty'];
					$data = array('id_pelanggan' => $pelanggan->id_pelanggan,
									'kode_transaksi' => $i->post('kode_transaksi'),
									'id_produk' =>$keranjang['id'],
									'harga'	=> $keranjang['price'],
									'jumlah'=> $keranjang['qty'],
									'total_harga' =>$totals,
									'tanggal_transaksi' => $i->post('tanggal_transaksi'),
								);
					$this->transaksi_model->tambah($data);
				}

				$this->cart->destroy();
				$this->session->set_flashdata('sukses', 'Checkout Berhasil');
				redirect(base_url('belanja/sukses'),'refresh');

		}
			//end db
			
		}else{
			$this->session->set_flashdata('sukses', 'Silahkan Login Atau Registrasi Terlebih Dahulu ');
			redirect('registrasi','refresh');
		}
	}

	public function add()
	{
		$id 			= $this->input->post('id');
		$qty 			= $this->input->post('qty');
		$price 			= $this->input->post('price');
		$name 			= $this->input->post('name');
		$redirect_page 	= $this->input->post('redirect_page');


		$data = array(
        			'id'       => $id,
        			'qty'      => $qty,
        			'price'    => $price,
       				 'name'    => $name);

		$this->cart->insert($data);

		redirect($redirect_page,'refresh');
	}

	public function update_cart($rowid)
	{
		if ($rowid) {
			$data = array('rowid' => $rowid,
							'qty' => $this->input->post('qty'));
			$this->cart->update($data);
			$this->session->set_flashdata('sukses', 'Data Sudah Diupdate');
			redirect(base_url('belanja'),'refresh');


		}else{
			redirect(base_url('belanja'),'refresh');
		}
	}
	public function city()
	{
		$prov = $this->input->post('prov', TRUE);
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=$prov",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
		"key: cd7294a9840a352bebaae545b96b3246"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		echo "cURL Error #:" . $err;
		} else {
		$data = json_decode($response, TRUE);
		echo '<option value="" selected disabled>Kota / Kabupaten</option>';
 		 for ($i=0; $i < count($data['rajaongkir']['results']) ; $i++) { 
   		 echo '<option value="'.$data['rajaongkir']['results'][$i]['city_id'].','.$data['rajaongkir']['results'][$i]['city_name'].'">'.$data['rajaongkir']['results'][$i]['city_name'].'</option>'; 
		}
	}
}

	public function getcost()
	{
		$asal = 350;
		$dest = $this->input->POST('dest', TRUE);
		$berat = 10;

		$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=$asal&destination=$dest&weight=$berat&courier=jne",
			CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: cd7294a9840a352bebaae545b96b3246"
			),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			echo "cURL Error #:" . $err;
			} else {
			$data = json_decode($response, TRUE);

			echo '<option value="" selected disabled>Layanan Pengiriman</option>';
			for ($i=0; $i < count($data['rajaongkir']['results']) ; $i++) { 
			 	for ($l=0; $l < count($data['rajaongkir']['results'][$i]['costs']) ; $l++) { 
			 		echo '<option value="' .$data['rajaongkir']['results'][$i]['costs'][$l]['cost'][0]['value'].','.$data['rajaongkir']['results'][$i]['costs'][$l]['service'].'('.$data['rajaongkir']['results'][$i]['costs'][$l]['description'] .')">';

			 		echo $data['rajaongkir']['results'][$i]['costs'][$l]['service'].'('.$data['rajaongkir']['results'][$i]['costs'][$l]['description'] .')</option>';
					
			 	}
			 } 
			}	
		}
	
	public function cost()
		{
			$biaya = explode(',', $this->input->post('layanan', TRUE));
			

			echo $biaya[0];
		}

		public function semua(){
			$biaya = explode(',', $this->input->post('layanan', TRUE));
			$totals = $this->cart->total() + $biaya[0];

			echo $totals;
		}

	public function hapus($rowid)

	{
		if ($rowid) {
			$this->cart->remove($rowid);
		$this->session->set_flashdata('sukses', 'Keranjang Belanja Sudah Dihapus');
		redirect(base_url('belanja'),'refresh');
		}else{

		$this->cart->destroy();
		$this->session->set_flashdata('sukses', 'Keranjang Belanja Sudah Dihapus');
		redirect(base_url('belanja'),'refresh');
	}
}
}


/* End of file Belanja.php */
/* Location: ./application/controllers/Belanja.php */