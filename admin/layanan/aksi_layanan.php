<?php

	$nama  = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];
	$namaFile = $_FILES['foto']['name'];
	$file = $_FILES['foto']['tmp_name'];
	$lokasi = "images/";
	@$terupload = move_uploaded_file($file, $lokasi.$namaFile);

	if(isset($_POST['layanan'])){
		$koneksi->query("INSERT INTO `layanan`(`nama_layanan`, `id_jenis_sepatu`, `harga`,`foto`) VALUES ('$nama','$jenis','$harga','$namaFile')");

		echo"<script> alert('Data Berhasil Disimpan');
		        window.location='halaman.php?page=layanan/layanan';
		     </script>";
		     
	}else{

		echo"<script> alert('Data Gagal Disimpan');
		        window.location='halaman.php?page=layanan/layanan';
		     </script>";

	}
?>