
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
          <h5>Form Edit Profil Pedagang</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12">
              <form method="POST" action="<?= $this->base_url('ControlPedagang/updateBelanjaan/'.$ambilPedagang['USER_ID']);?>">
         <!--       <th>No Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Metode Pengiriman</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>ID Satuan</th>
                    <th>Status Pengiriman</th>
                    <th>Status Pembayaran</th>
                    <th>Tanggal Transaksi</th> -->
                <div class="form-group">
                  <label>No Pembelian</label>
                  <input type="text" name="TRANSAKSI_ID" class="form-control" placeholder="" value="<?= $ambilPedagang['TRANSAKSI_ID'];?>">
                </div>
                <div class="form-group">
                  <label>Kode Barang</label>
                  <input type="text" name="HASILPANEN_ID" class="form-control" placeholder="" value="<?= $ambilPedagang['HASILPANEN_ID'];?>" >
                </div>
                 <div class="form-group">
                  <label>Metode Pengiriman</label>
                  <input type="text" name="METODE_PENGIRIMAN" class="form-control" placeholder="" value="<?= $ambilPedagang['METODE_PENGIRIMAN'];?>">
                </div>
                <div class="form-group">
                  <label>Harga Satuan</label>
                  <input type="text" name="HARGA_SATUAN" class="form-control" placeholder="" value="<?= $ambilPedagang['HARGA_SATUAN'];?>">
                </div>
                <div class="form-group">
                  <label>Jumlah </label>
                  <input type="text" name="JUMLAH" class="form-control" placeholder="" value="<?= $ambilPedagang['JUMLAH'];?>">
                </div>
                <div class="form-group">
                  <label>ID Satuan</label>
                  <input type="text" name="SATUAN_ID" class="form-control" placeholder="" value="<?= $ambilPedagang['SATUAN_ID'];?>">
                </div>
                <div class="form-group">
                  <label>Status Pengiriman</label>
                  <input type="text" name="STATUS_PENGIRIMAN" class="form-control" placeholder="" value="<?= $ambilPedagang['STATUS_PENGIRIMAN'];?>">
                </div>
                <div class="form-group">
                  <label>Status Pembayara</label>
                  <input type="text" name="STATUS_PEMBAYARAN" class="form-control" placeholder="" value="<?= $ambilPedagang['STATUS_PEMBAYARAN'];?>">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!--end-main-container-part-->

