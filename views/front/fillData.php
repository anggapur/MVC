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
									<option value="bali">Bali</option>									
								</select>
							</div>
							<div class="form-group">
								<label>Kota</label>
								<select name="KOTA" class="form-control" id="KOTA" required="required">
									<option value="denpasar">Denpasar</option>
								</select>
							</div>
							<div class="form-group">
								<label>Kecamatan</label>
								<select name="KECAMATAN" class="form-control" id="KECAMATAN" required="required">
									<option value="denpasar utara">Denpasar Utara</option>
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

				<?php } ?>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url : 'http://api.ruangpanji.com/provinsi.php',
				dataType : 'json',
				type : 'GET',
				success : function(data){
					console.log(data);
				},
			});
		});
	</script>