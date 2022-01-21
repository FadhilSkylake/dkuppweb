<form action="<?= base_url('umkm/tambah_aksi') ?>" method="post">
    <div class="form group">
        <label>Nama Pemilik</label>
        <input type="text" name="nama_pemilik" class="form-control">
        <?= form_error('nama_pemilik', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Nama Umkm</label>
        <input type="text" name="nama_umkm" class="form-control">
        <?= form_error('nama_umkm', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Kampung</label>
        <input type="text" name="kampung" class="form-control">
        <?= form_error('kampung', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>RT</label>
        <input type="text" name="rt" class="form-control">
        <?= form_error('rt', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>RW</label>
        <input type="text" name="rw" class="form-control">
        <?= form_error('rw', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Desa</label>
        <input type="text" name="desa" class="form-control">
        <?= form_error('desa', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control">
        <?= form_error('kecamatan', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Jenis Usaha</label>
        <input type="text" name="jenis_usaha" class="form-control">
        <?= form_error('jenis_usaha', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Tahun Berdiri</label>
        <input type="text" name="tahun_berdiri" class="form-control">
        <?= form_error('tahun_berdiri', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
</form>