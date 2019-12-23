<?php
$id   = $_POST['id'];
$nama = $_POST['nama'];

if(isset($_POST['jenis'])){
	$koneksi->query("UPDATE `jenis_sepatu` SET `nama_jenis_sepatu`='$nama' WHERE id='$id'");

	echo"<script> alert('Data Berhasil Diupdate');
        	window.location='halaman.php?page=jenis_sepatu/jenis_sepatu';
    	 </script>";
}else{
	echo"<script> alert('Data Gagal Diupdate');
        	window.location='halaman.php?page=jenis_sepatu/jenis_sepatu';
    	 </script>";
}
?>