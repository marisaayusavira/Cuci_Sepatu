<?php

	$nama  = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];

	if(isset($_POST['layanan'])){
		$koneksi->query("INSERT INTO `layanan`(`nama_layanan`, `id_jenis_sepatu`, `harga`) VALUES ('$nama','$jenis','$harga')");

		echo"<script> alert('Data Berhasil Disimpan');
		        window.location='halaman.php?page=layanan/layanan';
		     </script>";
		     
	}else{

		echo"<script> alert('Data Gagal Disimpan');
		        window.location='halaman.php?page=layanan/layanan';
		     </script>";

	}
?>