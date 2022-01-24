<div class="card">
    <div class="card-header">
    <a href="<?= base_url('umkm/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah UMKM</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>N0</th>
                    <th>Nama Pemilik</th>
                    <th>Nama UMKM</th>
                    <th>Kampung</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Jenis Usaha</th>
                    <th>Tahun Berdiri</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
                <?php $id_profil = 1;
            foreach ($umkm as $ssw) : ?>
                    <tr>
                        <td><?= $id_profil++ ?></td>
                        <td><?= $ssw->nama_pemilik ?></td>
                        <td><?= $ssw->nama_umkm ?></td>
                        <td><?= $ssw->kampung ?></td>
                        <td><?= $ssw->rt ?></td>
                        <td><?= $ssw->rw ?></td>
                        <td><?= $ssw->desa ?></td>
                        <td><?= $ssw->kecamatan ?></td>
                        <td><?= $ssw->jenis_usaha ?></td>
                        <td><?= $ssw->tahun_berdiri ?></td>
                        <td>
                        <button data-toggle="modal" data-target="#edit<?= $ssw->id_profil ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <a href="<?= base_url('umkm/delete/' . $ssw->id_profil)?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yaking Ingin Menghapus Data Ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>

<!-- Modal EDIT -->
<?php foreach($umkm as $ssw) : ?>
<div class="modal fade" id="edit<?= $ssw->id_profil ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('umkm/edit/' . $ssw->id_profil) ?>" method="post">
                    <div class="form group">
                        <label>Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" class="form-control" value="<?= $ssw->nama_pemilik ?>">
                        <?= form_error('nama_pemilik', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Nama Umkm</label>
                        <input type="text" name="nama_umkm" class="form-control" value="<?= $ssw->nama_umkm ?>">
                        <?= form_error('nama_umkm', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Kampung</label>
                        <input type="text" name="kampung" class="form-control" value="<?= $ssw->kampung ?>">
                        <?= form_error('kampung', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>RT</label>
                        <input type="text" name="rt" class="form-control" value="<?= $ssw->rt ?>">
                        <?= form_error('rt', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>RW</label>
                        <input type="text" name="rw" class="form-control" value="<?= $ssw->rw ?>">
                        <?= form_error('rw', '<div class="text-small text-danger">', '</div>') ?>
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
                    <div class="form group">
                        <label>Jenis Usaha</label>
                        <input type="text" name="jenis_usaha" class="form-control"value="<?= $ssw->jenis_usaha ?>">
                        <?= form_error('jenis_usaha', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Tahun Berdiri</label>
                        <input type="text" name="tahun_berdiri" class="form-control" value="<?= $ssw->tahun_berdiri ?>">
                        <?= form_error('tahun_berdiri', '<div class="text-small text-danger">', '</div>') ?>
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