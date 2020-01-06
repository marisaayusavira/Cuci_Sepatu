<!DOCTYPE html>
<html lang="en">
<?php include "koneksi.php";
    session_start();
 ?>
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
<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><img src="images/logo2.png" width="80px" alt="logo">Register</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="registrasi.php" method="POST">
      <div class="modal-body " id="scroll" >
        <div class="form-group">
            <label style="color:red;">Nama *</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Username *</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Password *</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Email *</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Telpon *</label>
            <input type="number" name="telpon" class="form-control" placeholder="telpon" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Alamat *</label>
            <textarea class="form-control" name="alamat"></textarea>
        </div>
        <div align="right">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
        </div><br>
      </div>
      </form>
    </div>

  </div>
</div>
    <!-- Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><img src="images/logo2.png" width="80px" alt="logo">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="POST">
        <div class="form-group">
            <label style="color:red;">Username *</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Password *</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div align="right">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
        </div>
        </form>
        <br>
        <a href="#register" data-dismiss="modal" data-toggle="modal">Registrasi</a>
      </div>
    </div>

  </div>
</div>

   <!-- Modal -->
   <div id="change" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><img src="images/logo2.png" width="80px" alt="logo">Ganti Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="ganti.php" method="POST">
        <div class="form-group">
            <label style="color:red;">Password Lama *</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label style="color:red;">Password Baru *</label>
            <input type="password" name="password1" class="form-control" placeholder="Password" required>
        </div>
        <div align="right">
            <button type="submit" class="btn btn-primary btn-block" name="ganti">Change</button>
        </div>
        </form>
      </div>
    </div>

  </div>
</div>
    <header>
        <!-- <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"><a href="#" class="web-url">www.bookstore.com</a></div>
                    <div class="col-md-6">
                        <h5>Padang, Sumatera Barat JLN. Sudirman no. 21</h5></div>
                    <div class="col-md-3">
                        <span class="ph-number">Call : 0813 6461 7461</span>
                    </div>
                </div>
            </div>
        </div> -->
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
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="navbar-item">
                                <a href="#shop" class="nav-link">Shop</a>
                            </li>
                            <li class="navbar-item">
                                <a href="#befor" class="nav-link">Befor/After</a>
                            </li>
                            <li class="navbar-item">
                                <a href="#layanan" class="nav-link">Layanan</a>
                            </li>
                            <li class="navbar-item">
                                <a href="#status" class="nav-link">Status</a>
                            </li>
                            <?php if(@$_SESSION['user']['id_pelanggan']== ''){ ?>
                            <li class="navbar-item">
                                <a href="#login" data-toggle="modal" class="nav-link">Login</a>
                            </li>
                        <?php }else{ ?>
                            <li class="navbar-item">
                                <a href="logout.php" class="nav-link">Logout</a>
                            </li>
                            <li class="navbar-item">
                                <a href="#change" data-toggle="modal" class="nav-link">Ganti Password</a>
                            </li>
                        <?php } ?>
                        </ul>
                     <!--    <div class="cart my-2 my-lg-0">
                            <span>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                            <span class="quntity">3</span>
                        </div> -->
                        <!-- <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                            <span class="fa fa-search"></span>
                        </form>
                    </div> -->
                </nav>
            </div>
        </div>
    </header>
    <section class="slider">
        <div class="container">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="slide">
                        <img src="images/awal.jpg" alt="slide1">
                        <div class="content">
                            <div class="title">
                                <h3>Welcome shoes clean MC </h3>
                                <a href="#layanan" class="btn">Clean Shoes Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recomended-sec" id="shop">
        <div class="container">
            <div class="title">
                <h2>Apa saja yang ada di shoes cleaner MC?</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/alat.jpg" width="100%">
                </div>
                <div class="col-md-6">
                    <br><br><br>
                    <i>Shoes Cleaner MC menggunakan Premium Shoe Cleaner & Kit terbaik yang pernah ada di Indonesia maupun Luar Indonesia. kami ingin memastikan bahwa sepatu tercinta kalian mendapatkan perawatan yang terbaik dengan menggunakan Cleaner & Tools terbaik.</i>
                </div>
            </div>
        </div>
    </section>
    <section class="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img src="images/produk1.jpg" width="300px">
                        </div>
                        <div class="card-body">
                            <i>Premium Shoe Cleaner</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img src="images/produk2.jpg" width="300px" height="287px">
                        </div>
                        <div class="card-body">
                            <i>Premium Shoe Brush</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recent-book-sec" id="befor">
        <div class="container">
        <h2>Before / After</h2>
        <hr>
        <br>
        <br>
            <div class="card">
                <div class="card-body">
                    <i>Berikut adalah beberapa foto-foto hasil before / after  yang telah kami kerjakan. masih sangat banyak sekali sepatu yang telah kami kerjakan yang tidak mungkin dapat kami upload satu per satu. percayakan kepada iShoe Laundry untuk perawatan sepatu kalian. Kami juga menyediakan perawatan seperti Boost Repaint untuk Adidas yang memiliki bahan Boost dan juga untuk repaint bahan sepatu apa saja untuk mengembalikan warna sepatu seperti semula.</i>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-body">    
                            <img src="images/bersih.jpg" width="300px">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-body">    
                            <img src="images/bersih2.jpg" width="300px" height="200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-sec" id="layanan">
        <div class="container">
            <h2>Layanan</h2>
        <hr>
        <br>
        <br>
        <div class="row">
        <?php $data = $koneksi->query('SELECT * FROM layanan a LEFT JOIN jenis_sepatu b ON b.id=a.id_jenis_sepatu');
        foreach($data as $a):?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <?= $a['nama_layanan'] ?>
                    </div>
                    <div class="card-body">
                        <img src="images/clean.png">
                        <p>Price: Rp <?= number_format($a['harga']) ?>,-</p>
                        <p>Cleaning Part: <?= $a['nama_jenis_sepatu'] ?> </p>
                        <p>
                            <a href="standar.php?id=<?= $a['id_layanan'] ?>" class="btn btn-warning btn-block">Order Now</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        </div>
        </div>
    </section>
    <section class="features-sec" id="status">
        <div class="container">
            <div class="card">
  <div class="card-header">
    <div align="center"><h3>Status Sepatu</h3></div>
  </div>
  <div class="card-body table-responsive">
    <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No Faktur</th>
                <th>Nama Pelanggan</th>
                <th>Nama Layanan</th>
                <th>Jenis sepatu</th>
                <th>Harga</th>
                <th>Tanggal Masuk</th>
                <th>Waktu</th>
                <th>Jumlah Sepatu</th>
                <th>Total Bayar</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include "koneksi.php";
              @$id = $_SESSION['user']['id_pelanggan'];
                $data = $koneksi->query("SELECT * FROM order_detail a LEFT JOIN pelanggan b ON b.id_pelanggan=a.id_pelanggan WHERE a.id_pelanggan='$id'");
                foreach ($data as $a) {
              ?>
              <tr>
                <td><?= $a['faktur'] ?></td>
                <td><?= $a['nama'] ?></td>
                <td><?= $a['layanan'] ?></td>
                <td><?= $a['sepatu'] ?></td>
                <td>Rp.<?= number_format($a['harga']) ?></td>
                <td><?= $a['taggal'] ?></td>
                <td><?= $a['waktu'] ?></td>
                <td><?= $a['jumlah'] ?></td>
                <td>Rp.<?= number_format($a['total']) ?></td>
                <td><?= $a['status'] ?></td>
            </tr>
        <?php } ?>
            </tbody>
        </table>
  </div>
</div>
        </div>
    </section>

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
                        <h5>(C) <?= date('Y') ?></h5>
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