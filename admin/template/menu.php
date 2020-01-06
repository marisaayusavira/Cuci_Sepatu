<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="halaman.php" class="brand-link">
      <img src="<?= $base_url ?>/asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?= $_SESSION['level'] ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="halaman.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        <?php if($_SESSION['level']== 'Admin'){ ?>
          <li class="nav-item">
            <a href="?page=view/data_karyawan" class="nav-link">
              <i style="color:grey;" class="fas fa-users nav-icon"></i>
              <p>Data Karyawan</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="?page=layanan/layanan" class="nav-link">
              <i style="color:green;" class="fa fa-leaf nav-icon"></i>
              <p>Data Layanan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=pelanggan/pelanggan" class="nav-link">
              <i class="fa fa-user nav-icon"></i>
              <p>Data Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=jenis_sepatu/jenis_sepatu" class="nav-link">
              <i style="color:navy;" class="fas fa-tools nav-icon"></i>
              <p>Jenis Sepatu</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=order/order" class="nav-link">
              <i style="color:aqua;" class="far fa-file nav-icon"></i>
              <p>Order</p>
            </a>
          </li>
        <?php }else{

        } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <div class="content-wrapper">
      <div class="container-fluid">