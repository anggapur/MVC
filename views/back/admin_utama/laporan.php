<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/uniform.css');?>"/>
<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/select2.css');?>"/>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Laporan</a> </div>
    <h1>Daftar Laporan</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <?php
                if(isset($_SESSION['status']))
                {
                  echo "<div class='alert alert-".$_SESSION['color']."'>".$_SESSION['status']."</div>";
                  unset($_SESSION['status']);
                }
              ?>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Hasil Panen</th>
                  <th>Nama Petani</th>
                  <th>Nama Pedagang</th>
                  <th>Metode Pengiriman</th>
                  <th>Harga Satuan</th>
                  <th>Terjual (Qty)</th>
                  <th>Satuan</th>
                  <th>Status Pengiriman</th>
                  <th>Status Pembayaran</th>
                  <th>Waktu Transaksi</th>
                </tr>
              </thead>
              <?php 
                    //Untuk Meloopin data yang diambil dari database
                    $i = 1;
                    foreach($listUser as $key => $value){
                  ?>
              <tbody>
                <tr class="gradeX">
                  <td><?= $value['a'];?></td>
                  <td><?= $value['b'];?></td>
                  <td><?= $value['c'];?></td>
                  <td><?= $value['d'];?></td>
                  <td><?= $value['e'];?></td>
                  <td><?= $value['f'];?></td>
                  <td><?= $value['g'];?></td>
                  <td><?= $value['h'];?></td>
                  <td><?= $value['i'];?></td>
                  <td><?= $value['j'];?></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
