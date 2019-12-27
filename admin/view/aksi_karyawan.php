<?php
	$nama 		= $_POST['nama'];
	$jk 		= $_POST['jk'];
	$alamat 	= $_POST['alamat'];
	$telpon		= $_POST['telpon'];
	$username 	= $_POST['username'];
	$password 	= password_hash($_POST['password'], PASSWORD_DEFAULT);

	if(isset($_POST['karyawan'])){
		$sql = $koneksi->query("INSERT INTO `karyawan`(`nama`, `jk`, `alamat`, `telp`, `username`, `password`) VALUES ('$nama','$jk','$alamat','$telpon','$username','$password')");

		echo"<script> alert('Data Berhasil Disimpan');
		        window.location='halaman.php?page=view/data_karyawan';
		     </script>";
	}else{
		
		echo"<script> alert('Data Gagal Disimpan');
		        window.location='halaman.php?page=view/data_karyawan';
		     </script>";
	}
?>