<?php 
	$id			= $_POST['id'];
	$nama 		= $_POST['nama'];
	$alamat 	= $_POST['alamat'];
	$telpon		= $_POST['telpon'];
	$username 	= $_POST['username'];
	@$password 	= password_hash($_POST['password'], PASSWORD_DEFAULT);

	if(isset($_POST['karyawan'])){
		if($password == NULL){
			$koneksi->query("UPDATE `karyawan` SET `nama`='$nama',`alamat`='$alamat',`telp`='$telpon', `username`='$username' WHERE id='$id'")
		}else{
			$koneksi->query("UPDATE `karyawan` SET `nama`='$nama',`alamat`='$alamat',`telp`='$telpon', `username`='$username', `password`='$password' WHERE id='$id'");
		}

	echo"<script> alert('Data Berhasil Diupdate');
		        window.location='halaman.php?page=view/data_karyawan';
		     </script>";
	}else{
		
		echo"<script> alert('Data Gagal Diupdate');
		        window.location='halaman.php?page=view/data_karyawan';
		     </script>";
	}

?>