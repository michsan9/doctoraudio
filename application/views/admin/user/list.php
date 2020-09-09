<p>
	<a href="<?php echo base_url('admin/user/tambah') ?>"class="btn btn-success btn-md">
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
              <h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $no=1; foreach($user as $user) { ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $user->nama ?></td>
                      <td><?php echo $user->email ?></td>
                      <td><?php echo $user->username ?></td>
                      <td><?php echo $user->akses_level ?></td>
                      <td>
                      	<a href="<?php echo base_url('admin/user/edit/'.$user->id_user) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>
                      	<a href="<?php echo base_url('admin/user/delete/'.$user->id_user) ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash"></i>Hapus</a>
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
