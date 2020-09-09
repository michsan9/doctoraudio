<p>
	<a href="<?php echo base_url('admin/produk/tambah') ?>"class="btn btn-success btn-md">
	<i class="fa fa-plus"></i>Tambah Baru</a>
</p>
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
                      <th>Nama</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $no=1; foreach($produk as $produk) { ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td>
                        <img src="<?php echo base_url('asset/upload/image/thumbs/' .$produk->gambar) ?>" class="img img-responsive img-thumbnail">
                      </td>
                      <td><?php echo $produk->nama_produk ?></td>
                      <td><?php echo $produk->nama_kategori ?></td>
                      <td><?php echo number_format($produk->harga,'0',',','.') ?></td>
                      <td><?php echo $produk->status_produk ?></td>
                      <td>
                        <a href="<?php echo base_url('admin/produk/gambar/'.$produk->id_produk) ?>" class="btn btn-success btn-xs"><i class="fa fa-image"></i>Gambar</a>
                      	<a href="<?php echo base_url('admin/produk/edit/'.$produk->id_produk) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>
                      	<a href="<?php echo base_url('admin/produk/delete/'.$produk->id_produk) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash"></i>Hapus</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

     
      <!-- End of Main Content -->

  <!-- Bootstrap core JavaScript-->
 
  <!-- Page level plugins -->
  
</body>

</html>
