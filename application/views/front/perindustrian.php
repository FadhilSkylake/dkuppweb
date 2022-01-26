<header class="ex-header">
  <div class="container">
    <div class="row">
      <div class="col-xl-10 offset-xl-1">
        <h1>Bidang Perindustrian</h1>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</header>

<div class="ex-basic-1 pt-4">
  <div class="container">
    <div class="row">
      <div class="col-xl-10 offset-xl-1">
        <h5>TUGAS POKOK & FUNGSI BIDANG PERINDUSTRIAN</h5>
        <h5>Tugas Pokok</h5>
        <p>Bidang Perindustrian mempunyai tugas pokok melaksanakan kegiatan industri kecil dan menengah, teknologi industri dan produksi serta pengembangan dan pengawasan industri.</p>
        <h5>Fungsi</h5>
          1. Penyusunan program kerja bidang industri <br>
          2. Penyusunan petunjuk teknis operasional pengelolaan perindustrian<br>
          3. Pemberian arahan bimbingan teknis dan penyuluhan kegiatan industri dalam rangka peningkatan dan pengembangan industri<br>
          4. Pemberian arahan penyiapan bimbingan dan palayanan terhadap kelancaran pengadaan barang industri, peralatan, bahan baku dan penolong serta menerapkan standar penerpan mutu, diversifikasi produk dan inovasi teknologi<br>
          5. Pemantauan dan pengevaluasian kegiatan pengembangan industri<br>
          6. Penyampaian telaahan staf sebagai bahan pertimbangan pengembilan kebijakan kepala dinas<br>
          7. Pelaksanaan koordinasi dengan unit kerja terkait dalam rangka pelaksanaan tugas<br>
          8. Penyusunan laporan hasil pelaksanaan kegiatan bidang perindustrian<br>
          9. Pelaksanaan tugas lain yang diberikan oleh atasan</p>
        <hr size="20">
        <h5>REGULASI TENTANG PERINDUSTRIAN</h5>
        <p>PERMENPERIN No. 17 Tahun 2020</p>
        <hr size="20">
        <h5>STRUKTUR ORGANISASI BIDANG PERINDUSTRIAN</h5>
        <img src="assets/img/organisasi.png" alt="organisasi" width="930">
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div>

<script src="http://maps.googleapis.com/maps/api/js"></script>
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
</script>