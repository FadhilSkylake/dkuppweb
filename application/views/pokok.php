<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
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
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>