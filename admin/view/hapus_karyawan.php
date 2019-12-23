<?php
$id = $_GET['id'];
$koneksi->query("DELETE FROM karyawan WHERE id='$id'");

echo"<script> alert('Data Dihapus');
        window.location='halaman.php?page=view/data_karyawan';
     </script>";
?>