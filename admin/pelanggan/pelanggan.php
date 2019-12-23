<!-- modal -->
<div id="Pelanggan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Pelanggan</h4>
      </div>
      <form action="?page=pelanggan/aksi_pelanggan" method="POST" enctype="multipart/form-data">
	      <div class="modal-body">
	      	<div class="form-group">
	      		<label>Nama Pelanggan</label>
	      		<input type="text" name="nama" class="form-control" required>
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
	      		<label>Email</label>
	      		<input type="email" name="email" class="form-control" required>
	      	</div>
	      	<div align="right">
	      		<input type="submit" name="pelanggan" class="btn btn-primary" value="Simpan">
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
		<div align="center"><h3>Data Pelanggan</h3></div>
		<!-- <a href="#Pelanggan" data-toggle="modal" class="btn btn-primary">Tambah Pelanggan</a> -->
	</div>
	<div class="card-body table-responsive">
		<table id="example1" class="table table-bordered table-hover">
            <thead>
	            <tr>
	              <th>No</th>
	              <th>Nama Pelanggan</th>
	              <th>Alamat</th>
	              <th>Telpon</th>
	              <th>Email</th>
	              <th>Action</th>
	            </tr>
            </thead>
            <tbody>
            <?php $sql = $koneksi->query("SELECT * FROM pelanggan"); 
            	foreach ($sql as $i => $data) {
            ?>
            	<tr>
            		<td><?= $i+1 ?></td>
            		<td><?= $data['nama'] ?></td>
            		<td><?= $data['alamat'] ?></td>
            		<td><?= $data['telp'] ?></td>
            		<td><?= $data['email'] ?></td>
            		<td>
            			<a href="?page=view/hapus_karyawan&id=<?= $data['id_pelanggan'] ?>" class="btn btn-danger">Hapus</a>
            			<!-- <a href="?page=view/edit_karyawan&id=<?= $data['id_pelanggan'] ?>" class="btn btn-warning">Edit</a> -->
            		</td>
            	</tr>
            <?php } ?>
            </tbody>
        </table>
	</div>
</div>