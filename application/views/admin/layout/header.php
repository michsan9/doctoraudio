 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard')?>">
          <img src="<?php echo base_url()?>asset/img/da.jpg" width="65%">
        <div class="sidebar-brand-text mx-3">Doctor Audio</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span class="" >Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>
 <!-- Nav Item - Utilities Collapse Menu -->

     <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url('admin/rekening')?>">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span class="" >Rekening</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/transaksi')?>">
          <i class="fas fa-fw fa-check"></i>
          <span class="" >Transaksi</span></a>
      </li>

 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-sitemap"></i>
          <span>Produk</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Produk:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/produk')?>">Data Produk</a>
            <a class="collapse-item" href="<?php echo base_url('admin/produk/tambah')?>">Tambah Produk</a>
            <a class="collapse-item" href="<?php echo base_url('admin/kategori')?>">Kategori Produk</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->


      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Konfigurasi :</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/konfigurasi')?>">Konfigurasi Umum</a>
            <a class="collapse-item" href="<?php echo base_url('admin/konfigurasi/logo')?>">Konfigurasi Logo</a>
            <a class="collapse-item" href="<?php echo base_url('admin/konfigurasi/icon')?>">Konfigurasi icon</a>
          </div>
        </div>
      </li>

    
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-lock"></i>
          <span>Pengguna</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Pengguna:</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/user')?>">Data Pengguna</a>
            <a class="collapse-item" href="<?php echo base_url('admin/user/tambah')?>">Tambah Pengguna</a>
          </div>
        </div>
      </li>


      

     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->