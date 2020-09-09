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
			<p class="alert alert-success">Terimakasih Pesanan Anda Akan Kami Proses</p>
					</div>
				</div>
			</div>
		</div>
	</section>