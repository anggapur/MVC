
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
          <h5>Form Edit</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12">
              <form method="POST" action="<?= $this->base_url('ControlAdminPetani/updateBarangPetani3/'.$ambilData['BARANG_ID']);?>">
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="BARANG_NAMA" class="form-control" placeholder="" value="<?= $ambilData['BARANG_NAMA'];?>">
                </div>
                <div class="form-group">

                  <input type="submit" name="submit" class="btn btn-success" value="Simpan Barang">
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

