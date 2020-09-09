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


echo form_open_multipart(base_url('admin/konfigurasi/logo'),' class="form-horizontal"');
?>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
</div><br>

		<div class="form-group">
			<label class="col-md-6 control-label" >Nama Website</label>
			<div class="col-md-7">
		<input type="text" name="namaweb" class="form-control form-control-produk"  placeholder="Masukkan Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required>
		<br>logo lama : <img src="<?php echo base_url('asset/upload/image/' .$konfigurasi->logo) ?>" class="img img-responsive img-thumbnail" width="200">
		</div>
		</div>
			<div class="form-group">
			<label class="col-md-6 control-label" >Upload Logo Baru</label>
			<div class="col-md-7">
		<input type="file" name="logo" class="form-control form-control-produk" placeholder="Masukkan Logo Baru" value="<?php echo $konfigurasi->logo ?>" required>
		</div>
		</div>
		
		

		<div class="form-group">
			<label class="col-md-6 control-label" ></label>
			<div class="col-md-6">
		<button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i>Simpan</button>
		</div>
		</div>
<?php echo form_close(); ?>