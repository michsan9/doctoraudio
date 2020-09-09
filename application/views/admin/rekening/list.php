<p>
	<a href="<?php echo base_url('admin/rekening/tambah') ?>"class="btn btn-success btn-md">
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
                      <th>Nama Bank</th>
                      <th>Nomor Rekening</th>
                      <th>Pemilik</th>
                      <th>Action</th>
                
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $no=1; foreach($rekening as $rekening) { ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $rekening->nama_bank ?></td>
                      <td><?php echo $rekening->nomor_rekening ?></td>
                      <td><?php echo $rekening->nama_pemilik ?></td>
                      <td>  <a href="<?php echo base_url('admin/rekening/edit/'.$rekening->id_rekening) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>
                        <a href="<?php echo base_url('admin/rekening/delete/'.$rekening->id_rekening) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash"></i>Hapus</a></td>
                      
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
