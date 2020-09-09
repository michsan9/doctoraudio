<?php 
echo validation_errors('<div class="alert alert-warning">','</div>');


echo form_open_multipart(base_url('admin/produk/tambah'),' class="form-horizontal"');
?>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
</div><br>

		<div class="form-group">
			<label class="col-md-6 control-label" >Nama Produk</label>
			<div class="col-md-7">
		<input type="text" name="nama_produk" class="form-control form-control-produk"  placeholder="Masukkan Nama Produk" value="<?php echo set_value('nama_produk') ?>" required>
		</div>
		</div>
			<div class="form-group">
			<label class="col-md-6 control-label" >Kode Produk</label>
			<div class="col-md-7">
		<input type="text" name="kode_produk" class="form-control form-control-produk" placeholder="Masukkan Kode Produk" value="<?php echo set_value('kode_produk') ?>" required>
		</div>
		</div>
			
		<div class="form-group">
			<label class="col-md-6 control-label" >Kategori Produk</label>
			<div class="col-md-7">
		<select name="id_kategori" class="form-control">
			<?php foreach($kategori as $kategori){ ?>
			<option value="<?php echo $kategori->id_kategori ?>"><?php echo $kategori->nama_kategori ?></option>
			<?php } ?>
		</select>
		</div>
		</div>

			<div class="form-group">
			<label class="col-md-6 control-label" >Harga</label>
			<div class="col-md-7">
		<input type="number" name="harga" class="form-control form-control-produk" placeholder="Masukkan Harga Produk" value="<?php echo set_value('harga') ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Stok</label>
			<div class="col-md-7">
		<input type="number" name="stok" class="form-control form-control-produk" placeholder="Masukkan Stok Produk" value="<?php echo set_value('stok') ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Berat</label>
			<div class="col-md-7">
		<input type="text" name="berat" class="form-control form-control-produk" placeholder="Masukkan Berat Produk" value="<?php echo set_value('berat') ?>" required>
		</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-6 control-label" >Ukuran</label>
			<div class="col-md-7">
		<input type="text" name="ukuran" class="form-control form-control-produk" placeholder="Masukkan Ukuran Produk" value="<?php echo set_value('ukuran') ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Keterangan</label>
			<div class="col-md-7">
		<textarea name="keterangan" class="form-control" id="editor" placeholder="Keterangan"><?php echo set_value('keterangan') ?></textarea>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Keyword</label>
			<div class="col-md-7">
		<textarea name="keywords" class="form-control" placeholder="Keywords"><?php echo set_value('keywords') ?></textarea>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Upload Gambar</label>
			<div class="col-md-6">
		<input type="file" name="gambar" class="form-control" required="required">
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Status Produk</label>
			<div class="col-md-6">
		<select name="status_produk" class="form-control">
		<option value="Publish">Publikasikan</option>
		<option value="Draft">Simpan Sebagai Draft</option>
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