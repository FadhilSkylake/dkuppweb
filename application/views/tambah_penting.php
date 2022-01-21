<form action="<?= base_url('penting/tambah_aksi') ?>" method="post">
    <div class="form group">
        <label>Komoditi</label>
        <input type="text" name="komoditi" class="form-control">
        <?= form_error('komoditi', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>satuan</label>
        <input type="text" name="satuan" class="form-control">
        <?= form_error('satuan', '<div class="text-small text-danger">', '</div>') ?>
    </div>
    <div class="form group">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control">
        <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
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