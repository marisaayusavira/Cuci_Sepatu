<?php
include "koneksi.php";

$nama 		= $_POST['nama'];
$alamat 	= $_POST['alamat'];
$telpon 	= $_POST['telpon'];
$email 		= $_POST['email'];
$username 	= $_POST['username'];
$password	= md5($_POST['password']);

if(isset($_POST['register'])){
	$koneksi->query("INSERT INTO `pelanggan`(`nama`, `alamat`, `telp`, `email`, `password`, `username`) VALUES ('$nama','$alamat','$telpon','$email','$password','$username')");

	echo"<script> alert('Silahkan Tunggu Email Verifikasi.!!');
		window.location='index.php';
		</script>";
}else{
	echo"<script> alert('Registrasi Gagal.!!');
		window.location='index.php';
		</script>";
}



?>
