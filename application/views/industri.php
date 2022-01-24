<div class="card">
    <div class="card-header">
    <a href="<?= base_url('industri/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah Industri</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>no</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat Perusahaan</th>
                    <th>Ket</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $id_perusahaan = 1;
            foreach ($industri as $ssw) : ?>
                <tbody>
                    <tr>
                        <td><?= $id_perusahaan++ ?></td>
                        <td><?= $ssw->nama_perusahaan ?></td>
                        <td><?= $ssw->alamat_perusahaan ?></td>
                        <td><?= $ssw->ket ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $ssw->id_perusahaan ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('industri/delete/' . $ssw->id_perusahaan)?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>


<?php foreach($industri as $ssw) : ?>
<div class="modal fade" id="edit<?= $ssw->id_perusahaan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('industri/edit/' . $ssw->id_perusahaan) ?>" method="post">
                    <div class="form group">
                        <label>Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="form-control" value="<?= $ssw->nama_perusahaan?>">
                        <?= form_error('nama_perusahaan', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Alamat Perusahaan</label>
                        <input type="text" name="alamat_perusahaan" class="form-control"value="<?= $ssw->alamat_perusahaan?>">
                        <?= form_error('alamat_perusahaan', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Ket</label>
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