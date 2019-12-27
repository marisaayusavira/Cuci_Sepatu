<?php 
session_start();

include "koneksi.php";
$faktur = $_POST['faktur'];
$id_pelanggan = $_SESSION['user']['id_pelanggan'];
$layanan = $_POST['layanan'];
$sepatu = $_POST['jenis'];
$harga = $_POST['harga'];
$tanggal = date('Y-m-d');
$waktu = date('H:i:s');
$jumlah = $_POST['jumlah'];
$total = $harga * $jumlah;

if(isset($_POST['standar'])){
$cek = $koneksi->query("INSERT INTO order_detail(faktur, id_pelanggan, layanan, sepatu, harga, taggal, waktu, jumlah, total) VALUES ('$faktur','$id_pelanggan','$layanan','$sepatu','$harga','$tanggal','$waktu','$jumlah','$total')");

// var_dump($cek); exit;

	echo"<script> alert('Orderan Anda Berhasil');
		window.location='index.php';
		</script>";
}else{
	echo"<script> alert('Orderan Gagal.!!');
		window.location='index.php';
		</script>";
}
?>