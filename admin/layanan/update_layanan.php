<?php
	$id    = $_POST['id']; 
	$nama  = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];

	if(isset($_POST['layanan'])){
		if($_POST['jenis']== 0){
			$koneksi->query("UPDATE `layanan` SET `nama_layanan`='$nama',`harga`='$harga' WHERE id_layanan='$id'");
		}else{
			$koneksi->query("UPDATE `layanan` SET `nama_layanan`='$nama,`id_jenis_sepatu`='$jenis,`harga`='$harga' WHERE id_layanan='$id'");
		}
		echo"<script> alert('Data Berhasil Diupdate');
		        window.location='halaman.php?page=layanan/layanan';
		     </script>";
	}else{
		echo"<script> alert('Data Gagal Diupdate');
		        window.location='halaman.php?page=layanan/layanan';
		     </script>";
	}
?>