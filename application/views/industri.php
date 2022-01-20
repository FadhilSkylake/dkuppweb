<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id Perusahaan</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat Perusahaan</th>
                    <th>Ket</th>
                </tr>
            </thead>
            <?php $id_perusahaan = 1;
            foreach($industri as $ssw) : ?>
            <tbody>
                <tr>
                    <td><?= $id_perusahaan++ ?></td>
                    <td><?= $ssw->nama_perusahaan ?></td>
                    <td><?= $ssw->alamat_perusahaan ?></td>
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