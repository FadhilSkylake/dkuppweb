<form action="<?= base_url('koperasi/tambah_aksi') ?>" method="post">
    <div class="form group">
        <label>Jenis Koperasi</label>
        <input type="text" name="jenis_koperasi" class="form-control">
        <?= form_error('jenis_koperasi', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Nama Koperasi</label>
        <input type="text" name="nama_koperasi" class="form-control">
        <?= form_error('nama_koperasi', '<div class="text-small text-danger">', '</div>') ?>
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
    <br>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
</form>