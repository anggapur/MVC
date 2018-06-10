
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
               <?php
                if(isset($_SESSION['status']))
                {
                  echo "<div class='alert alert-".$_SESSION['color']."'>".$_SESSION['status']."</div>";
                  unset($_SESSION['status']);
                }
              ?>
              <form method="POST" action="<?= $this->base_url('ControlPedagang/update/'.$ambilPedagang['USER_ID']);?>">
                <div class="form-group">
                  <label>Nama Toko</label>
                  <input type="text" name="NAMA_TOKO" class="form-control" placeholder="" value="<?= $ambilPedagang['NAMA_TOKO'];?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="ALAMAT" class="form-control" placeholder="" value="<?= $ambilPedagang['ALAMAT'];?>" >
                </div>
                 <div class="form-group">
                  <label>No Identitas</label>
                  <input type="number" name="NO_KTP" class="form-control" placeholder="" value="<?= $ambilPedagang['NO_KTP'];?>">
                </div>
                <div class="form-group">
                  <label>No Telephone</label>
                  <input type="text" name="PHONE" class="form-control" placeholder="" value="<?= $ambilPedagang['PHONE'];?>">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="NAMA" class="form-control" placeholder="" value="<?= $ambilPedagang['NAMA'];?>">
                </div>
                <div class="form-group">
                  <label>Kecamatan</label>
                  <input type="text" name="KECAMATAN" class="form-control" placeholder="" value="<?= $ambilPedagang['KECAMATAN'];?>">
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" name="KOTA" class="form-control" placeholder="" value="<?= $ambilPedagang['KOTA'];?>">
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

