<header class="ex-header">
  <div class="container">
    <div class="row">
      <div class="col-xl-10 offset-xl-1">
        <h1>Bidang Pasar</h1>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</header>

<div class="ex-basic-1 pt-4">
  <div class="container">
    <div class="row">
      <div class="col-xl-10 offset-xl-1">
        <h5>TUGAS POKOK & FUNGSI BIDANG PASAR</h5>
        <h5>Tugas Pokok</h5>
        <p>Bidang pengelolaan pasar mempunyai tugas pokok melakkukan kegiatan pengelolaan retribusi, keamanan dan kebersihan serta pengawasan dan pengembangan pasar.</p>
        <h5>Fungsi</h5>
          1. Penyusunan Program Kerja Sama Bidang Pengelolaan Pasar<br>
          2. Penyusunan petunjuk teknis operasional pengelolaan pasar <br>
          3. Pelaksanaan kebijakan teknis dibidang pengelolaan pasar <br>
          4. Pelaksanaan bimbingan dan pelayangan perijinan usaha dibidang pengelolaan pasar <br>
          5. Pengelolaan retribusi pasar <br>
          6. Pengelolaan kebersihan dan keamanan pasar <br>
          7. Pelaksanaan pengawasan pengembangan pasar <br>
          8. Pemanauan dan pengevaluasian pelaksanaan kegiatan pengelolaan pasar <br>
          9. Penyampaian telaahan staf sebagai bahan pertimbangan pengambilan kebijakan kepala dinas <br>
          10. Pelaksanaan koordinasi dengan unit kerja terkait dalam rangka pelaksanaan tugas <br>
          11. Penyusunan laporan hasil pelaksanaan kegiatan seksi pengelolaan pasar <br>
          12. Pelaksanaan tugas lain yang diberikan oleh atasan</p>
        <hr size="20">
        <h5>REGULASI TENTANG PASAR</h5>
        <p>PERBUP NO.15 TAHUN 2006</p>
        <hr size="20">
        <h5>STRUKTUR ORGANISASI BIDANG PASAR</h5>
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