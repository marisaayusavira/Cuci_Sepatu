<?php 
	$id		= $_POST['id'];
	$nama 	= $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telpon	= $_POST['telpon'];

	if(isset($_POST['karyawan'])){
		$koneksi->query("UPDATE `karyawan` SET `nama`='$nama',`alamat`='$alamat',`telp`='$telpon' WHERE id='$id'");

	echo"<script> alert('Data Berhasil Diupdate');
		        window.location='halaman.php?page=view/data_karyawan';
		     </script>";
	}else{
		
		echo"<script> alert('Data Gagal Diupdate');
		        window.location='halaman.php?page=view/data_karyawan';
		     </script>";
	}

?>