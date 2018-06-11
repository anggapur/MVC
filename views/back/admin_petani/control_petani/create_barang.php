
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Admin / <?= $titlePage." / ".$actionPage;?></a></div>
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
              <form method="POST" action="<?= $this->base_url('ControlAdminPetani/saveBarang');?>">
                <div class="form-group">
                  <label>Barang</label>
                  <select name="BARANG_ID" class="form-control">
                    <?php foreach($listBarang as $key => $value){ ?>
                      <option value="<?=$value['BARANG_ID']?>"><?=$value['BARANG_NAMA']?></option>
                    <?php  } ?>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" class="form-control" name="JUMLAH">
                </div>
                 <div class="form-group">
                  <label>Harga Satuan</label>
                  <input type="number" class="form-control" name="HARGA_SATUAN">
                </div>
                 <div class="form-group">
                  <label>Satuan</label>
                  <select name="SATUAN_ID" class="form-control">
                    <?php foreach($listSatuan as $key => $value){ ?>
                      <option value="<?=$value['SATUAN_ID']?>"><?=$value['SATUAN_NAMA']?></option>
                    <?php  } ?>
                  </select>
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

