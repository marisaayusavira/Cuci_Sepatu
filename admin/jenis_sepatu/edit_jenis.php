<?php
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM jenis_sepatu WHERE id=$id");
$la = $data->fetch_array(); ?>
<div class="row py-3">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card">
		<div class="card-header">
			<h3>Edit Jenis Sepatu</h3>
		</div>
		<div class="card-body">
			<form action="?page=jenis_sepatu/update_jenis" method="POST">
				<div class="form-group">
					<label>Jenis Sepatu</label>
					<input type="hidden" name="id" value="<?= $la['id'] ?>">
					<input type="text" name="nama" class="form-control" value="<?= $la['nama_jenis_sepatu'] ?>">
				</div>
				<div align="right">
					<input type="submit" name="jenis" class="btn btn-primary" value="Simpan">
				</div>	
			</form>
		</div>
	</div>
	</div>
</div>
	
