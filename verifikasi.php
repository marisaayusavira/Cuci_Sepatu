<?php
$id = $_GET['id'];
$is = 1;
$koneksi->query("UPDATE `pelanggan` SET `aktif`='$is' WHERE username='$id'");
echo"<script> alert('TerVerifikasi.');
        	window.location='index.php';
       	</script>";
?>