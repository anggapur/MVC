<?php use app\providers\{Auth,Url,Alert}; ?>
	<section class="formLoginRegister">
		<div class="container">
			<div class="row">
				<div class="alert alert-warning">
					Data Anda Sedang Diverifikasi
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