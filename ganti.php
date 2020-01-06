<?php
include "koneksi.php";
session_start();
$id = $_SESSION['user']['id_pelanggan'];
$password = md5($_POST['password1']);

if(isset($_POST['ganti'])){
$koneksi->query("UPDATE pelanggan SET password='$password' WHERE id_pelanggan='$id'");
echo"<script> alert('Password Telah Diganti');
window.location='index.php';
</script>";
}else{
    echo"<script> alert('Password Gagal Diganti.!!');
    window.location='index.php';
    </script>";
}
?>