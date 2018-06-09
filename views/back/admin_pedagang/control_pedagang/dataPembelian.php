
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Pedagang / <?= $titlePage." / ".$actionPage;?></a></div>
  </div>
<!--End-breadcrumbs-->
  <div class="container-fluid">
<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5></h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12">
              <?php
                if(isset($_SESSION['status']))
                {
                  echo "<div class='alert alert-".$_SESSION['color']."'>".$_SESSION['status']."</div>";
                  unset($_SESSION['status']);
                }
              ?>
              <a href="<?= $this->base_url('ControlUser/create');?>" class="btn btn-success btn-mini">Buat Baru</a>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Metode Pengiriman</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>ID Satuan</th>
                    <th>Status Pengiriman</th>
                    <th>Status Pembayaran</th>
                    <th>Tanggal Transaksi</th>
                    <th>Action</th>
                  </tr>
                  <?php 
                    //Untuk Meloopin data yang diambil dari database
                    $i = 1;
                    foreach($listUser as $key => $value){
                  ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $value['TRANSAKSI_ID'];?></td>
                    <td><?= $value['HASILPANEN_ID'];?></td>
                    <td><?= $value['METODE_PENGIRIMAN'];?></td>
                    <td><?= $value['HARGA_SATUAN'];?></td>
                    <td><?= $value['JUMLAH'];?></td>
                    <td><?= $value['SATUAN_ID'];?></td>
                    <td><?= $value['STATUS_PENGIRIMAN'];?></td>
                    <td><?= $value['STATUS_PEMBAYARAN'];?></td>                    
                    <td><?= $value['WAKTU_BUAT'];?></td>                    
                    <td>
                      <a href="<?= $this->base_url('ControlUser/edit/'.$value['USER_ID']);?>" class="btn btn-warning btn-mini">Edit</a>
                      <a href="<?= $this->base_url('ControlUser/delete/'.$value['USER_ID']); ?>" class="btn btn-danger btn-mini">Delete</a>
                    </td>
                  </tr>
                  <?php } ?>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!--end-main-container-part-->

