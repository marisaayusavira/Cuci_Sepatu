<?php
	$nama 	= $_POST['nama'];
	$jk 	= $_POST['jk'];
	$alamat = $_POST['alamat'];
	$telpon	= $_POST['telpon'];

	if(isset($_POST['karyawan'])){
		$sql = $koneksi->query("INSERT INTO `karyawan`(`nama`, `jk`, `alamat`, `telp`) VALUES ('$nama','$jk','$alamat','$telpon')");

		echo"<script> alert('Data Berhasil Disimpan');
		        window.location='halaman.php?page=view/data_karyawan';
		     </script>";
	}else{
		
		echo"<script> alert('Data Gagal Disimpan');
		        window.location='halaman.php?page=view/data_karyawan';
		     </script>";
	}
?>