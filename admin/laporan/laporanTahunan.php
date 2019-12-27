<?php
include "../../koneksi.php";
$tahun = $_POST['tahun'];
$data = $koneksi->query("SELECT * FROM order_detail as a LEFT JOIN pelanggan as b ON b.id_pelanggan=a.id_pelanggan WHERE a.taggal LIKE '$tahun%'");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Tahunan</title>
</head>
<link rel="stylesheet" type="text/css" href="<?= $base_url ?>asset/laporan/bootstrap.css">
<body>
<div class="container">
	<div class="header">
		<div align="center">
			<h1>Laporan Tahunan</h1>
		</div>
	</div>
	<table id="example1" class="table">
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
            </tr>
        </thead>
        <tbody>
        	 <?php while($a = $data->fetch_array()){ ?>
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
        	</tr>
        	<?php } ?>
        </tbody>
    </table>
</div>
<script type="text/javascript" src="<?= $base_url ?>asset/laporan/jquery.3.2.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		window.print();
	})
</script>
</body>
</html>