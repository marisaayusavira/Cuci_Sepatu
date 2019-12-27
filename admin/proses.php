<?php
$id 	= $_POST['id']; 
if(isset($_POST['proses'])){

$status = 'Proses';
$koneksi->query("UPDATE `order_detail` SET `status`='$status' WHERE faktur='$id'");
	echo"<script> alert('Orderan Telah Di Proses.');
        	window.location='halaman.php';
       	</script>";
}elseif(isset($_POST['selesai'])){
	
$status1 = 'Selesai';
$koneksi->query("UPDATE `order_detail` SET `status`='$status1' WHERE faktur='$id'");
	echo"<script> alert('Orderan Telah Selesai.');
        	window.location='halaman.php';
       	</script>";
}
?>