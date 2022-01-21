<form action="<?= base_url('industri/tambah_aksi') ?>" method="post">
    <div class="form group">
        <label>Nama Perusahaan</label>
        <input type="text" name="nama_perusahaan" class="form-control">
        <?= form_error('nama_perusahaan', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Alamat Perusahaan</label>
        <input type="text" name="alamat_perusahaan" class="form-control">
        <?= form_error('alamat_perusahaan', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Ket</label>
        <input type="text" name="ket" class="form-control">
        <?= form_error('ket', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
</form>