<?php 
echo validation_errors('<div class="alert alert-warning">','</div>');


echo form_open(base_url('admin/user/tambah'),' class="form-horizontal"');
?>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
</div><br>

		<div class="form-group">
			<label class="col-md-6 control-label" >Nama Pengguna</label>
			<div class="col-md-6">
		<input type="text" name="nama" class="form-control form-control-user"  placeholder="Masukkan Nama Pengguna" value="<?php echo set_value('nama') ?>" required>
		</div>
		</div>
			<div class="form-group">
			<label class="col-md-6 control-label" >E-Mail</label>
			<div class="col-md-6">
		<input type="email" name="email" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Masukkan Email Pengguna" value="<?php echo set_value('email') ?>" required>
		</div>
		</div>
			<div class="form-group">
			<label class="col-md-6 control-label" >Username</label>
			<div class="col-md-6">
		<input type="text" name="username" class="form-control form-control-user"  placeholder="Masukkan Username Pengguna" value="<?php echo set_value('username') ?>" required>
		</div>
		</div>
			<div class="form-group">
			<label class="col-md-6 control-label" >Password</label>
			<div class="col-md-6">
		<input type="password" name="password" class="form-control form-control-user"  placeholder="Masukkan Password Pengguna" value="<?php echo set_value('password') ?>" required>
		</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label" >Level Akses</label>
			<div class="col-md-6">
		<select name="akses_level" class="form-control">
			<option value="Admin">Admin</option>
			<option value="Pelanggan">Pelanggan</option>
		</select>
		</div>
		</div>
<div class="form-group">
			<label class="col-md-6 control-label" ></label>
			<div class="col-md-6">
		<button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i>Simpan</button>
		</div>
		</div>
<?php echo form_close(); ?>