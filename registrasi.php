<?php
include "koneksi.php";

$nama 		= $_POST['nama'];
$alamat 	= $_POST['alamat'];
$telpon 	= $_POST['telpon'];
$email 		= $_POST['email'];
$username 	= $_POST['username'];
$password	= md5($_POST['password']);
$password1	= $_POST['password'];
$data = $koneksi->query("SELECT * FROM pelanggan WHERE username='$username'");
$hasil = $data->fetch_assoc();
if(isset($_POST['register'])){
	if($hasil['username']==$username){
		echo"<script> alert('Username Telah Ada. Silahkan GUnakan Username Yang Lain.!!');
		window.location='index.php';
		</script>";
	}else{
		$koneksi->query("INSERT INTO `pelanggan`(`nama`, `alamat`, `telp`, `email`, `password`, `username`) VALUES ('$nama','$alamat','$telpon','$email','$password','$username')");

		echo"<script>alert('Silahkan Tunggu Di Ferivikasi.!!');
			window.location='index.php';
			</script>";

	}
}else{
	echo"<script> alert('Registrasi Gagal.!!');
		window.location='index.php';
		</script>";
}



?>
