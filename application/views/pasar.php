<div class="card">
    <div class="card-header">
        <a href="<?= base_url('pasar/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah Pasar</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasar</th>
                    <th>Jenis Pasar</th>
                    <th>Alamat</th>
                    <th>Ket</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($pasar as $ssw) : ?>
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $ssw->nama_pasar ?></td>
                        <td><?= $ssw->jenis_pasar ?></td>
                        <td><?= $ssw->alamat ?></td>
                        <td><?= $ssw->ket ?></td>
                        <td>
                        <button data-toggle="modal" data-target="#edit<?= $ssw->no ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <a href="<?= base_url('Pasar/delete/' . $ssw->no)?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>

<!-- Modal EDIT -->
<?php foreach($pasar as $ssw) : ?>
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
                <form action="<?= base_url('pasar/edit/' . $ssw->no ) ?>" method="post">
                    <div class="form group">
                        <label>Nama Pasar</label>
                        <input type="text" name="nama_pasar" class="form-control" value="<?= $ssw->nama_pasar ?>">
                        <?= form_error('nama_pasar', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Jenis Pasar</label>
                        <input type="text" name="jenis_pasar" class="form-control" value="<?= $ssw->jenis_pasar ?>">
                        <?= form_error('jenis_pasar', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $ssw->alamat ?>">
                        <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Ket</label>
                        <input type="text" name="ket" class="form-control" value="<?= $ssw->ket ?>">
                        <?= form_error('ket', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>