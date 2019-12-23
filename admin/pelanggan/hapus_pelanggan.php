<?php 
$id = $_GET['id'];

$koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan='$id'");

echo"<script> alert('Data Dihapus');
        window.location='halaman.php?page=pelanggan/pelanggan';
     </script>";
?>