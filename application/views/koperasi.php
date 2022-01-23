<div class="card">
    <div class="card-header">
        <a href="<?= base_url('koperasi/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah Koperasi</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Koperasi</th>
                    <th>Nama Koperasi</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($koperasi as $ssw) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $ssw->jenis_koperasi ?></td>
                        <td><?= $ssw->nama_koperasi ?></td>
                        <td><?= $ssw->desa ?></td>
                        <td><?= $ssw->kecamatan ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $ssw->no ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal EDIT -->
<?php foreach($koperasi as $ssw) : ?>
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
                <form action="<?= base_url('koperasi/edit/' . $ssw->no ) ?>" method="post">
                    <div class="form group">
                        <label>Jenis Koperasi</label>
                        <input type="text" name="jenis_koperasi" class="form-control" value="<?= $ssw->jenis_koperasi ?>">
                        <?= form_error('jenis_koperasi', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Nama Koperasi</label>
                        <input type="text" name="nama_koperasi" class="form-control" value="<?= $ssw->nama_koperasi ?>">
                        <?= form_error('nama_koperasi', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Desa</label>
                        <input type="text" name="desa" class="form-control" value="<?= $ssw->desa ?>">
                        <?= form_error('desa', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" value="<?= $ssw->kecamatan ?>">
                        <?= form_error('kecamatan', '<div class="text-small text-danger">', '</div>') ?>
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