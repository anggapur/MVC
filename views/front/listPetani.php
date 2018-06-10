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
				<?php foreach($listPetani as $key => $value) { ?>
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
					<button class="btn btn-default" id="btnMuat">Muat Lebih Banyak</button>
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
<!-- End Modal -->
	<script type="text/javascript">
		var page = 2;
		var dataPerPage = 2;
		$(document).ready(function(){
			//Prov
			$.ajax({
				url : 'http://dev.farizdotid.com/api/daerahindonesia/provinsi',
				dataType : 'json',
				type : 'GET',
				success : function(data){
					$.each(data.semuaprovinsi,function(i,item){
						html = '<option value="'+item.nama+'" data-provinsi-id="'+item.id+'">'+item.nama+'</option>';
						$('#PROVINSI').append(html);
					});
				},
			});
			//
			$('#PROVINSI').change(function(){
				provinsiId = $(this).find('option:selected').attr('data-provinsi-id');
				$.ajax({
					url : 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/'+provinsiId+'/kabupaten',
					dataType : 'json',
					type : 'GET',
					success : function(data){
						$('#KOTA').empty();
						$.each(data.daftar_kecamatan,function(i,item){
							html = '<option value="'+item.nama+'" data-kota-id="'+item.id+'" data-provinsi-id="'+item.id_prov+'">'+item.nama+'</option>';
							$('#KOTA').append(html);
						});
					},
				});
			});

			$('#KOTA').change(function(){
				kotaId = $(this).find('option:selected').attr('data-kota-id');				
				$.ajax({
					url : 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/'+kotaId+'/kecamatan',
					dataType : 'json',
					type : 'GET',
					success : function(data){
						$('#KECAMATAN').empty();
						$.each(data.daftar_kecamatan,function(i,item){
							html = '<option value="'+item.nama+'" data-kecamatan-id="'+item.id+'" data-kota-id="'+item.id_prov+'">'+item.nama+'</option>';
							$('#KECAMATAN').append(html);
						});
					},
				});
			});
			//
			$('#filter').click(function(){
				$('#myModal').modal('show');
			});
			//		
			$('#btnMuat').click(function(){
				$.ajax({
					url : "<?= $this->base_url()?>"+"Home/getApiListPetani/"+page+"/"+dataPerPage,
					type : 'GET',
					dataType : 'JSON',
					success : function(data){
						$.each(data,function(index,item){
							console.log(item);
							html = '<div class="col-md-3">'+
									'<div class="wrapperContent">'+
										'<div class="wrapperImage">'+
											'<img src="<?= $this->base_url('assets/uploads');?>/'+item.PHOTO_PROFIL+'" class="img-responsive centerTranslate">'+
										'</div>'+
										'<h5>'+item.NAMA+'</h5>'+
										'<p>'+item.PROVINSI+'-'+item.KOTA+'</p>'+
										'<a href="<?= $this->base_url('Home/DetailPetani');?>/'+item.PETANI_ID+'" class="ayoBeli">Lihat</a>'+
									'</div>';
							$('#dataContent').append(html);

						});
					}
				});
				page++;
			});
		});
	</script>