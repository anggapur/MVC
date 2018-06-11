

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
              <form method="POST" action="<?= $this->base_url('ControlPedagang/transaksi');?>">
                 <div class="form-group">
                  <label>No Pembelian</label>
                  <input type="number" name="TRANSAKSI_ID" class="form-control" placeholder="Masukan No Pembelian">
                </div>
                <div class="form-group">
                  <label>Kode Barang</label>
                  <input type="number" name="HASILPANEN_ID" class="form-control" placeholder="Masukan Kode Barang" >
                </div>
                 <div class="form-group">
                  <label>Metode Pengiriman</label>
                  <select name="METODE_PENGIRIMAN" class="form-control">
                    <option value="sendiri">Sendiri</option>
                    <option value="diantar">Diantar</option>
                  </select>
                </div>
                 <!-- <input type="text" name="METODE_PENGIRIMAN" class="form-control" placeholder=""> -->
                </div>
                <div class="form-group">
                  <label>Harga Satuan</label>
                  <input type="text" name="HARGA_SATUAN" class="form-control" placeholder="Masukan Harga Satuan">
                </div>
                <div class="form-group">
                  <label>Jumlah </label>
                  <input type="text" name="JUMLAH" class="form-control" placeholder="Masukan Jumlah">
                </div>
                <div class="form-group">
                  <label>ID Satuan</label>
                  <input type="text" name="SATUAN_ID" class="form-control" placeholder="Masukan Satuan Id">
                </div>
                <div class="form-group">
                  <label>Status Pengiriman</label>
                   <select name="STATUS_PENGIRIMAN" class="form-control">
                    <option value="1">Sudah</option>
                    <option value="0">Belum</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status Pembayaran</label>
                   <select name="STATUS_PEMBAYARAN" class="form-control">
                    <option value="1">Lunas</option>
                    <option value="0">Hutang</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                </div>
  <!--            </form> -->
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!--end-main-container-part-->

