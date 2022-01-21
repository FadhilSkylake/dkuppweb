<form action="<?= base_url('pasar/tambah_aksi') ?>" method="post">
    <div class="form group">
        <label>Nama Pasar</label>
        <input type="text" name="nama_pasar" class="form-control">
        <?= form_error('nama_pasar', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Jenis Pasar</label>
        <input type="text" name="jenis_pasar" class="form-control">
        <?= form_error('jenis_pasar', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
        <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
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