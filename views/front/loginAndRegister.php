<?php use app\providers\{Auth,Url,Alert}; ?>
	<section class="formLoginRegister">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php
						Alert::getAlert('login');
					?>
					<form method="POST" action="<?= $this->base_url('LoginControl/login')?>">
						<h4 class="title">Login</h4>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required="required" >
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required="required" min="6">
						</div>
						<div class="form-group">
							<a href="" class="floatLeft">Biarkan saya tetap masuk</a>
							<a href="" class="floatRight">Lupa Password</a>
						</div>
						<div class="form-group">
							<button class="btn btn-login">Masuk Ke Jubel Tani</button>
						</div>
					</form>
				</div>

				<div class="col-md-4 col-md-push-2">
					<?php
						Alert::getAlert('register');
					?>
					<form method="POST" action="<?= $this->base_url('LoginControl/register')?>">
						<h4 class="title">Register</h4>
						<div class="form-group">
							<label>Daftar Sebagai</label>
							<select name="STATE" class="form-control" required>
								<option value="petani">Petani</option>
								<option value="pedagang">Pedagang</option>
							</select>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="USERNAME" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="EMAIL" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" name="NAMA" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nomor Telpon</label>
							<div class="input-group">
								<div class="input-group-addon">+62</div>
								<input type="text" name="PHONE" class="form-control" id="exampleInputAmount" required>							
							</div>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div class="clearboth">
							<div class="radio">
								<label>
									<input type="radio" name="JENIS_KELAMIN" id="optionsRadios1" value="L" checked>
								Laki - Laki
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="JENIS_KELAMIN" id="optionsRadios2" value="P">
								Perempuan
								</label>
							</div>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="PASSWORD" class="form-control" id="pass" required>
						</div>
						<div class="form-group">
							<label>Konfirmasi Password</label>
							<input type="password" name="CONF_PASSWORD" class="form-control" id="pass_conf" required>
							<span id="pass_conf_alert" style="color:red;display: none;">Konfirmasi Password dan Password Tidak Sama!</span>
						</div>		
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" name="TANGGAL_LAHIR" class="form-control" required>
							<div class="clearboth"></div>
						</div>		
						<div class="form-group">
							<button class="btn btn-login" id="registrasi" disabled="disabled">Daftar Ke Jubel Tani</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		$(document).ready(function(){		
			// cek kesamaan password		
			$('#pass , #pass_conf').change(function(){
				pass = $('#pass').val();
				pass_conf = $('#pass_conf').val();
				if(pass == pass_conf)
				{
					$('#registrasi').removeAttr('disabled');
					$('#pass_conf_alert').hide();
				}
				else
				{
					$('#pass_conf_alert').show();
					$('#registrasi').attr('disabled','disabled');
				}
			});
		});
	</script>