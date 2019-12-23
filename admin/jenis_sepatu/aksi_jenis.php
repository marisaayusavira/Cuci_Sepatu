<?php
$jenis = $_POST['sepatu'];

if(isset($_POST['jenis'])){
	$koneksi->query("INSERT INTO `jenis_sepatu`(`nama_jenis_sepatu`) VALUES ('$jenis')");
	echo"<script> alert('Data Berhasil Disimpan');
        	window.location='halaman.php?page=jenis_sepatu/jenis_sepatu';
    	 </script>";	
}else{
	echo"<script> alert('Data Gagal Disimpan');
        	window.location='halaman.php?page=jenis_sepatu/jenis_sepatu';
    	 </script>";		
}
