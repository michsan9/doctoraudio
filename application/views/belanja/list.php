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

			<div class="flex-w flex-sb-m p-t-20 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="<?php echo base_url('belanja/hapus')?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Bersihkan 
					</a>

				</div>
				<div class="size10 trans-0-4 m-t-10 m-b-10 pull-right" >
					<!-- Button -->
					<a href="<?php echo base_url('belanja/checkout')?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Checkout 
					</a>
					
				</div>
			</div>


			
			</div>
		</div>
	</section>
