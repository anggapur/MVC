
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
          
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Pembelian</th>
                    <th>Metode Pengiriman</th>                
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>Status Pengiriman</th>
                    <th>Status Pembayaran</th>
                    <th>Tanggal Transaksi</th>
                  </tr>
                  <?php 
                    //Untuk Meloopin data yang diambil dari database
                    $i = 1;
                    foreach($listUser as $key => $value){
                  ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $value['TRANSAKSI_ID'];?></td>
                    <td><?= $value['METODE_PENGIRIMAN'];?></td>
                    <td><?= $value['HARGA_SATUAN'];?></td>
                    <td><?= $value['JUMLAH'];?></td>
                    <td><?= $value['STATUS_PENGIRIMAN'];?></td>
                    <td><?= $value['STATUS_PEMBAYARAN'];?></td>                    
                    <td><?= $value['WAKTU_BUAT'];?></td>                    
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

