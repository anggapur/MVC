<?php use app\providers\{Auth,Url}; ?>
<!DOCTYPE html>
<html>
<head>
	<title>JUBEL TANI</title>
	<!-- Boootstrap -->
	<link rel="stylesheet" type="text/css" href="<?= $this->base_url('assets/front/bootstrap/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->base_url('assets/front/bootstrap/css/style.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->base_url('assets/front/font-awesome-4.7.0/css/font-awesome.min.css');?>">
</head>
<body>
	<!-- Navigation -->
	<nav class="navigation">
		<div class="container">
			<ul class="navigation-menu floatLeft">
				<li><a href="">Pedagang</a></li>				
				<li><a href="">Sayur & Buah</a></li>
				<li><a href="">Musim</a></li>
				<li><a href="">Monitoring Harga</a></li>
			</ul>
			<ul class="navigation-menu floatRight">
				<?php 
				if(Auth::checkAuth())
				{
					echo '<li><a href="">Akun Saya</a></li>';
					echo '<li><a href="'.Url::to('LoginControl/logout').'">Logout</a></li>';
				}
				else
				{
					echo '<li><a href="">Daftar & Masuk</a></li>';
				}	
				?>								
			</ul>
		</div>
	</nav>
	<!-- Header -->
	<header>
		<div class="container">
			<div class="col-md-3 logo-wrap">
				<img src="<?= $this->base_url('assets/front/assets/logo.png');?>" alt="Logo" class="img-logo">
			</div>
			<div class="col-md-6 find-wrap">
				<h6>Cari Kebutuhan Disini</h6>
				<div class="form-group form-inline">
					<input type="text" name="search" placeholder="Cari Komoditas & Produk" class="form-control">
					<button class="btn btn-success">Cari</button>					
				</div>
			</div>
			<div class="col-md-3 keranjang-wrap">
				<div class="troley">
					<span>Keranjang</span><br>
					<b>IDR 0</b>
				</div>
			</div>
		</div>
	</header>
	<hr>


	<?php
		require_once __DIR__ ."/../".$include;
	?>
<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					&copy; Jubel Tani - 2018
				</div>
			</div>	
		</div>
	</footer>
</body>
<script type="text/javascript" src="jquery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>