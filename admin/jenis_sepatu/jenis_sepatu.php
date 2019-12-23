&nbsp;&nbsp;
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">
				<h3>Tambah Jenis Sepatu</h3>
			</div>
			<div class="card-body">
			<form action="?page=jenis_sepatu/aksi_jenis" method="POST">
				<div class="form-group">
					<label>Jenis</label>
					<input type="text" name="sepatu" class="form-control" placeholder="Jenis Sepatu">
				</div>
				<div align="right">
					<input type="submit" value="Simpan" name="jenis" class="btn btn-primary">
				</div>

			</form>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<div align="center"><h3>Jenis Sepatu</h3></div>
			</div>
			<div class="card-body table-responsive">
				<table id="example1" class="table table-bordered table-hover">
		            <thead>
			            <tr>
			              <th>No</th>
			              <th>Jenis sepatu</th>
			              <th style="width:160px;">Action</th>
			            </tr>
		            </thead>
		            <tbody>
		            <?php $sql = $koneksi->query("SELECT * FROM jenis_sepatu"); 
		            	foreach ($sql as $i => $data) {
		            ?>
		            	<tr>
		            		<td><?= $i+1 ?></td>
		            		<td><?= $data['nama_jenis_sepatu'] ?></td>
		            		<td>
		            			<a href="?page=jenis_sepatu/hapus_jenis&id=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
		            			<a href="?page=jenis_sepatu/edit_jenis&id=<?= $data['id'] ?>" class="btn btn-warning">Edit&nbsp;&nbsp;&nbsp;&nbsp;</a>
		            		</td>
		            	</tr>
		            <?php } ?>
		            </tbody>
		        </table>
			</div>
		</div>
		
	</div>
</div>
<!-- Aksi Simpan -->
<script src="<?= $base_url ?>/asset/plugins/jquery/jquery.min.js"></script>
