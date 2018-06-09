<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/uniform.css');?>"/>
<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/select2.css');?>"/>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Laporan</a> </div>
    <h1>Daftar Laporan</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Hasil Panen</th>
                  <th>Username</th>
                  <th>Metode Pengiriman</th>
                  <th>Harga Satuan</th>
                  <th>Terjual (Qty)</th>
                  <th>Satuan</th>
                  <th>Status Pengiriman</th>
                  <th>Status Pembayaran</th>
                  <th>Waktu Transaksi</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>anggapra</td>
                  <td>Beras</td>
                  <td>200</td>
                  <td class="center">Kg</td>
                </tr>
                <tr class="gradeC">
                  <td>anggapur</td>
                  <td>Tomat</td>
                  <td>20</td>
                  <td class="center">Kg</td>
                </tr>
                <tr class="gradeC">
                  <td>dito</td>
                  <td>Minyak Goreng</td>
                  <td>2000</td>
                  <td class="center">Liter</td>
                </tr>
                <tr class="gradeU">
                  <td>kiki</td>
                  <td>Sawi</td>
                  <td>500</td>
                  <td class="center">Kg</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
