<header class="ex-header">
  <div class="container">
    <div class="row">
      <div class="col-xl-10 offset-xl-1">
        <h1>Profil DKUPP</h1>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</header>

<div class="ex-basic-1 pt-4">
  <div class="container">
    <div class="row">
      <?php $id = 1;
      foreach ($profil as $set) : ?>
        <div class="col-xl-10 offset-xl-1">
          <h5>Visi</h5>
          <p><?= $set->visi ?></p>
          <h5>Misi</h5>
          <p><?= $set->misi ?>
          </p>
          <hr size="15">
          <h5>TUGAS POKOK & FUNGSI</h5>
          <h5>Tugas Pokok</h5>
          <p><?= $set->tugas_pokok ?></p>
          <h5>Fungsi</h5>
          <p><?= $set->fungsi ?></p>
          <hr size="20">
          <h5>Struktur Organisasi</h5>
          <img src="assets/img/organisasi.png" alt="organisasi" width="930">
          <hr size="20">
          <h5>Alamat
            <p>Jln.K.S Tubun Kec.Subang Kab.Subang Jawa Barat Kode Pos 41211 <br>
              MAPS :</p>
            <div id="googleMap" style="width:100%;height:380px;"></div>
          </h5>
        </div> <!-- end of col -->
      <?php endforeach ?>
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div>

<!-- <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
  // fungsi initialize untuk mempersiapkan peta
  function initialize() {
    var propertiPeta = {
      center: new google.maps.LatLng(-6.553251845982678, 107.76394081293844),
      zoom: 9,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  }

  // event jendela di-load  
  google.maps.event.addDomListener(window, 'load', initialize);
</script> -->