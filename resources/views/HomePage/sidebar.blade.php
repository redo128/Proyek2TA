<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('/adminLTE/Logo.jpg') }}" alt="Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
    <h3>Penjualan</h3>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-4 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('/adminLTE/dist/img/multiuser.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    @if(auth()->user()->level == 'admin')

    <!-- Sidebar Menu -->
    <nav class="mt-3">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              MASTER
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/label" class="nav-link">
                <i class="fas fa-award nav-icon"></i>
                <p>Data Label</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/barang" class="nav-link">
                <i class="fas fa-car nav-icon"></i>
                <p>Data Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/pegawai" class="nav-link">
                <i class="fas fa-user-tie nav-icon"></i>
                <p>Data Pegawai</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/inventaris" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Data Inventaris</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/sewa2" class="nav-link">
                <i class="fas fa-receipt nav-icon"></i>
                <p>Pemesanan</p>
              </a>
              <a href="/pengembalian2" class="nav-link">
                <i class="fas fa-receipt nav-icon"></i>
                <p>Pengembalian</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    @endif

    @if(auth()->user()->level == 'pengguna')
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/mobil2" class="nav-link">
            <i class="fas fa-car nav-icon"></i>
            <p>Data Mobil</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              TRANSAKSI
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/sewa" class="nav-link">
                <i class="fas fa-receipt nav-icon"></i>
                <p>Pemesanan</p>
              </a>
              <a href="/pengembalian" class="nav-link">
                <i class="fas fa-receipt nav-icon"></i>
                <p>Pengembalian</p>
              </a>
            </li>
          </ul>
    </nav>
    @endif

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item bg-danger">
          <a href="/" class="nav-link">
            <i class="bi bi-box-arrow-in-left"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>