<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->



    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?= base_url('assets/template/') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Subang Jawara</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('assets/template/') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">YOGI SI ANAK TOLIL</a>
            <a href="<?php echo base_url() ?>login/logout">Logout</a>
          </div>
        </div>
        <?php if ($this->session->userdata('level') == "1") { ?>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="<?= base_url('dashboard') ?>" class="nav-link">
                  <i class="fas fa-tachometer-alt nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('koperasi') ?>" class="nav-link">
                  <i class="fas fa-balance-scale nav-icon"></i>
                  <p>Koperasi</p>
                </a>
              </li>

              <li class="nav-item has-treeview menu-close">
                <a href="" class="nav-link">
                  <i class="fas fa-chart-line nav-icon"></i>
                  <p>
                    Perdagangan
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('penting') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Penting</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pokok') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pokok</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('industri') ?>" class="nav-link">
                  <i class="fas fa-industry nav-icon"></i>
                  <p>Industri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('umkm') ?>" class="nav-link">
                  <i class="fas fa-cookie-bite nav-icon"></i>
                  <p>UMKM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pasar') ?>" class="nav-link">
                  <i class="fas fa-shopping-bag nav-icon"></i>
                  <p>Pasar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('sekretariat') ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Sekretariat</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        <?php } else if ($this->session->userdata('level') == "2") { ?>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

              <li class="nav-item">
                <a href="<?= base_url('koperasi') ?>" class="nav-link">
                  <i class="fas fa-balance-scale nav-icon"></i>
                  <p>Koperasi</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        <?php } else if ($this->session->userdata('level') == "3") { ?>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item has-treeview menu-close">
                <a href="" class="nav-link">
                  <i class="fas fa-chart-line nav-icon"></i>
                  <p>
                    Perdagangan
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('penting') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Penting</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pokok') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pokok</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        <?php } else if ($this->session->userdata('level') == "4") { ?>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="<?= base_url('industri') ?>" class="nav-link">
                  <i class="fas fa-industry nav-icon"></i>
                  <p>Industri</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        <?php } else if ($this->session->userdata('level') == "5") { ?>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="<?= base_url('umkm') ?>" class="nav-link">
                  <i class="fas fa-cookie-bite nav-icon"></i>
                  <p>UMKM</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        <?php } else if ($this->session->userdata('level') == "6") { ?>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="<?= base_url('pasar') ?>" class="nav-link">
                  <i class="fas fa-shopping-bag nav-icon"></i>
                  <p>Pasar</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        <?php } ?>

      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"><?= $title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">DKUPP</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">