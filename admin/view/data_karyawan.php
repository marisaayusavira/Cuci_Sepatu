<!-- modal -->
<div id="karyawan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Karyawan</h4>
      </div>
      <form action="?page=view/aksi_karyawan" method="POST" enctype="multipart/form-data">
	      <div class="modal-body">
	      	<div class="form-group">
	      		<label>Nama Karyawan</label>
	      		<input type="text" name="nama" class="form-control" required>
	      	</div>
	      	<div class="form-group">
	      		<label>Jenis Kelamin</label>
	      		&nbsp;&nbsp;&nbsp;&nbsp;
	      		<input type="radio" name="jk" value="Laki-laki" required> Laki-laki
	      		&nbsp;&nbsp;
	      		<input type="radio" name="jk" value="Perempuan" required> Perempuan
	      	</div>
	      	<div class="form-group">
	      		<label>alamat</label>
	      		<textarea class="form-control" name="alamat" style="width:465px; height: 150px"></textarea> 
	      	</div>
	      	<div class="form-group">
	      		<label>Telpon</label>
	      		<input type="number" name="telpon" class="form-control" required>
	      	</div>
	      	<div class="form-group">
	      		<label>Username</label>
	      		<input type="text" name="username" class="form-control" required>
	      	</div>
	      	<div class="form-group">
	      		<label>Password</label>
	      		<input type="password" name="password" class="form-control" required>
	      	</div>
	      	<div align="right">
	      		<input type="submit" name="karyawan" class="btn btn-primary" value="Simpan">
	      	</div>
	      </div>
      </form>
    </div>

  </div>
</div>
<!-- tutup Modal -->
&nbsp;&nbsp;
<div class="card">
	<div class="card-header">
		<div align="center"><h3>Data Karyawan</h3></div>
		<a href="#karyawan" data-toggle="modal" class="btn btn-primary">Tambah Karyawan</a>
	</div>
	<div class="card-body table-responsive">
		<table id="example1" class="table table-bordered table-hover">
            <thead>
	            <tr>
	              <th>No</th>
	              <th>Nama Karyawan</th>
	              <th>Jenis Kelamin</th>
	              <th>Alamat</th>
	              <th>Telpon</th>
	              <th>Action</th>
	            </tr>
            </thead>
            <tbody>
            <?php $sql = $koneksi->query("SELECT * FROM karyawan"); 
            	foreach ($sql as $i => $data) {
            ?>
            	<tr>
            		<td><?= $i+1 ?></td>
            		<td><?= $data['nama'] ?></td>
            		<td><?= $data['jk'] ?></td>
            		<td><?= $data['alamat'] ?></td>
            		<td><?= $data['telp'] ?></td>
            		<td>
            			<a href="?page=view/hapus_karyawan&id=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
            			<a href="?page=view/edit_karyawan&id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
            		</td>
            	</tr>
            <?php } ?>
            </tbody>
        </table>
	</div>
</div>