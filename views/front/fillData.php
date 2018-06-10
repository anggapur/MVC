<?php use app\providers\{Auth,Url,Alert}; ?>
	<header>
		<div class="container">			
			<div class="col-md-12">
				<h2 style="text-align: center;padding: 40px 0px;">Lengkapi Data Anda</h2>				
			</div>			
		</div>
	</header>
	<hr>
	<section class="formLoginRegister" style="padding: 30px 0px;">
		<div class="container">
			<div class="row">
				<?php if($_SESSION['STATE'] == "petani"){ ?>	
					<form method="POST" action="<?= $this->base_url('LoginControl/submitDataPetani');?>">
						<div class="col-md-6">
							<div class="form-group">
								<label>KTP</label>
								<input type="text" name="KTP" class="form-control" placeholder="KTP" required="required">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<textarea class="form-control" name="ALAMAT" required="required" rows="5"></textarea>
							</div>
						</div>
						<div class="col-md-6">
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
						<div class="col-sm-12">
							<div class="form-group">
								<input type="submit" value="Simpan Data" class="btn btn-success">
							</div>
						</div>
					</form>
				<?php }else{ ?>
					<form method="POST" action="<?= $this->base_url('LoginControl/submitDataPedagang');?>">
						<div class="col-md-6">
							<div class="form-group">
								<label>KTP</label>
								<input type="text" name="NO_KTP" class="form-control" placeholder="KTP" required="required">
							</div>
							<div class="form-group">
								<label>Nama Toko</label>
								<input type="text" name="NAMA_TOKO" class="form-control" placeholder="NAMA TOKO" required="required">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<textarea class="form-control" name="ALAMAT" required="required" rows="5"></textarea>
							</div>
						</div>
						<div class="col-md-6">
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
						<div class="col-sm-12">
							<div class="form-group">
								<input type="submit" value="Simpan Data" class="btn btn-success">
							</div>
						</div>
					</form>
				<?php } ?>
			</div>
		</div>
	</section>
	<script type="text/javascript">
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
		});
	</script>