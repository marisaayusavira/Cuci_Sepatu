<?php 
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$data = $koneksi->query("SELECT * FROM pelanggan WHERE username = '$username'");
$cek = $data->fetch_assoc();
if($cek['username']== $_POST['username']){
	if(md5($_POST['password'])== $cek['password']){
		if($cek['aktif']==0){
			echo" <script> alert('Silahkan Tunggu Verifikasi Dari Admin');
					window.location='index.php';
					</script>";
		}else{
			session_start();
			$_SESSION['user'] = $cek;
			echo" <script> alert('Selamat Datang');
					window.location='index.php';
					</script>";
		}
		
	}else{
		echo" <script> alert('Password Salah');
		window.location='index.php';
		</script>";
	}
}else{
	echo" <script> alert('Username Salah');
		window.location='index.php';
		</script>";
}

?>