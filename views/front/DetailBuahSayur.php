	<?php
		use app\providers\Formating;
	?>
	<!-- Menu Awal -->
	<section class="big-menu">
		<div class="container">			
			<div class="row" style="padding-top: 0px;">
				<div class="col-md-12">
					<h2 style="text-align: center;padding: 40px 0px;"><?= $detailBarang['BARANG_NAMA'];?></h2>				
				</div>
				<?php foreach($listPetani as $key => $value) { ?>
				<div class="col-md-3">
					<div class="wrapperContent">	
						<div class="wrapperImage">
							<img src="<?= $this->base_url('assets/uploads/'.$value['PHOTO_PROFIL']);?>" class="img-responsive centerTranslate">					
						</div>
						<h5><?= $value['NAMA']; ?></h5>
						<p><?= Formating::moneyFormat($value['HARGA_SATUAN'])." / ".$value['SATUAN_NAMA'];?></p>
						<p>Tersedia : <?= ($value['sisa'] == NULL) ? $value['JUMLAH'] : $value['sisa']; ?> <?= $value['SATUAN_NAMA']; ?></p>
						<p>Di Posting : <?= Formating::dayFormat($value['WAKTU_BUAT'],'d M Y');?></p>
						<a href="" class="ayoBeli" data-hasil-panen-id="<?= $value['HASILPANEN_ID']?>">Beli</a>
						<a href="" class="ayoTawar" data-hasil-panen-id="<?= $value['HASILPANEN_ID']?>">Tawar</a>
					</div>
				</div>							
				<?php } ?>
			</div>				
		</div>
	</section>
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Filter</h4>
				</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Provinsi</label>
					<select name="PROVINSI" class="form-control" id="PROVINSI" required="required">
														
					</select>
				</div>
				<div class="form-group">
					<label>Kota</label>
					<select name="KOTA" class="form-control" id="KOTA" required="required">
						
					</select>
				</div>
				<div class="form-group">
					<label>Kecamatan</label>
					<select name="KECAMATAN" class="form-control" id="KECAMATAN" required="required">
						
					</select>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success">Saring</button>
			</div>
			</div>
		</div>
	</div>
