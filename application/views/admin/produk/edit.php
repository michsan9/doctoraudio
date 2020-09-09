<?php 
if (isset($error)) {
	echo '<p class="alert alert-warning"';
	echo $error;
	echo '</p>';
}
echo validation_errors('<div class="alert alert-warning">','</div>');


echo form_open_multipart(base_url('admin/produk/edit/' .$produk->id_produk),' class="form-horizontal"');
?>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
</div><br>

		<div class="form-group">
			<label class="col-md-6 control-label" >Nama Produk</label>
			<div class="col-md-7">
		<input type="text" name="nama_produk" class="form-control form-control-produk"  placeholder="Masukkan Nama Produk" value="<?php echo $produk->nama_produk ?>" required>
		</div>
		</div>
			<div class="form-group">
			<label class="col-md-6 control-label" >Kode Produk</label>
			<div class="col-md-7">
		<input type="text" name="kode_produk" class="form-control form-control-produk" placeholder="Masukkan Kode Produk" value="<?php echo $produk->kode_produk ?>" readonly>
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
		<input type="number" name="harga" class="form-control form-control-produk" placeholder="Masukkan Harga Produk" value="<?php echo $produk->harga ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Stok</label>
			<div class="col-md-7">
		<input type="number" name="stok" class="form-control form-control-produk" placeholder="Masukkan Stok Produk" value="<?php echo $produk->stok ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Berat</label>
			<div class="col-md-7">
		<input type="text" name="berat" class="form-control form-control-produk" placeholder="Masukkan Berat Produk" value="<?php echo $produk->berat ?>" required>
		</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-6 control-label" >Ukuran</label>
			<div class="col-md-7">
		<input type="text" name="ukuran" class="form-control form-control-produk" placeholder="Masukkan Ukuran Produk" value="<?php echo $produk->ukuran ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-8 control-label" >Keterangan</label>
			<div class="col-md-8">
		<textarea name="keterangan" class="form-control" id="editor" placeholder="Keterangan"><?php echo $produk->keterangan ?></textarea>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Keyword</label>
			<div class="col-md-7">
		<textarea name="keywords" class="form-control" placeholder="Keywords"><?php echo $produk->keywords ?></textarea>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-6 control-label" >Upload Gambar</label>
			<div class="col-md-6">
		<input type="file" name="gambar" class="form-control">
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