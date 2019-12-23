<?php
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM karyawan WHERE id='$id'");
$a = $data->fetch_assoc(); ?>
<div class="row py-3">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card">
		<div class="card-header">
			<h3>Edit Data Karyawan</h3>
		</div>
		<div class="card-body">
			<form action="?page=view/update_karyawan" method="POST">
				<div class="form-group">
					<label>Nama Karyawan</label>
					<input type="hidden" name="id" value="<?= $a['id'] ?>">
					<input type="text" name="nama" class="form-control" value="<?= $a['nama'] ?>">
				</div>
				<div class="form-group">
					<label>alamat</label>
					<textarea class="form-control" name="alamat" style="height: 150px"><?= $a['alamat'] ?></textarea> 
				</div>
				<div class="form-group">
					<label>Telpon</label>
					<input type="number" name="telpon" class="form-control" value="<?= $a['telp'] ?>">
				</div>
				<div align="right">
					<input type="submit" name="karyawan" class="btn btn-primary" value="Simpan">
				</div>	
			</form>
		</div>
	</div>
	</div>
</div>
	
