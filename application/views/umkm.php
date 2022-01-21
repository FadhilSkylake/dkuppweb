<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id Profil</th>
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
            <?php $id_profil = 1;
            foreach($umkm as $ssw) : ?>
            <tbody>
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
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>