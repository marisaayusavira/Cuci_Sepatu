<?php
 include "koneksi.php"; 
session_start();
if(@$_SESSION['user']['id_pelanggan']== ''){
    echo" <script> alert('Silahkan Login terlebih dahulu..');
        window.location='index.php';
        </script>";
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Awal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="<?= $base_url ?>asset/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>asset/css/styles.css">
</head>
<style type="text/css">
    #scroll{
  width: 100%;
  padding: 10px;
  overflow: scroll;
  height: 300px;
  
  /*script tambahan khusus untuk IE */
  scrollbar-face-color: #CE7E00; 
  scrollbar-shadow-color: #FFFFFF; 
  scrollbar-highlight-color: #6F4709; 
  scrollbar-3dlight-color: #11111; 
  scrollbar-darkshadow-color: #6F4709; 
  scrollbar-track-color: #FFE8C1; 
  scrollbar-arrow-color: #6F4709;
}
</style>
<body class="py-5">
    <header>
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href=""><img src="images/logo2.png" width="130px" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="navbar-item active">
                                <a href="index.php" class="nav-link">Home |</a>
                            </li>
                            <li class="navbar-item active">
                                Selamat Datang : <b><?= $_SESSION['user']['nama'] ?></b>
                            </li>
                        </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="recomended-sec" id="shop">
        <div class="container">
            <div class="title">
                <h2>Order Now</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/deepclean.png" width="100%">
                </div>
                <div class="col-md-6">
                    <br><br><br>
                    <i>
                        <p>Price: Rp 60.000,-</p>
                        <p>Cleaning Part: Upper Sole, Middle Sole, Out Sole, In Sole, Laces  </p>
                    </i>
                </div>
            </div>
        </div>
    </section>
    <?php
        $faktur = date('HisYmd');
    ?>
    <div class="card">
        <div class="card-header">
            <h3>Deep Clean</h3>
        </div>
        <div class="card-body">
        <form action="orderclean.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Layanan</label>
                <input type="hidden" name="faktur" value="SC<?= $faktur ?>">
                <input type="text" class="form-control" readonly name="layanan" value="Deep Clean">
            </div>
            <div class="form-group">
                <label>Jenis Sepatu</label>
                <select class="form-control" name="jenis" >
                    <option value="">-PILIH JENIS SEPATU-</option>
                    <?php 
                        $data = $koneksi->query("SELECT * FROM jenis_sepatu");
                        foreach($data as $a){
                    ?>
                    <option value="<?= $a['nama_jenis_sepatu'] ?>"><?= $a['nama_jenis_sepatu'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" readonly name="harga" value="60000">
            </div>
            <div class="form-group">
                <label>Jumlah Sepatu</label>
                <input type="number" class="form-control" name="jumlah" value="">
            </div>
            <div align="right">
                <input type="submit" name="standar" value="Order" class="btn btn-primary btn-block">
            </div>
        </form>
        </div>
    </div>

    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="address">
                        <h4>WE ARE OPEN!!!</h4>
                        <h6>Business Hour:</h6>
                        <h6>Monday-Sunday: 08:00 – 19:00 (Everyday)</h6>
                    </div>
                    <div class="timing">
                        <h4>Customer Support:</h4>
                        <h6>Call/SMS: +62 878 7733 0551</h6>
                        <h6>​​WhatsApp: +62 878 7733 0551</h6>
                        <h6>​Line: @ishoelaundry (with @)</h6>
                        <h6>​Email: ishoelaundry@gmail.com</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="navigation">
                        <h4>iShoes Laundry</h4>
                        <h6>Laundry Sepatu / Jasa Cuci Sepatu</h6>
                    </div>
                    <div class="navigation">
                        <h4>Alamat</h4>
                        <h6>Jln. Marapalam no 12</h6>
                        <h6>Pengecekan Status Pengerjaan Sepatu</h6>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form">
                        <h4>Registrasi </h4>
                        <h6>Saat ingin mengorder, harus registrasi terlebih dahulu. Ketika sudah registrasi, pelanggan sudah bisa order</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>(C) 2017. All Rights Reserved. BookStore Wordpress Theme</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="share align-middle">
                            <span class="fb"><i class="fa fa-facebook-official"></i></span>
                            <span class="instagram"><i class="fa fa-instagram"></i></span>
                            <span class="twitter"><i class="fa fa-twitter"></i></span>
                            <span class="pinterest"><i class="fa fa-pinterest"></i></span>
                            <span class="google"><i class="fa fa-google-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?= $base_url ?>asset/js/jquery.min.js"></script>
    <script src="<?= $base_url ?>asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= $base_url ?>asset/js/owl.carousel.min.js"></script>
    <script src="<?= $base_url ?>asset/js/custom.js"></script>
</body>

</html>
<?php } ?>