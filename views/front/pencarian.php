	<!-- Menu Awal -->
	<section class="big-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="title"><?= $title?></h1>
					<div class="filterWrap floatRight">
						<button class="btn btn-default" id="filter">Filter</button>
					</div>
				</div>
			</div>	
			<div class="row" id="dataContent">
				<?php foreach($hasilPencarianPetani as $key => $value) { ?>
				<div class="col-md-3">
					<div class="wrapperContent">
						<div class="wrapperImage">
							<img src="<?= $this->base_url('assets/uploads/'.$value['PHOTO_PROFIL']);?>" class="img-responsive centerTranslate">
						</div>
						<h5><?= $value['NAMA'];?></h5>
						<p><?= $value['PROVINSI']." - ".$value['KOTA']?></p>
						<a href="<?= $this->base_url('Home/DetailPetani/'.$value['PETANI_ID']);?>" class="ayoBeli">Lihat</a>

					</div>
				</div>			
				<?php  } ?>
			</div>
			<div class="row">
				<div class="col-md-12">
					
				</div>
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
