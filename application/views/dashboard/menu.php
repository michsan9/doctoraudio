<h4 class="m-text14 p-b-7">
Menu Pelanggan
</h4>

<ul class="p-b-54">
<li class="p-t-4">
<a class="s-text13 active1">
<i class="fa fa-user"></i> Welcome  <?php echo $this->session->userdata('nama_pelanggan'); ?>
</a>
</li>

<li class="p-t-4">
<a href="<?php echo base_url('dashboard') ?>" class="s-text13 active1">
<i class="fa fa-dashboard"></i> Dashboard
</a>
</li>
<li class="p-t-4">
<a href="<?php echo base_url('dashboard/profil') ?>" class="s-text13 active1">
<i class="fa fa-user"></i> Profil 
</a>
</li>

<li class="p-t-4">
<a href="<?php echo base_url('belanja') ?>" class="s-text13 active1">
<i class="fa fa-shopping-cart"></i> Keranjang belanja
</a>
</li>

<li class="p-t-4">
<a href="<?php echo base_url('masuk/logout') ?>" class="s-text13 active1">
<i class="fa fa-sign-out"></i> Logout
</a>
</li>

</ul>