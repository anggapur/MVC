<!DOCTYPE html>
<html lang="en">
<head>
	<title>Matrix Admin</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="css/colorpicker.css" />
	<link rel="stylesheet" href="css/datepicker.css" />
	<link rel="stylesheet" href="css/uniform.css" />
	<link rel="stylesheet" href="css/select2.css" />
	<link rel="stylesheet" href="css/matrix-style.css" />
	<link rel="stylesheet" href="css/matrix-media.css" />
	<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
	
	<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<!--Ini Bagian Yang Profile-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
<!--**************************************-->

<!--ini bagian yang simbol pesan-->

    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
<!--******************************************--> 
<!--Pengaturan-->   

    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--******************************************-->


<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="transaksiJUBEL.html"><i class="icon icon-signal"></i> <span>Pembelian</span></a> </li>
  <li><a href="EditJubel.html"><i class="icon icon-inbox"></i> <span>Edit Profile</span></a> </li>
  <li><a href="PembelianJUBEL.html"><i class="icon icon-th"></i> <span>Laporan Pembelian</span></a></li>
   <li><a href="TawarJUBEL.html"><i class="icon icon-th"></i> <span>Tawar Menawar</span></a></li>
   <!-- <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu active"> <a href="#"><i class="icon icon-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>-->
  </ul>
</div>


<!--close-left-menu-stats-sidebar-->
<!--Bagian Atas-->
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Edit Profile</h1>
</div>
<!--******************************************-->



<!--PERSONAL INFO
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Profile</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Pedagang</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Masukan Nama Pedagang" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Masukan Alamat Pedagang"  />
              </div>
            </div>      
            <div class="control-group">
              <label class="control-label">Kota</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Masukan Kota Pedagang"  />
              </div>
            </div>  
            <div class="control-group">
              <label class="control-label">No KTP</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="No KTP Pedagang"  />
              </div>
            </div>  
            </div>  
            <div class="control-group">
              <label class="control-label">Phone</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="No Telepon Pedagang"  />
              </div>
            </div>  
            </div>  
            <div class="control-group">
              <label class="control-label">Nama Toko</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="No Toko"  />
              </div>
            </div>  
            </div>  
            <div class="control-group">
              <label class="control-label">Password Baru</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Password Baru"  />
              </div>
            </div>  
             <div class="control-group">
              <label class="control-label">Password Lama</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Password Lama"  />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
        </div>
      </div>-->
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5> Edit Profile</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Pedagang :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat Pedangang :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kota Pedagang :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">No KTP Pedagang :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">No Telp :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Toko :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password Baru</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Enter Password"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password Lama</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Enter Password"  />
              </div>
            </div>
          <!--  <div class="control-group">
              <label class="control-label">Company info :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Company name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description field:</label>
              <div class="controls">
                <input type="text" class="span11" />
                <span class="help-block">Description field</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Message</label>
              <div class="controls">
                <textarea class="span11" ></textarea>
              </div>
            </div>-->
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
        </div>
      </div>
      <!---BATAS PERSONAL INFO-->


      <!--Footer-part-->
		<div class="row-fluid">
		  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
		</div>
		<!--end-Footer-part--> 
		<script src="js/jquery.min.js"></script> 
		<script src="js/jquery.ui.custom.js"></script> 
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/bootstrap-colorpicker.js"></script> 
		<script src="js/bootstrap-datepicker.js"></script> 
		<script src="js/jquery.toggle.buttons.js"></script> 
		<script src="js/masked.js"></script> 
		<script src="js/jquery.uniform.js"></script> 
		<script src="js/select2.min.js"></script> 
		<script src="js/matrix.js"></script> 
		<script src="js/matrix.form_common.js"></script> 
		<script src="js/wysihtml5-0.3.0.js"></script> 
		<script src="js/jquery.peity.min.js"></script> 
		<script src="js/bootstrap-wysihtml5.js"></script> 
		<script>
			$('.textarea_editor').wysihtml5();
		</script>
</body>