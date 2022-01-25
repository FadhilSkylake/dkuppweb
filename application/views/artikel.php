<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <div class="card-body">
       <H1>INI ARTIKEL</H1>
       <table id="example1" class="table table-bordered table-striped">
           <thead>
               <tr>
               <th>No</th>
               <th>Judul</th>
               <th>Isi</th>
               <th>Penulis</th>
               <th>Gambar</th>
               </tr>
           </thead>
           <!-- <?php $id = 1;
           foreach ($artikel as $ssw) : ?> -->
            <tbody>
               <tr>
                   <td><?= $id++ ?></td>
                   <td><?= $ssw->judul ?></td>
                   <td><?= $ssw->isi ?></td>
                   <td><?= $ssw->penulis ?></td>
                   <td><?= $ssw->gambar ?></td>
                   <td>
                       <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                   </td>
               </tr>
            </tbody>
           <!-- <?php endforeach?> -->
       </table>
    </div>
</div>