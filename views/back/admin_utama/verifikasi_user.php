<!DOCTYPE html>
<html lang="en">
<head>
<title>Verifikasi User</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Verifikasi User</a></h1>
  <img src="img/logo.png" alt="Logo" class="img-logo">
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="display_profile.php"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Verifikasi User</a>
  <ul>
    <li><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="active"> <a href="verifikasi_user.php"><i class="icon icon-th"></i> <span>Verifikasi User</span></a> </li>
    <li> <a href="Laporan.php"><i class="icon icon-book"></i> <span>Laporan</span></a> </li>
    <li> <a href="barang.php"><i class="icon icon-tags"></i> <span>Barang</span></a> </li>
    <li> <a href="musim.php"><i class="icon icon-bell"></i> <span>Musim</span></a> </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Verifikasi User</a> </div>
    <h1>Daftar User</h1>
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
                  <th>Username</th>
                  <th>Password</th>
                  <th>Jenis User</th>
                  <th>Usia (Tahun)</th>
                  <th>Verify</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>anggapra</td>
                  <td>asdfdsdf</td>
                  <td>Petani</td>
                  <td class="center">20</td>
                  <td class="center"><button class="btn btn-success">Confirm</button></td>
                </tr>
                <tr class="gradeC">
                  <td>anggapur</td>
                  <td>asf</td>
                  <td>Pedagang</td>
                  <td class="center">20</td>
                  <td class="center"><button class="btn btn-success">Confirm</button></td>
                </tr>
                <tr class="gradeC">
                  <td>dito</td>
                  <td>asdsdf</td>
                  <td>Petani</td>
                  <td class="center">20</td>
                  <td class="center"><button class="btn btn-success">Confirm</button></td>
                </tr>
                <tr class="gradeU">
                  <td>kiki</td>
                  <td>asdfd</td>
                  <td>Petani</td>
                  <td class="center">20</td>
                  <td class="center"><button class="btn btn-success">Confirm</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
