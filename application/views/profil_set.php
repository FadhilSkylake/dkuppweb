<div class="card">
    <div class="card-header">
        <h1>Setting Profil</h1>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Tugas Pokok</th>
                    <th>Fungsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $id = 1;
                foreach ($profil as $set) : ?>
                    <tr>
                        <td><?= $id++ ?></td>
                        <td><pre><?= $set->visi ?></pre></td>
                        <td><?= $set->misi ?></td>
                        <td><?= $set->tugas_pokok ?></td>
                        <td><?= $set->fungsi ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $set->id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <!-- <a href="<?= base_url('Profil_set/delete/' . $set->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fas fa-trash"></i></a> -->
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- <div class="card-header">
        <h1>Setting Berita</h1>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Tugas Pokok</th>
                    <th>Fungsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php $id = 1;
                foreach ($profil as $set) : ?> -->
                    <!-- <tr>
                        <td><?= $id++ ?></td>
                        <td><?= $set->visi ?></td>
                        <td><?= $set->misi ?></td>
                        <td><?= $set->tugas_pokok ?></td>
                        <td><?= $set->fungsi ?></td>
                        <td> -->
                            <!-- <button data-toggle="modal" data-target="#edit<?= $set->id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('Profil_set/delete/' . $set->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fas fa-trash"></i></a> -->
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal EDIT -->
<?php foreach ($profil as $ssw) : ?>
<div class="modal fade" id="edit<?= $ssw->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Profil_set/edit/' . $ssw->id) ?>" method="post">
                    <div class="form group">
                        <label>Visi</label>
                        <input type="text" name="visi" class="form-control" value="<?= $ssw->visi ?>">
                        <?= form_error('visi', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Misi</label>
                        <input type="text" name="misi" class="form-control" value="<?= $ssw->misi ?>">
                        <?= form_error('misi', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Tugas Pokok</label>
                        <input type="text" name="tugas_pokok" class="form-control" value="<?= $ssw->tugas_pokok ?>">
                        <?= form_error('tugas_pokok', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form group">
                        <label>Fungsi</label>
                        <input type="text" name="fungsi" class="form-control" value="<?= $ssw->fungsi ?>">
                        <?= form_error('fungsi', '<div class="text-small text-danger">', '</div>') ?>
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