<?php
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM layanan WHERE id_layanan=$id");
$la = $data->fetch_array(); ?>
<div class="row py-3">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card">
		<div class="card-header">
			<h3>Edit Data Layanan</h3>
		</div>
		<div class="card-body">
			<form action="?page=layanan/update_layanan" method="POST">
				<div class="form-group">
					<label>Nama Layanan</label>
					<input type="hidden" name="id" value="<?= $la['id_layanan'] ?>">
					<input type="text" name="nama" class="form-control" value="<?= $la['nama_layanan'] ?>">
				</div>
				<div class="form-group">
					<label>Jenis Sepatu</label>
					<select name="jenis" class="form-control">
						<option value="0">--PILIH--</option>
						<?php $sql = $koneksi->query("SELECT * FROM jenis_sepatu"); foreach ($sql as $a) { ?>
							<option value="<?= $a['id'] ?>"><?= $a['nama_jenis_sepatu'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="text" name="harga" class="form-control" value="<?= $la['harga'] ?>">
				</div>
				<div align="right">
					<input type="submit" name="layanan" class="btn btn-primary" value="Simpan">
				</div>	
			</form>
		</div>
	</div>
	</div>
</div>
	
