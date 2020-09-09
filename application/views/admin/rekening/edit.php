<?php 
echo validation_errors('<div class="alert alert-warning">','</div>');


echo form_open(base_url('admin/rekening/edit/' .$rekening->id_rekening),' class="form-horizontal"');
?>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
</div><br>

		<div class="form-group">
			<label class="col-md-6 control-label" >Nama Bank</label>
			<div class="col-md-6">
		<input type="text" name="nama_bank" class="form-control form-control-rekening"  placeholder="Masukkan Nama Bank" value="<?php echo  $rekening->nama_bank ?>" required>
		</div>
		</div>
			<div class="form-group">
			<label class="col-md-6 control-label" >Nomor Rekening</label>
			<div class="col-md-6">
		<input type="number" name="nomor_rekening" class="form-control form-control-rekening" placeholder="Masukkan Nomor Rekening" value="<?php echo $rekening->nomor_rekening ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Nama Pemilik Rekening</label>
			<div class="col-md-6">
		<input type="text" name="nama_pemilik" class="form-control form-control-rekening"  placeholder="Masukkan Nama Pemilik Rekening" value="<?php echo  $rekening->nama_pemilik ?>" required>
		</div>
		</div>
			
		<div class="form-group">
			<label class="col-md-6 control-label" ></label>
			<div class="col-md-6">
		<button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i>Simpan</button>
		</div>
		</div>
<?php echo form_close(); ?>