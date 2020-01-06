<?php
// include "PHPMailer/SMTP.php";
// include "PHPMailer/PHPMailer.php";
include "koneksi.php";

$nama 		= $_POST['nama'];
$alamat 	= $_POST['alamat'];
$telpon 	= $_POST['telpon'];
$email 		= $_POST['email'];
$username 	= $_POST['username'];
$password	= md5($_POST['password']);
$password1	= $_POST['password'];
$data = $koneksi->query("SELECT * FROM pelanggan WHERE username='$username'");
$hasil = $data->fetch_assoc();
if(isset($_POST['register'])){
	if($hasil['username']==$username){
		echo"<script> alert('Username Telah Ada. Silahkan GUnakan Username Yang Lain.!!');
		window.location='index.php';
		</script>";
	}else{
		$koneksi->query("INSERT INTO `pelanggan`(`nama`, `alamat`, `telp`, `email`, `password`, `username`) VALUES ('$nama','$alamat','$telpon','$email','$password','$username')");

		include "classes/class.phpmailer.php";

		$mail = new PHPMailer; 

		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
			);
		$mail->IsSMTP();
		$mail->SMTPSecure = 'tls'; 
		$mail->Host = "smtp.live.com";
		$mail->SMTPDebug = 1; 
		$mail->Port = 587; 
		$mail->SMTPAuth = true; 
		$mail->IsHTML(true);
		$mail->Username = "shoesclean04@hotmail.com"; 
		$mail->Password = "shoes12345";

		// $mail->SetFrom("shoesclean04@hotmail.com");
		$mail->AddAddress($email); 

		$mail->Subject = "Verifikasi!"; 
		$mail->MsgHTML("
		Thanks for signing up!
		Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
		
		------------------------
		Username: '.$username.'
		Password: '.$password1.'
		------------------------
		
		Please click this link to activate your account:
		<a href=http://localhost/CuciSepatu/='.$username.'>Verifikasi</a>
		"); //pesan email
		$mail->send();
		exit;
		echo"<script> alert('Silahkan Tunggu Email Verifikasi.!!');
			window.location='index.php';
			</script>";

	}
}else{
	echo"<script> alert('Registrasi Gagal.!!');
		window.location='index.php';
		</script>";
}



?>
