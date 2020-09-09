<?php 
echo validation_errors('<div class="alert alert-warning">','</div>');


echo form_open_multipart(base_url('admin/produk/gambar/' .$produk->id_produk),' class="form-horizontal"');
?>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
</div><br>

		<div class="form-group">
			<label class="col-md-6 control-label" >Judul Gambar</label>
			<div class="col-md-7">
		<input type="text" name="judul_gambar" class="form-control form-control-produk"  placeholder="Masukkan Judul Gambar" value="<?php echo set_value('judul_gambar') ?>" required>
		</div>
		</div>
		<div class="form-group">
			<label class="col-md-6 control-label" >Masukkan Gambar</label>
			<div class="col-md-7">
		<input type="file" name="gambar" class="form-control form-control-produk"  placeholder="Masukkan Gambar" value="<?php echo set_value('gambar') ?>" required>
		</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" ></label>
			<div class="col-md-4">
		<button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i>Simpan</button>
		</div>
		</div>

<?php echo form_close(); ?>

<?php
if ($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
 ?>
 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Judul</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	 <tr>
                      <td>1</td>
                      <td>
                        <img src="<?php echo base_url('asset/upload/image/thumbs/' .$produk->gambar) ?>" class="img img-responsive img-thumbnail" width="20%">
                      </td>
                      <td><?php echo $produk->nama_produk ?></td>
                    </tr>
                  	<?php $no=2; foreach($gambar as $gambar) { ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td>
                        <img src="<?php echo base_url('asset/upload/image/thumbs/' .$gambar->gambar) ?>" class="img img-responsive img-thumbnail" width="20%">
                      </td>
                      <td><?php echo $gambar->judul_gambar ?></td>
                      <td>
                       	<a href="<?php echo base_url('admin/produk/delete_gambar/'.$produk->id_produk. '/' .$gambar->id_gambar) ?>" class="btn btn-warning btn-xs" onclick="return confirm('Yakin Ingin Menghapus Gambar ini?')"><i class="fa fa-trash"></i>Hapus</a>
                      
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>