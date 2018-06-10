<?php use app\providers\{Auth,Url}; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Utama</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/bootstrap-responsive.min.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/fullcalendar.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/matrix-style.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/matrix-media.css'); ?>" />
<link href="<?= $this->base_url('assets/backend/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
<link rel="stylesheet" href="<?= $this->base_url('assets/backend/css/jquery.gritter.css'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="<?= $this->base_url('assets/backend/js/jquery.min.js');?>"></script> 
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Admin Utama</a></h1>
  <img src="<?= $this->base_url('assets/backend/img/logo.png');?>" alt="Logo" class="img-logo">
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?= $this->base_url('AdminUtama/displayProfile');?>"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="<?= Url::to('LoginControl/logout') ?>"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="Logout" href="<?= Url::to('LoginControl/logout') ?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i><?= $titlePage." / ".$actionPage;?></a>
  <ul>
    <!-- Angga Pram -->
    <li class="active"><a href="<?= $this->base_url('AdminUtama/dashboard');?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="<?= $this->base_url('AdminUtama/verifikasiUser');?>"><i class="icon icon-th"></i> <span>Verifikasi User</span></a> </li>
    <li> <a href="<?= $this->base_url('AdminUtama/laporan');?>"><i class="icon icon-book"></i> <span>Laporan</span></a> </li>
    <li> <a href="<?= $this->base_url('AdminUtama/barang');?>"><i class="icon icon-tags"></i> <span>Barang</span></a> </li>
    <li> <a href="<?= $this->base_url('AdminUtama/musim');?>"><i class="icon icon-bell"></i> <span>Musim</span></a> </li>
    <!-- Dito -->
    <li> <a href="<?= $this->base_url('AdminPetani/LaporanStok');?>"><i class="icon icon-th"></i> <span>Laporan & Stok Barang</span></a> </li>
    <li> <a href="<?= $this->base_url('AdminPetani/BarangPetani');?>"><i class="icon icon-th"></i> <span>Tambah Barang Penjual</span></a> </li>
    <!--KiWi-->
    <li> <a href="<?= $this->base_url('ControlPedagang/edit');?>"><i class="icon icon-th"></i> <span>Edit Profil Pedagang</span></a> </li>
    <li> <a href="<?= $this->base_url('ControlPedagang/tampilanPencarianTransaksi');?>"><i class="icon icon-th"></i> <span>Cari Data</span></a> </li>
    <li> <a href="<?= $this->base_url('ControlPedagang/laporanTransaksi');?>"><i class="icon icon-th"></i> <span>Laporan Pembelian</span></a> </li>
  </ul>
</div>

<!--sidebar-menu-->

<?php
    require_once __DIR__ ."/../".$include;
  ?>
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"><a href=""></a></div>
</div>

<!--end-Footer-part-->

<script src="<?= $this->base_url('assets/backend/js/excanvas.min.js');?>"></script> 

<script src="<?= $this->base_url('assets/backend/js/jquery.ui.custom.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/bootstrap.min.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/jquery.flot.min.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/jquery.flot.resize.min.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/jquery.peity.min.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/fullcalendar.min.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/matrix.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/matrix.dashboard.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/jquery.gritter.min.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/matrix.interface.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/matrix.chat.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/jquery.validate.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/matrix.form_validation.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/jquery.wizard.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/jquery.uniform.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/select2.min.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/matrix.popover.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/jquery.dataTables.min.js');?>"></script> 
<script src="<?= $this->base_url('assets/backend/js/matrix.tables.js');?>"></script> 


<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
