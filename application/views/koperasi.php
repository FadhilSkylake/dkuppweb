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
                            <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>