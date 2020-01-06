<?php
include "classes/class.phpmailer.php";

$mail = new PHPMailer; 

$mail->IsSMTP(); //aktifkan SMTP
$mail->SMTPSecure = 'ssl'; //transfer aman diaktifkan
$mail->Host = "smtp.gmail.com"; //host masing-masing provider email
$mail->SMTPDebug = 2; //debugging: 1 = errors and pesan, 2 = hanya pesan
$mail->Port = 465; //set port yang digunakan (465 atau 587)
$mail->SMTPAuth = true; //auth diaktifkan

$mail->Username = "akunemail@gmail.com"; //user email
$mail->Password = "passwordemail"; //password email 

$mail->SetFrom("akunemail@gmail.com","Nama Akun Email"); //email pengirim
$mail->AddAddress("emailtujuan@gmail.com","Nama Akun Email Tujuan");  //email tujuan

$mail->Subject = "Selamat Datang di Email!"; //subyek email
$mail->MsgHTML("Hello Email!"); //pesan email

if($mail->Send()){
	echo "Message has been sent"; //sukses, email terkirim
} else {
	echo "Failed to sending message"; //gagal, email tidak terkirim
}
?>