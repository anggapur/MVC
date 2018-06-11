	<?php
		use app\providers\Formating;
	?>
	<!-- Menu Awal -->
	<section class="big-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-4" style="text-align: center;">
						<img src="<?= $this->base_url('assets/uploads/'.$detailHasilPanen['BARANG_THUMBNAIL']);?>" style="width:50%;">
				</div>
				<div class="col-md-4">
					<table style="text-align: left;" class="table table-hovered">
						<tr>
							<td>Nama Barang</td>
							<td><b>:  <?= $detailHasilPanen['BARANG_NAMA'];?></b></td>
						</tr>
						<tr>
							<td>Lokasi </td>
							<td><b>:  <?= $detailHasilPanen['PROVINSI']." - ".$detailHasilPanen['KOTA']." - ".$detailHasilPanen['KECAMATAN'];?></b></td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td><b>:  <?= $detailHasilPanen['ALAMAT'];?></b></td>
						</tr>
						<tr>
							<td>Nama Petani</td>
							<td><b>:  <a href="<?= $this->base_url('Home/DetailPetani'.$detailHasilPanen['PETANI_ID']);?>"><?= $detailHasilPanen['NAMA']?></a></b></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><b>:  <?= $detailHasilPanen['PHONE']?></b></td>
						</tr>
					</table>
					<a href="" class="ayoBeli <?= ($_SESSION['STATE'] == 'petani') ? 'hide' : '';?>" data-hasil-panen-id="<?= $detailHasilPanen['HASILPANEN_ID']?>" data-sisa-panen="<?= ($detailHasilPanen['sisa'] == NULL) ? $detailHasilPanen['JUMLAH'] : $detailHasilPanen['sisa']; ?>">Beli</a>
				</div>
			</div>
			<div class="row" style="padding-top: 50px;">
				<h3 style="padding-bottom: 30px;">Foto - Foto Hasil Panen</h3>
				<?php foreach($fotoHasilPanen as $key => $value){ ?>
				<div class="col-md-3">
					<div class="wrapperContent">	
						<div class="wrapperImage">
							<img src="<?= $this->base_url('assets/uploads/'.$value['FILE']);?>" class="img-responsive centerTranslate">					
						</div>						
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