
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
          <h5>Form Pencarian</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12">
              <form method="POST" action="<?= $this->base_url('ControlPedagang/pencarianData/');?>">
                <div class="form-group">
                  <label>Tanggal Awal</label>
                  <input type="text" name="TANGGAL_AWAL" class="form-control" placeholder="yyyy-mm-dd">
                </div>
                <div class="form-group">
                  <label>Tanggal Akhir</label>
                  <input type="text" name="TANGGAL_AKHIR" class="form-control" placeholder="yyyy-mm-dd">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success" value="Cari">
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

