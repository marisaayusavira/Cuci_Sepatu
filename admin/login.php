<?php
include "../koneksi.php";
$user = mysqli_real_escape_string($koneksi,$_POST['username']);
$pass = mysqli_real_escape_string($koneksi,$_POST['password']);
if(isset($_POST['login'])){
  $login = $koneksi->query("SELECT * FROM admin WHERE username='$user'");
  $cek = $login->fetch_array();
  if($cek['username']== $user){
    if(password_verify($pass, $cek['password'])){
        session_start();
        $_SESSION['admin'] = $cek;
        echo"<script> alert('Anda Berhasil Login');
              window.location='halaman.php';
             </script>";
    }else{
      echo"<script> alert('Password Salah');
        window.location='index.php';
       </script>";
    }
  }else{
    echo"<script> alert('Username Salah');
        window.location='index.php';
       </script>";
  }
}else{
  echo"<script> alert('Username Dan Password Salah');
        window.location='index.php';
       </script>";
}

?>