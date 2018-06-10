<?php use app\providers\{Auth,Url}; ?>
<!DOCTYPE html>
<html>
<head>
	<title>JUBEL TANI</title>
	<!-- Boootstrap -->
	<link rel="stylesheet" type="text/css" href="<?= $this->base_url('assets/front/bootstrap/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->base_url('assets/front/bootstrap/css/style.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->base_url('assets/front/font-awesome-4.7.0/css/font-awesome.min.css');?>">
	<!-- JS -->
	<script type="text/javascript" src="<?= $this->base_url('assets/front/jquery/jquery-1.9.1.min.js'); ?>"></script>
</head>
<body>
	<!-- Navigation -->
	<nav class="navigation">
		<div class="container">
			<ul class="navigation-menu floatLeft">
				<li><a href="<?= $this->base_url('Home/listPetani');?>">Petani</a></li>				
				<li><a href="<?= $this->base_url('Home/listBuahSayur');?>">Sayur & Buah</a></li>
				<li><a href="<?= $this->base_url('Home/musim');?>">Musim</a></li>
				<li><a href="<?= $this->base_url('Home/monitoringHarga');?>">Monitoring Harga</a></li>
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
					echo '<li><a href="'.$this->base_url('Home/loginAndRegister').'">Daftar & Masuk</a></li>';
				}	
				?>								
			</ul>
		</div>
	</nav>
	<!-- Header -->
	<header class="<?= isset($headerShow) ? $headerShow : '';?>">
		<div class="container">
			<div class="col-md-3 logo-wrap">
				<a href="<?= $this->base_url(''); ?>"><img src="<?= $this->base_url('assets/front/assets/logo.png');?>" alt="Logo" class="img-logo"></a>
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
	<hr class="<?= isset($headerShow) ? $headerShow : '';?>">


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

<script type="text/javascript" src="<?= $this->base_url('assets/front/bootstrap/js/bootstrap.min.js'); ?>"></script>
</html>