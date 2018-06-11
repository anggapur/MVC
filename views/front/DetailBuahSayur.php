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
						<a href="" class="ayoBeli" data-hasil-panen-id="<?= $value['HASILPANEN_ID']?>" data-sisa-panen="<?= ($value['sisa'] == NULL) ? $value['JUMLAH'] : $value['sisa']; ?>">Beli</a>
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
		<form method="POST" action="<?= $this->base_url('Home/BeliBarang');?>">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Pembelian</h4>
				</div>
			<div class="modal-body">			
				<div class="form-group">
					<label>Jumlah Pembelian</label>
					<input type="number" name="JUMLAH" class="form-control" placeholder="Jumlah" id="jumlahPembelian" required="required">
				</div>
				<div class="form-group" id="detailBarang">
					
				</div>
			</div>
			<div class="modal-footer">				
				<input type="hidden" name="HASILPANEN_ID" id="HASILPANEN_ID">
				<input type="submit" class="btn btn-success" value="BELI">
			</div>
		</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div id="myModal2" class="modal fade" role="dialog">
		<div class="modal-dialog">

		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Pemberitahuan</h4>
				</div>
			<div class="modal-body">
				<h1>Maaf Stock Sudah Habis</h1>		
			</div>
			
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.ayoBeli').click(function(e){
				e.preventDefault();
				HASILPANEN_ID = $(this).attr('data-hasil-panen-id');
				SISA = $(this).attr('data-sisa-panen');						
				if(SISA > 0)
				{

					$.ajax({
						url : "<?= $this->base_url('Home/BuatTransaksi')?>/"+HASILPANEN_ID,
						type : "POST",
						dataType : "JSON",
						success : function(data)
						{
							console.log(data);
							if(data.status == "not-logged-in")
							{
								window.location.href="<?= $this->base_url('Home/loginAndRegister');?>";
							}
							else if(data.status == "not-verified")
							{
								window.location.href="<?= $this->base_url('Home/NotVerified');?>";
							}
							else if(data.status == "success")
							{
								$('#myModal').modal('show');
								$('#jumlahPembelian').attr('max',SISA);
								$('#detailBarang').empty();
								$('#HASILPANEN_ID').val(HASILPANEN_ID);
								html = '<table class="table">'+
											'<tr>'+
												'<td>Nama Produk </td>'+
												'<td>:'+data.data.BARANG_NAMA+'</td>'+
											'</tr>'+
											'<tr>'+
												'<td>Harga</td>'+
												'<td>:'+data.data.HARGA_RP+'/'+data.data.SATUAN_NAMA+'</td>'+
											'</tr>'+
											'<tr>'+
												'<td>Tersisa</td>'+
												'<td>:'+SISA+' '+data.data.SATUAN_NAMA+'</td>'+
											'</tr>'+
										'</table>';
								$('#detailBarang').append(html);

							}

						}
					}); // end ajax
				}
				else
				{
					$('#myModal2').modal('show');
				}
			});
		});
	</script>