<!-- Title Page -->
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
			<p class="alert alert-success">Sudah Memilik akun ? Silahkan <a href="<?php echo base_url('masuk') ?>">Login disini</a></p>
					<div class="col-md-12">
						<?php
						echo validation_errors('<div class="alert alert-warning">','</div>');

						echo form_open(base_url('registrasi')); ?>

						  <table class="table" width="25%">
						  	<thead>
						  		<tr>
						  			<th>Nama</th>
						  			<th><input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('nama_pelanggan') ?>" required></th>
						  		</tr>
						  	</thead>
						  	<tbody>
						  		<tr>
						  			<td>Email</td>
						  			<td><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>" required></td>
						  		</tr>

						  		<tr>
						  			<td>Password</td>
						  			<td><input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required></td>
						  		</tr>
						  			<tr>
						  			<td>Telepon</td>
						  			<td><input type="number" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo set_value('telepon') ?>" required></td>
						  		</tr>
						  			<tr>
						  			<td>Alamat</td>
						  			<td><textarea name="alamat" class="form-control" placeholder="Alamat" required><?php echo set_value('alamat') ?></textarea></td>
						  		</tr>
						  		<tr>
						  			<td></td>
						  			<td><button class="btn btn-success" type="submit">Submit</button></td>
						  		</tr>
						  	</tbody>
						  </table>

						<?php echo form_close(); ?>

					
				</div>
			</div>
		</div>
	</section>