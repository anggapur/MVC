<link rel="stylesheet" href="<?= $this->base_url('css/colorpicker.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/datepicker.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/uniform.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/select2.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/matrix-style.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/matrix-media.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/bootstrap-wysihtml5.css'); ?>" />
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">My Profile</a> <a href="#" class="current">Data Profil</a> <a href="#" class="current">Edit Profil</a> </div>
  <h1>Data Profil</h1>
</div>
	<div class="container-fluid">
	  <hr>
	  <div class="row-fluid">
	    <div class="span12">
	      <div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>Edit Profil</h5>
	        </div>
	        <div class="widget-content nopadding">
	          <form action="#" method="get" class="form-horizontal">
	            <div class="control-group">
	              <label class="control-label">Foto </label>
	              <div class="controls">
	                <img src="img/logo.png" alt="Logo">
	           		<br><br>
	                <input type="file" class="help-block" value="Ubah Foto">
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Nama Depan </label>
	              <div class="controls">
	                <input type="text" class="span11" placeholder="Nama Depan" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Nama Belakang </label>
	              <div class="controls">
	                <input type="password"  class="span11" placeholder="Nama Belakang"/>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Usia </label>
	              <div class="controls">
	                <input type="password"  class="span11" placeholder="Usia"  />
	              </div>
	            </div>
	            <div class="control-group">
              <label class="control-label">Waktu Lahir (mm-dd-yyyy)</label>
              <div class="controls">
                <div  data-date="12/02/2012" class="input-append date datepicker">
                  <input type="text" value="12/02/2012"  data-date-format="mm/dd/yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
            </div>
	            <div class="control-group">
	              <label class="control-label">Kota Asal </label>
	              <div class="controls">
	                <input type="text"  class="span11" placeholder="Kota Asal"  />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">No. Telp </label>
	              <div class="controls">
	                <input type="text" class="span11" placeholder="No Telepon" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Agama </label>
	              <div class="controls">
	                <input type="text" class="span11" 
	                placeholder="Agama" />
	            </div>
	            <div class="control-group">
	              <label class="control-label">Alamat </label>
	              <div class="controls">
	                <textarea class="span11" placeholder="Alamat"></textarea>
	              </div>
	            </div>
	            <div id="form-wizard-1" class="step">
	            <div class="control-group">
                  <label class="control-label">Username</label>
                  <div class="controls">
                    <input id="username" type="text" name="username" class="span11" placeholder="Username"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Password</label>
                  <div class="controls">
                    <input id="password" type="password" name="password" class="span11" placeholder="Password"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Confirm Password</label>
                  <div class="controls">
                    <input id="password2" type="password" name="password2" class="span11" placeholder="Confirm Password"/>
                  </div>
                </div>
              </div>
	            <div class="form-actions">
	              <a href="display_profile.php" type="submit" class="btn btn-success">Save</a>
	            </div>
	          </form>
	        </div>
	    </div>
	</div>
</div>
</div>
</div>

<script src="<?= $this->base_url('js/bootstrap-colorpicker.js');?>"></script> 
<script src="<?= $this->base_url('js/bootstrap-datepicker.js');?>"></script> 
<script src="<?= $this->base_url('js/jquery.toggle.buttons.js');?>"></script> 
<script src="<?= $this->base_url('js/masked.js');?>"></script> 
<script src="<?= $this->base_url('js/matrix.form_common.js');?>"></script> 
<script src="<?= $this->base_url('js/wysihtml5-0.3.0.js');?>"></script> 
<script src="<?= $this->base_url('js/bootstrap-wysihtml5.js');?>"></script>  