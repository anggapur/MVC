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
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td>Kg</td>
                </tr>
                <tr class="even gradeC">
                  <td>Liter</td>
                </tr>
                <tr class="odd gradeA">
                  <td>Buah</td>
                </tr>
                <tr class="even gradeA">
                  <td>Sak</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel Barang</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Satuan</th>
                </tr>
              </thead>
               <?php
                foreach($listBarang as $key => $value){

              ?>
              <tbody>
                <tr class="gradeX">
                  <td><?= $value['BARANG_NAMA']; ?></td>
                  <td><?= $value['JUMLAH']; ?></td>
                  <td><?= $value['SATUAN_NAMA']; ?></td>
                </tr>
              </tbody>
              <?php } ?>
            </table>

          </div>
        </div>
        <button class="btn btn-primary">Tambah List</button>
        <button class="btn btn-warning">Edit List</button>
      </div>
    </div>
  </div>
</div>

