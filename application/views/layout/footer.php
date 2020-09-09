<?php 
$site = $this->konfigurasi_model->listing();

$nav_produk = $this->konfigurasi_model->nav_produk();
 ?>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Kontak Kami
				</h4>

				<div>
					<p class="s-text7 w-size27">
						<?php echo ($site->alamat) ?>
						<br> <i class="fa fa-envelope"></i> <?php echo $site->email ?>
						<br> <i class="fa fa-phone"></i> <?php echo $site->telepon ?>
					</p> 

					<div class="flex-m p-t-30">
						<a href="<?php echo $site->facebook ?>" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="<?php echo $site->instagram ?>" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
				
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Kategori Produk
				</h4>

				<ul>
					<?php foreach ($nav_produk as $nav_produk) { ?>
					<li class="p-b-9">
						<a href="<?php echo base_url('produk/kategori/' .$nav_produk->slug_kategori) ?>" class="s-text7">
							<?php echo $nav_produk->nama_kategori ?>
						</a>
					</li>
				<?php } ?>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>

					<li class="p-b-9" style="margin-top: 20px;">
						<a href="<?php echo base_url('kontak') ?>" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="<?php echo base_url('kontak') ?>" class="s-text7">
							Contact Us
						</a>
					</li>

					
				</ul>
			</div>

			

			
			</div>
		</div>

		

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. 
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url() ?>/asset/depan/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url() ?>/asset/depan/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url() ?>/asset/depan/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>/asset/depan/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url() ?>/asset/depan/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url() ?>/asset/depan/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>/asset/depan/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url() ?>/asset/depan/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url() ?>/asset/depan/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url() ?>/asset/depan/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});

		<?php if ($this->uri->segment(1) =='belanja' || $this->uri->segment(1) =='Belanja') { ?>
		$('#prov').change(function(){
		 		var prov = $('#prov').val();
		 		var provience =prov.split('.');

		 $.ajax({
		 	url: "<?=base_url();?>belanja/city",
		 	method: "POST",
		 	data: { prov : provience[0] },
		 	success: function(obj){
		 		$('#kota').html(obj);
		 	}
		 });		
		 });

		$('#kota').change(function(){
		 		var kota = $('#kota').val();
		 		var dest =kota.split('.');

		 $.ajax({
		 	url: "<?=base_url();?>belanja/getcost",
		 	method: "POST",
		 	data: { dest : dest[0] },
		 	success: function(obj){
		 		$('#layanan').html(obj);
		 	}
		 });		
		 });

		$('#layanan').change(function(){
		 	var layanan = $('#layanan').val();
		 		

		 $.ajax({
		 	url: "<?=base_url();?>belanja/cost",
		 	method: "POST",
		 	data: { layanan : layanan },
		 	success: function(obj){
		 		var hasil = obj.split(".");

		 		$('#ongkir').val(hasil[0]);

		 	}
		 });		
		 });

		$('#layanan').change(function(){
		 	var layanan = $('#layanan').val();
		 		

		 $.ajax({
		 	url: "<?=base_url();?>belanja/semua",
		 	method: "POST",
		 	data: { layanan : layanan },
		 	success: function(obj){
		 		var hasil = obj.split(".");

		 		$('#total').val(hasil[0]);
		 		
		 	}
		 });		
		 });



	<?php } ?>
	</script>


<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/asset/depan/js/main.js"></script>

</body>
</html>
