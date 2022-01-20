<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
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
            <?php $no = 1;
            foreach($koperasi as $ssw) : ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $ssw->jenis_koperasi ?></td>
                    <td><?= $ssw->nama_koperasi ?></td>
                    <td><?= $ssw->desa ?></td>
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