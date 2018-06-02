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
                  <th>Satuan</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>Apel</td>
                  <td>Kg</td>
                </tr>
                <tr class="gradeC">
                  <td>Minyak Kelapa</td>
                  <td>Liter</td>
                </tr>
                <tr class="gradeC">
                  <td>Tomat</td>
                  <td>Kg</td>
                </tr>
                <tr class="gradeU">
                  <td>Beras</td>
                  <td>Kg</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <button class="btn btn-primary">Tambah List</button>
        <button class="btn btn-warning">Edit List</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
