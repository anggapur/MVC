<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Musim</a> </div>
    <h1>Daftar Musim</h1>
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
            <h5>Data Musim</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Nama Musim (Pangan)</th>
                  <th>Awal Musim (Waktu)</th>
                  <th>Akhir Musim (Waktu)</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php 
                    //Untuk Meloopin data yang diambil dari database
                    foreach($listUser as $key => $value){
                  ?>
              <tbody>
                <tr class="gradeX">
                  <td><?= $value['NAMA_MUSIM']; ?></td>
                  <td><?= $value['AWAL_MUSIM']; ?></td>
                  <td><?= $value['AKHIR_MUSIM']; ?></td>
                  <td>
                      <a href="<?= $this->base_url('ControlAdminUtama/editMusim/'.$value['MUSIM_ID']);?>" class="btn btn-warning btn-mini">Edit</a>
                      <a href="<?= $this->base_url('ControlAdminUtama/deleteMusim/'.$value['MUSIM_ID']); ?>" class="btn btn-danger btn-mini">Delete</a>
                    </td>
                </tr>
              </tbody>
            <?php } ?>
            </table>
          </div>
        </div>
        <a href="<?= $this->base_url('ControlAdminUtama/createMusim/');?>" class="btn btn-success">Buat Baru</a>
      </div>
    </div>
  </div>
</div>
