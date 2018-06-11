<?php 
	use app\providers\Formating;
?>
	<!-- Menu Awal -->
	<section class="big-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="title">Musim Sedang Berlangsung</h1>
					<div class="filterWrap floatRight">						
					</div>
				</div>
			</div>	
			<div class="row">
				<?php foreach($listMusim as $key => $value) { ?>
				<div class="col-md-3">
					<div class="wrapperContent">						
						<h5><?= $value['NAMA_MUSIM']; ?></h5>
						<p><?= Formating::dayFormat($value['AWAL_MUSIM'],"d M Y")." - ".Formating::dayFormat($value['AKHIR_MUSIM'],"d M Y")?></p>
						<!-- <button class="ayoBeli">Lihat</button> -->
					</div>
				</div>							
				<?php } ?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1 class="title">Musim Akan Berlangsung</h1>
					<div class="filterWrap floatRight">						
					</div>
				</div>
			</div>	
			<div class="row">
				<?php foreach($listMusimAkan as $key => $value) { ?>
				<div class="col-md-3">
					<div class="wrapperContent">						
						<h5><?= $value['NAMA_MUSIM']; ?></h5>
						<p><?= Formating::dayFormat($value['AWAL_MUSIM'],"d M Y")." - ".Formating::dayFormat($value['AKHIR_MUSIM'],"d M Y")?></p>
						<!-- <button class="ayoBeli">Lihat</button> -->
					</div>
				</div>							
				<?php } ?>
			</div>			
		</div>
	</section>
	