<?php 
echo validation_errors('<div class="alert alert-warning">','</div>');


echo form_open(base_url('admin/kategori/tambah'),' class="form-horizontal"');
?>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
</div><br>

		<div class="form-group">
			<label class="col-md-6 control-label" >Nama Kategori</label>
			<div class="col-md-6">
		<input type="text" name="nama_kategori" class="form-control form-control-kategori"  placeholder="Masukkan Nama Kategori" value="<?php echo set_value('nama') ?>" required>
		</div>
		</div>
			<div class="form-group">
			<label class="col-md-6 control-label" >Urutan</label>
			<div class="col-md-6">
		<input type="number" name="urutan" class="form-control form-control-kategori"  placeholder="Masukkan urutan Produk" value="<?php echo set_value('urutan') ?>" required>
		</div>
		</div>
			
		<div class="form-group">
			<label class="col-md-6 control-label" ></label>
			<div class="col-md-6">
		<button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i>Simpan</button>
		</div>
		</div>
<?php echo form_close(); ?>