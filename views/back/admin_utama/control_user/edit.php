
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
              <form method="POST" action="<?= $this->base_url('ControlAdminUtama/update/'.$ambilData['USER_ID']);?>">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="USERNAME" class="form-control" placeholder="" value="<?= $ambilData['USERNAME'];?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="PASSWORD" class="form-control" placeholder="Masukan Password">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="EMAIL" class="form-control" placeholder="" value="<?= $ambilData['EMAIL'];?>">
                </div>
                 <div class="form-group">
                  <label>Jenis User</label>
                  <select name="STATE" class="form-control">

                    <option value="pedagang" <?= ($ambilData['STATE'] == "pedagang") ? 'selected="selected"' : ''?> >Pedagang</option>
                    <option value="petani" <?= ($ambilData['STATE'] == "petani") ? 'selected="selected"' : ''?> >Petani</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status Verifikasi</label>
                  <select name="STATE_VERIF" class="form-control">

                    <option value="verified" <?= ($ambilData['STATE_VERIF'] == "verified") ? 'selected="selected"' : ''?> >Verified</option>
                    <option value="unverified" <?= ($ambilData['STATE_VERIF'] == "unverified") ? 'selected="selected"' : ''?> >Unverified</option>
                  </select>
                </div>

                <div class="form-group">

                  <input type="submit" name="submit" class="btn btn-success" value="Simpan User">
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

