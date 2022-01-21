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
                            <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>