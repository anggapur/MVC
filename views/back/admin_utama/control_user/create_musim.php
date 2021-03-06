
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
              <form method="POST" action="<?= $this->base_url('ControlAdminUtama/saveMusim');?>">
                <div class="form-group">
                  <label>Nama Musim</label>
                  <input type="text" name="NAMA_MUSIM" class="form-control" placeholder="Masukan Nama Musim">
                </div>
                <div class="form-group">
                  <label>Awal Musim</label>
                  <input type="date" data-date-inline-picker="true" name="AWAL_MUSIM" class="form-control" placeholder="Masukan Awal Musim">
                </div>
                <div class="form-group">
                  <label>Akhir Musim</label>
                  <input type="date" data-date-inline-picker="true" name="AKHIR_MUSIM" class="form-control" placeholder="Masukan Akhir Musim">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success" value="Simpan Musim">
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

