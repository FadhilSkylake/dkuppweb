<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
  <div class="container">
    <img src="<?= base_url('assets/img') ?>/logo.png" alt="" width="70" height="50">
    </a>
    <a class="navbar-brand" href="#">DKUPP KAB.SUBANG | <?= $title ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Beritav">Berita</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Bidang</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url('Koperasiv') ?>">Koperasi</a></li>
            <li><a class="dropdown-item" href="Umkmv">UMKM</a></li>
            <li><a class="dropdown-item" href="Perdaganganv">Perdagangan</a></li>
            <li><a class="dropdown-item" href="perindustrian.php">Perindustrian</a></li>
            <li><a class="dropdown-item" href="pasar.php">Pasar</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Produk Unggulan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>