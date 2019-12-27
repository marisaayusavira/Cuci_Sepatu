<?php
$id = $_GET['id'];
$is = 1;
$koneksi->query("UPDATE `pelanggan` SET `aktif`='$is' WHERE id_pelanggan='$id'");
echo"<script> alert('TerVerifikasi.');
        	window.location='halaman.php?page=pelanggan/pelanggan';
       	</script>";
?>