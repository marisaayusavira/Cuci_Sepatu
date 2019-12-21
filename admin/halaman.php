<!-- Koneksi -->
 <?php include"../koneksi.php" ?>
<!-- tutup koneksi -->
<!-- header -->
<?php include"template/header.php" ?>
<!-- tutup header -->
<!-- menu -->
<?php include"template/menu.php" ?>
<!-- tutup menu -->
<!-- content -->
<?php
if(!empty($_GET["page"])){
  include_once($_GET["page"].".php");

}else{
  include "home.php";
}
?>
<!-- tutup content -->
<!-- footer -->
<?php include"template/footer.php" ?>
<!-- tutup footer