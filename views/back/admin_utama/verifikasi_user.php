<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Verifikasi User</a> </div>
    <h1>Daftar User</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <?php
                if(isset($_SESSION['status']))
                {
                  echo "<div class='alert alert-".$_SESSION['color']."'>".$_SESSION['status']."</div>";
                  unset($_SESSION['status']);
                }
              ?>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Email</th>
                  <th>Jenis User</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php 
                foreach ($listUser as $key => $value) {

              ?>
              <tbody>
                <tr class="gradeX">
                  <td><?= $value['USERNAME']; ?></td>
                  <td><?= $value['PASSWORD']; ?></td>
                  <td><?= $value['EMAIL']; ?></td>
                  <td><?= $value['STATE']; ?></td>
                  <td><?= $value['STATE_VERIF']; ?></td>
                  <td><a href="<?= $this->base_url('ControlAdminUtama/updateVerifikasiUser/'.$value['USER_ID']);?>" class="btn btn-success btn-mini">Confirm</a>
                  </td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
