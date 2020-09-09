<!-- Title Page -->
	<section class="parallax0 parallax100" style="background-image: url(<?php echo base_url()?>asset/img/3.jpg);">
		<div class="overlay0 p-t-190 p-b-200">
			<div class="flex-col-c-m p-l-15 p-r-15">
		<h2 class="l-text2 t-center">
			<?php echo $title ?>
		</h2>
	</div>
</div>
</section>
	

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">


			



			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<?php if($this->session->flashdata('sukses')) {
				echo '<div class="alert alert-warning">';
				echo $this->session->flashdata('sukses');
				echo '</div>';

			}?>
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">Gambar</th>
							<th class="column-2">Produk</th>
							<th class="column-3">Harga</th>
							<th class="column-4 p-l-70">Jumlah</th>
							<th class="column-5">Subtotal</th>
							<th class="column-6" width="20%">Action</th>
						</tr>
						<?php 
						

						foreach($keranjang as $keranjang){
							echo form_open(base_url('belanja/update_cart/'.$keranjang['rowid']));
							$id_produk = $keranjang['id'];
							$produk 	= $this->produk_model->detail($id_produk);
							$biaya = explode(',', $this->input->post('layanan', TRUE));
							$totals = $this->cart->total() + $biaya[0];

								
						 ?>
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="<?php echo base_url('asset/upload/image/' .$produk->gambar) ?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><?php echo $keranjang['name'] ?></td>
							<td class="column-3">Rp.<?php echo number_format($keranjang['price'],'0',',','.')  ?></td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" name="qty" value="<?php echo $keranjang['qty'] ?>">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">Rp. <?php echo number_format($keranjang['subtotal'],'0',',','.')  ?></td>
							<td> <button type="submit" name="update" class="btn btn-success btn-sm">Update</button>
								<a href="<?php echo base_url('belanja/hapus/'.$keranjang['rowid'])?>" name="update" class="btn btn-warning btn-sm">Hapus</a></td>
						</tr>
					<?php 
					echo form_close(); }
					 ?>

					<tr class="table-row">
						<td colspan="4" class="column-1" style="font-weight: bold;">Total Belanja</td>
						<td class="column-2" style="font-weight: bold;">Rp. <?php echo number_format($this->cart->total(),'0',',','.')  ?></td>
					</tr>					
					</table>
				</div>
			</div>
	



			<?php 
			echo form_open(base_url('belanja/checkout')); 
			$kode_transaksi = date('dmY').random_string('alnum', 5);

			?>
			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cek Ongkir
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Ongkir
					</span>

					<span class="m-text21 w-size20 w-full-sm" >
						<input type="text" name="" id="ongkir" readonly>
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Jasa Pengiriman
					</span>

					<div class="w-size20 w-full-sm">
						<span class="s-text19">
							Provinsi
						</span>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="selection-2" id="prov">
								<option>Nama Provinsi</option>
								<?php $this->load->view('belanja/prov'); ?>
							</select>
						</div>

						<span class="s-text19">
							Kota / Kabupaten
						</span>
						<div class="size13 bo4 m-b-12">
						<select class="selection-2" id="kota">
								<option>Kota / Kabupaten</option>
							</select>
						</div>

						<div class="size13 bo4 m-b-22">
							<select class="selection-2" id="layanan">
								<option>Layanan Pengiriman</option>
							</select>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>
						
					<span class="m-text21 w-size20 w-full-sm" >
					<input type="text" name="" id="total">	
					</span>
				</div>
			</div>
			<input type="hidden" name="id_pelanggan" value="<?php echo $pelanggan->id_pelanggan ?>">
			<input type="hidden" name="jumlah_transaksi"  value="<?php echo $this->cart->total() ?>">
				<input type="hidden" name="tanggal_transaksi"  value="<?php echo date('Y-m-d'); ?>">
			<table class="table" width="25%">
						  	<thead>
						  		<tr>
						  			<th>Kode Transaksi</th>
						  			<th><input type="text" name="kode_transaksi" class="form-control" value="<?php echo $kode_transaksi ?>" readonly required ></th>
						  		</tr>
						  		<tr>
						  			<th>Nama Penerima</th>
						  			<th><input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pelanggan->nama_pelanggan ?>" required></th>
						  		</tr>
						  	</thead>
						  	<tbody>
						  		<tr>
						  			<td>Email Penerima</td>
						  			<td><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $pelanggan->email ?>" required></td>
						  		</tr>
						  			<tr>
						  			<td>Telepon Penerima</td>
						  			<td><input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $pelanggan->telepon ?>" required></td>
						  		</tr>
						  			<tr>
						  			<td>Alamat Pengiriman</td>
						  			<td><textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $pelanggan->alamat ?></textarea></td>
						  		</tr>
						  		<tr>
						  			<td></td>
						  			<td><button class="btn btn-success" type="submit">Checkout</button></td>
						  		</tr>
						  	</tbody>
						  </table>
			<?php echo form_close(); ?>


				</div>
			</div>
		</section>
		
