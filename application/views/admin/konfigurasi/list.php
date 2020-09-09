<?php 
if ($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
?>

<?php 
if (isset($error)) {
	echo '<p class="alert alert-warning"';
	echo $error;
	echo '</p>';
}
echo validation_errors('<div class="alert alert-warning">','</div>');


echo form_open_multipart(base_url('admin/konfigurasi'),' class="form-horizontal"');
?>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
</div><br>

		<div class="form-group">
			<label class="col-md-6 control-label" >Nama Website</label>
			<div class="col-md-7">
		<input type="text" name="namaweb" class="form-control form-control-produk"  placeholder="Masukkan Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required>
		</div>
		</div>
			<div class="form-group">
			<label class="col-md-6 control-label" >Tagline</label>
			<div class="col-md-7">
		<input type="text" name="tagline" class="form-control form-control-produk" placeholder="Masukkan Tagline" value="<?php echo $konfigurasi->tagline ?>" required>
		</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-6 control-label" >Email</label>
			<div class="col-md-7">
		<input type="email" name="email" class="form-control form-control-produk" placeholder="Masukkan Email" value="<?php echo $konfigurasi->email ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Telepon</label>
			<div class="col-md-7">
		<input type="text" name="telepon" class="form-control form-control-produk" placeholder="Masukkan Telepon" value="<?php echo $konfigurasi->telepon ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Website</label>
			<div class="col-md-7">
		<input type="text" name="website" class="form-control form-control-produk" placeholder="Masukkan Website" value="<?php echo $konfigurasi->website ?>" required>
		</div>
		</div>


		<div class="form-group">
			<label class="col-md-6 control-label" >Alamat</label>
			<div class="col-md-7">
		<input type="text" name="alamat" class="form-control form-control-produk" placeholder="Masukkan Alamat" value="<?php echo $konfigurasi->alamat ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Facebook</label>
			<div class="col-md-7">
		<input type="url" name="facebook" class="form-control form-control-produk" placeholder="Masukkan Facebook" value="<?php echo $konfigurasi->facebook ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Instagram</label>
			<div class="col-md-7">
		<input type="url" name="instagram" class="form-control form-control-produk" placeholder="Masukkan Instagram" value="<?php echo $konfigurasi->instagram ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Keyword</label>
			<div class="col-md-7">
		<textarea name="keywords" class="form-control" placeholder="Keywords"><?php echo $konfigurasi->keywords ?></textarea>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Meta text</label>
			<div class="col-md-7">
		<input type="text" name="metatext" class="form-control form-control-produk" placeholder="Masukkan Metatext" value="<?php echo $konfigurasi->metatext ?>" required>
		</div>
		</div>		

		<div class="form-group">
			<label class="col-md-6 control-label" >Deskripsi</label>
			<div class="col-md-7">
		<input type="text" name="deskripsi" class="form-control form-control-produk" placeholder="Masukkan Deskripsi" value="<?php echo $konfigurasi->deskripsi ?>" required>
		</div>
		</div>		

		<div class="form-group">
			<label class="col-md-6 control-label" >Rekening Pembayaran</label>
			<div class="col-md-7">
		<input type="text" name="rekening_pembayaran" class="form-control form-control-produk" placeholder="Masukkan Rekening" value="<?php echo $konfigurasi->rekening_pembayaran ?>" required>
		</div>
		</div>		
		

<div class="form-group">
			<label class="col-md-6 control-label" ></label>
			<div class="col-md-6">
		<button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i>Simpan</button>
		</div>
		</div>
<?php echo form_close(); ?>