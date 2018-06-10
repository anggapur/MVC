	<?php
		use app\providers\Formating;
	?>
	<!-- Menu Awal -->
	<section class="big-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-4" style="text-align: center;">
						<img src="<?= $this->base_url('assets/uploads/profil.png');?>" style="width:50%;">
				</div>
				<div class="col-md-4">
					<table style="text-align: left;" class="table table-hovered">
						<tr>
							<td>Nama </td>
							<td><b>:  <?= $dataPetani['NAMA'];?></b></td>
						</tr>
						<tr>
							<td>Lokasi </td>
							<td><b>:  <?= $dataPetani['PROVINSI']." - ".$dataPetani['KOTA']." - ".$dataPetani['KECAMATAN'];?></b></td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td><b>:  <?= $dataPetani['ALAMAT'];?></b></td>
						</tr>
						<tr>
							<td>Jumlah Post</td>
							<td><b>:  <?= $dataPetani['JumlahPost']." post";?></b></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="row" style="padding-top: 50px;">
				<?php foreach($listBarangDariPetani as $key => $value) { ?>
				<div class="col-md-3">
					<div class="wrapperContent">	
						<div class="wrapperImage">
							<img src="<?= $this->base_url('assets/uploads/'.$value['BARANG_THUMBNAIL']);?>" class="img-responsive centerTranslate">					
						</div>
						<h5><?= $value['BARANG_NAMA']; ?></h5>
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
	<script type="text/javascript">
		$(document).ready(function(){
			$('.ayoBeli').click(function(e){
				e.preventDefault();
				HASILPANEN_ID = $(this).attr('data-hasil-panen-id');
				$.ajax({
					url : "<?= $this->base_url('Home/BuatTransaksi')?>",
					type : "POST",
					dataType : "JSON",
					success : function(data)
					{
						if(data.status == "not-logged-in")
						{
							window.location.href="<?= $this->base_url('Home/loginAndRegister');?>";
						}
						else
						{
							
						}
					}
				});
			});
		});
	</script>