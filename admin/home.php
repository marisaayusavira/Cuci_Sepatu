<?php
if($_SESSION['level']=='Admin'){
?>

<div class="row py-3">
  <div class="col-lg-4 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <?php 
          $data = $koneksi->query("SELECT count(faktur) AS jumlah  FROM order_detail");
          $jumlah = $data->fetch_array();  ?>
        <h3><?= $jumlah['jumlah'] ?></h3>
        <p>New Orders</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-4 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <?php 
          $data = $koneksi->query("SELECT count(id_pelanggan) AS a FROM pelanggan");
          $hasil = $data->fetch_array();
         ?>
        <h3><?= $hasil['a'] ?></h3>

        <p>User Registrations</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-4 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <?php 
          $data = $koneksi->query("SELECT count(id) AS k FROM karyawan");
          $uu = $data->fetch_array();
         ?>
        <h3><?= $uu['k'] ?></h3>

        <p>Karyawan</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<?php }else{ ?>
&nbsp;&nbsp;
<div class="card">
  <div class="card-header">
    <div align="center"><h3>Data Order</h3></div>
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
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $data = $koneksi->query("SELECT * FROM order_detail a LEFT JOIN pelanggan b ON b.id_pelanggan=a.id_pelanggan ORDER BY faktur DESC");
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
                <td>
                  <?php if($a['status']=='Pending'){ ?>
                    <form action="?page=proses" method="POST">
                      <input type="hidden" name="status" value="Proses">
                      <input type="hidden" name="id" value="<?= $a['faktur'] ?>">
                      <input type="Submit" name="proses" value="Proses" class="btn btn-primary" >
                    </form>
                  <?php }elseif($a['status']== 'Proses'){ ?>
                    <form action="?page=proses" method="POST">
                      <input type="hidden" name="status" value="Proses">
                      <input type="hidden" name="id" value="<?= $a['faktur'] ?>">
                      <input type="Submit" name="selesai" value="Selesai" class="btn btn-success" >
                    </form>
                  <?php }else{ ?>
                    <a href="" class="btn btn-warning">Selesai</a>
                  <?php } ?>
                  &nbsp;
                  <a href="nota.php?id=<?= $a['faktur'] ?>" class="btn btn-warning">Cetak Nota</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
        </table>
  </div>
</div>

<?php } ?>