<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/uniform.css');?>"/>
<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/select2.css');?>"/>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Barang</a> </div>
    <h1>Daftar Barang</h1>
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
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Tabel Satuan</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              
              <thead>
                <tr>
                  <th>Satuan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php 
                foreach ($listBarang as $key => $value) {

              ?>
              <tbody>
                <tr class="odd gradeX">
                  <td><?= $value['SATUAN_NAMA']; ?></td>
                  <td>
                    <a href="<?= $this->base_url('ControlAdminUtama/editSatuan/'.$value['SATUAN_ID']);?>" class="btn btn-warning btn-mini">Edit</a>
                      <a href="<?= $this->base_url('ControlAdminUtama/deleteSatuan/'.$value['SATUAN_ID']); ?>" class="btn btn-danger btn-mini">Delete</a>
                    </td>
                </tr>
               
              </tbody>
             <?php } ?>
            </table>
          </div>
        </div>
        <a href="<?= $this->base_url('ControlAdminUtama/createSatuanBarang/');?>" class="btn btn-success">Buat Baru</a>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel Barang</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Nama Barang</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
                foreach($listUser as $key => $value){

              ?>
              <tbody>
                <tr class="gradeX">
                  <td><?= $value['BARANG_NAMA']; ?></td>
                  <td>
                    <a href="<?= $this->base_url('ControlAdminUtama/editBarang/'.$value['BARANG_ID']);?>" class="btn btn-warning btn-mini">Edit</a>
                      <a href="<?= $this->base_url('ControlAdminUtama/deleteBarang/'.$value['BARANG_ID']); ?>" class="btn btn-danger btn-mini">Delete</a>
                  </td>
                </tr>
              </tbody>
            <?php } ?>
            </table>
          </div>
        </div>
        <a href="<?= $this->base_url('ControlAdminUtama/createBarang');?>" class="btn btn-success">Buat Baru</a>
      </div>
    </div>
  </div>
</div>
