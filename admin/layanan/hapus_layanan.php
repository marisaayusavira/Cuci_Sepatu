<?php 
$id = $_GET['id'];
$koneksi->query("DELETE FROM layanan WHERE id_layanan='$id'");

echo"<script> alert('Data Berhasil Dihapus');
		        window.location='halaman.php?page=layanan/layanan';
		     </script>";
?>