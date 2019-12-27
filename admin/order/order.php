&nbsp;&nbsp;
<div class="card">
	<div class="card-header">
		<div align="center"><h3>Data Order</h3></div>
            <div class="row">
                  <div class="col-md-6">
                        <form action="laporan/laporanBulanan.php" method="POST">
                              <div class="form-group">
                                    <input type="month" name="bulan" class="form-control">
                              </div>
                              <div align="right">
                                    <input type="submit" name="cetak" class="btn btn-primary" value="Cetak Bulan">
                              </div>
                        </form>
                  </div>
                  <div class="col-md-6">
                        <form action="laporan/laporanTahunan.php" method="POST">
                              <div class="form-group">
                                    <select name="tahun" class="form-control">
                                          <option value="">-PILIH TAHUN-</option>
                                          <?php 
                                                $tahunSekarang = date('Y');
                                                for($tahunMulai = 2015; $tahunMulai <= $tahunSekarang; $tahunMulai++){
                                          ?>
                                          <option value="<?= $tahunMulai ?>"><?= $tahunMulai ?></option>
                                          <?php } ?>
                                    </select>
                              </div>
                              <div align="left">
                                    <input type="submit" name="cetak" class="btn btn-success" value="Cetak Tahun">
                              </div>
                        </form>
                  </div>
                  <div class="col-md-6"></div>
            </div>
	</div>
	<div class="card-body table-responsive">
		<table id="example1" class="table table-bordered table-hover">
            <thead>
	            <tr>
	              <th>No Faktur</th>
	              <th>Nama Pelanggan</th>
	              <th>Nama Layanan</th>
	              <th>Jenis sepatu</th>
	              <th>Harga</th>
	              <th>Tanggal Masuk</th>
	              <th>Waktu</th>
	              <th>Jumlah Sepatu</th>
	              <th>Total Bayar</th>
	              <th>Status</th>
	              <th>Action</th>
	            </tr>
            </thead>
            <tbody>
            	<?php
            		$data = $koneksi->query("SELECT * FROM order_detail a LEFT JOIN pelanggan b ON b.id_pelanggan=a.id_pelanggan");
            		foreach ($data as $a) {
            	?>
            	<tr>
            		<td><?= $a['faktur'] ?></td>
            		<td><?= $a['nama'] ?></td>
            		<td><?= $a['layanan'] ?></td>
            		<td><?= $a['sepatu'] ?></td>
            		<td>Rp.<?= number_format($a['harga']) ?></td>
            		<td><?= $a['taggal'] ?></td>
            		<td><?= $a['waktu'] ?></td>
            		<td><?= $a['jumlah'] ?></td>
            		<td>Rp.<?= number_format($a['total']) ?></td>
            		<td><?= $a['status'] ?></td>
            		<td>
            			<a href="nota.php?id=<?= $a['faktur'] ?>" class="btn btn-warning">Cetak Nota</a>
            		</td>
            	</tr>
            	<?php } ?>
            </tbody>
        </table>
	</div>
</div>