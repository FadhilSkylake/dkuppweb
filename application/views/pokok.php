<div class="card">
    <div class="card-header">
    <a href="<?= base_url('pokok/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah Bahan Pokok</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bahan Pokok</th>
                    <th>Volume</th>
                    <th>harga Kemarin</th>
                    <th>Harga Hari Ini</th>
                    <th>Perubahan</th>
                    <th>Ket</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($pokok as $ssw) : ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $ssw->nama_bahan_pokok ?></td>
                    <td><?= $ssw->volume ?></td>
                    <td><?= $ssw->harga_kemarin ?></td>
                    <td><?= $ssw->harga_hari_ini ?></td>
                    <td><?= $ssw->perubahan ?></td>
                    <td><?= $ssw->ket ?></td>
                    <td>
                    <button data-toggle="modal" data-target="#edit<?= $ssw->no ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                    <a href="<?= base_url('pokok/delete/' . $ssw->no)?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>

<!-- Modal EDIT -->
<?php foreach($pokok as $ssw) : ?>
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
            <form action="<?= base_url('pokok/edit/' . $ssw->no) ?>" method="post">
                <div class="form group">
                    <label>Nama Bahan Pokok</label>
                    <input type="text" name="nama_bahan_pokok" class="form-control" value="<?= $ssw->nama_bahan_pokok?>">
                    <?= form_error('nama_bahan_pokok', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form group">
                    <label>Volume</label>
                    <input type="text" name="volume" class="form-control" value="<?= $ssw->volume?>">
                    <?= form_error('volume', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form group">
                    <label>Harga Kemarin</label>
                    <input type="text" name="harga_kemarin" class="form-control" value="<?= $ssw->harga_kemarin?>">
                    <?= form_error('harga_kemarin', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form group">
                    <label>Harga Hari Ini</label>
                    <input type="text" name="harga_hari_ini" class="form-control" value="<?= $ssw->harga_hari_ini?>">
                    <?= form_error('harga_hari_ini', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form group">
                    <label>Perubahan</label>
                    <input type="text" name="perubahan" class="form-control" value="<?= $ssw->perubahan?>">
                    <?= form_error('perubahan', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form group">
                    <label>ket</label>
                    <input type="text" name="ket" class="form-control" value="<?= $ssw->ket?>">
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