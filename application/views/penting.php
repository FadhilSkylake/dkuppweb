<div class="card">
    <div class="card-header">
        <a href="<?= base_url('penting/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah Bahan Penting</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Komoditi</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                    <th>Ket</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($penting as $ssw) : ?>
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $ssw->komoditi ?></td>
                        <td><?= $ssw->satuan ?></td>
                        <td><?= $ssw->harga ?></td>
                        <td><?= $ssw->ket ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $ssw->no ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('penting/delete/' . $ssw->no) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>

<!-- Modal EDIT -->
<?php foreach ($penting as $ssw) : ?>
    <div class="modal fade" id="edit<?= $ssw->no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('penting/edit/' . $ssw->no) ?>" method="post">
                        <div class="form group">
                            <label>Komoditi</label>
                            <input type="text" name="komoditi" class="form-control" value="<?= $ssw->komoditi ?>">
                            <?= form_error('komoditi', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form group">
                            <label>satuan</label>
                            <input type="text" name="satuan" class="form-control" value="<?= $ssw->satuan ?>">
                            <?= form_error('satuan', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?= $ssw->harga ?>">
                            <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form group">
                            <label>Ket</label>
                            <input type="text" name="ket" class="form-control" value="<?= $ssw->ket ?>">
                            <?= form_error('ket', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>