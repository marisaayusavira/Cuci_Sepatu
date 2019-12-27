<?php
include "../koneksi.php";
$user = mysqli_real_escape_string($koneksi,$_POST['username']);
$pass = mysqli_real_escape_string($koneksi,$_POST['password']);


if($_POST['level']== 'Admin'){
  $login = $koneksi->query("SELECT * FROM admin WHERE username='$user'");
  $cek = $login->fetch_array();
  if($cek['username']== $user){
    if(password_verify($pass, $cek['password'])){
        session_start();
        $_SESSION['id']    = $cek['id_admin'];
        $_SESSION['admin'] = $cek;
        $_SESSION['level'] = 'Admin';
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
  $login = $koneksi->query("SELECT * FROM karyawan WHERE username='$user'");
  $cek = $login->fetch_array();
  if($cek['username']== $user){
    if(password_verify($pass, $cek['password'])){
        session_start();
        $_SESSION['id']    = $cek['id'];
        $_SESSION['admin'] = $cek;
        $_SESSION['level'] = 'User';
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
}

?>