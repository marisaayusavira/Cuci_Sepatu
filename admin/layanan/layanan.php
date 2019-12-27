<!-- modal -->
<div id="karyawan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Layanan</h4>
      </div>
      <form action="?page=layanan/aksi_layanan" method="POST" enctype="multipart/form-data">
	      <div class="modal-body">
	      	<div class="form-group">
	      		<label>Nama layanan</label>
	      		<input type="text" name="nama" class="form-control" required>
	      	</div>
	      	<div class="form-group">
	      		<label>Jenis Sepatu</label>
	      		<select name="jenis" class="form-control">
	      			<option>-PILIH-</option>
	      		<?php
	      			$sepatu = $koneksi->query("SELECT * FROM jenis_sepatu");
	      			foreach($sepatu as $a){
	      		?>
	      			<option value="<?= $a['id'] ?>"><?= $a['nama_jenis_sepatu'] ?></option>
	      		<?php } ?>
	      		</select> 
	      	</div>
	      	<div class="form-group">
	      		<label>Harga</label>
	      		<input type="number" name="harga" class="form-control" required>
	      	</div>
	      	<div class="form-group">
	      		<label>Foto</label>
	      		<input type="file" name="foto" class="form-control" required>
	      	</div>
	      	<div align="right">
	      		<input type="submit" name="layanan" class="btn btn-primary" value="Simpan">
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
		<div align="center"><h3>Data Layanan</h3></div>
		<a href="#karyawan" data-toggle="modal" class="btn btn-primary">Tambah Layanan</a>
	</div>
	<div class="card-body table-responsive">
		<table id="example1" class="table table-bordered table-hover">
            <thead>
	            <tr>
	              <th>No</th>
	              <th>Nama Layanan</th>
	              <th>Jenis sepatu</th>
	              <th>Harga</th>
	              <th>Foto</th>
	              <th>Action</th>
	            </tr>
            </thead>
            <tbody>
            <?php $sql = $koneksi->query("SELECT * FROM layanan a LEFT JOIN jenis_sepatu b ON b.id=a.id_jenis_sepatu"); 
            	foreach ($sql as $i => $data) {
            ?>
            	<tr>
            		<td><?= $i+1 ?></td>
            		<td><?= $data['nama_layanan'] ?></td>
            		<td><?= $data['nama_jenis_sepatu'] ?></td>
            		<td>Rp.<?= number_format($data['harga']) ?></td>
            		<td><img src="../images/<?= $data['foto'] ?>" width="80px"></td>
            		<td>
            			<a href="?page=layanan/hapus_layanan&id=<?= $data['id_layanan'] ?>" class="btn btn-danger">Hapus</a>
            			<a href="?page=layanan/edit_layanan&id=<?= $data['id_layanan'] ?>" class="btn btn-warning">Edit</a>
            		</td>
            	</tr>
            <?php } ?>
            </tbody>
        </table>
	</div>
</div>