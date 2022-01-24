  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
  <div class="container">
    </a>
    <a class="navbar-brand" href="Home">DKUPP KAB.SUBANG | <?= $title ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Profilv">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Beritav">Berita</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Bidang</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="Koperasiv">Koperasi</a></li>
            <li><a class="dropdown-item" href="Umkmv">UMKM</a></li>
            <li><a class="dropdown-item" href="Perdaganganv">Perdagangan</a></li>
            <li><a class="dropdown-item" href="Perindustrianv">Perindustrian</a></li>
            <li><a class="dropdown-item" href="Pasarv">Pasar</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Galeriv">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Produkv">Produk Unggulan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>