<!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4"> -->
  <aside class="main-sidebar elevation-4" style="background-color:lightcyan;font:black">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="font:black">
      <img src="dist/img/logoSipuja.png" alt="SIPUJA website" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light,text:bold" ><b>S I P U J A</b>  </span>
      <span class="brand-text font-weight-light,text:italic"> <i> website</i></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block" >Nama</a>
          <!-- <?= $user['nama']; ?> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url('dashboard')?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt fa-spin"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Karyawan')?>"  class="nav-link">
              <i class="nav-icon fas fa-users fa-spin"></i>
              <p>
                Karyawan
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('Pelanggan')?>" class="nav-link">
              <i class="nav-icon fas fa-user-plus fa-spin"></i>
              <p>
                Pelanggan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
          <a href="<?php echo base_url('Barang')?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie fa-spin"></i>
              <p>
                Barang
              </p>
            </a>
           
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy fa-spin"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit fa-spin"></i>
              <p>
                Rekomendasi Promo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Promo</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table fa-spin"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Bulanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Tahunan</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('panel/logout')?>" class="nav-link">
              <i class="nav-icon far fa-circle text-info fa-spin"></i>
              <p>LOGOUT</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>