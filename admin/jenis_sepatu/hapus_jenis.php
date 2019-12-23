<?php 
$id = $_GET['id'];
$koneksi->query("DELETE FROM jenis_sepatu WHERE id='$id'");

echo"<script> alert('Data Berhasil Dihapus');
		        window.location='halaman.php?page=jenis_sepatu/jenis_sepatu';
		     </script>";
?>