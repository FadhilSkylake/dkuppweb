<form action="<?= base_url('pokok/tambah_aksi') ?>" method="post">
    <div class="form group">
        <label>Nama Bahan Pokok</label>
        <input type="text" name="nama_bahan_pokok" class="form-control">
        <?= form_error('nama_bahan_pokok', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Volume</label>
        <input type="text" name="volume" class="form-control">
        <?= form_error('volume', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Harga Kemarin</label>
        <input type="text" name="harga_kemarin" class="form-control">
        <?= form_error('harga_kemarin', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Harga Hari Ini</label>
        <input type="text" name="harga_hari_ini" class="form-control">
        <?= form_error('harga_hari_ini', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Perubahan</label>
        <input type="text" name="perubahan" class="form-control">
        <?= form_error('perubahan', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>ket</label>
        <input type="text" name="ket" class="form-control">
        <?= form_error('ket', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
</form>