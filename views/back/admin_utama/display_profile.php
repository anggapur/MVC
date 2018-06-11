<link rel="stylesheet" href="<?= $this->base_url('css/colorpicker.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/datepicker.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/uniform.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/select2.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/matrix-style.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/matrix-media.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/bootstrap-wysihtml5.css'); ?>" />
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">My Profil</a> <a href="#" class="current">Data Profil</a> </div>
  <h1>Data Profil</h1>
</div>
	<div class="container-fluid">
	  <hr>
	  <div class="row-fluid">
	    <div class="span12">
	    	 <?php
                if(isset($_SESSION['status']))
                {
                  echo "<div class='alert alert-".$_SESSION['color']."'>".$_SESSION['status']."</div>";
                  unset($_SESSION['status']);
                }
              ?>
	      <div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>Info Pribadi</h5>
	        </div>
	        <div class="widget-content nopadding">
	          <form action="#" method="get" class="form-horizontal">
	            <?php 
                    //Untuk Meloopin data yang diambil dari database
                    foreach($listUser as $key => $value){
                  ?>
	            <div class="control-group">
	              <label class="control-label">Username </label>
	              <div class="controls">
	                <input type="text" class="span11" placeholder="" value="<?= $value['USERNAME']; ?>" disabled=""/>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Password </label>
	              <div class="controls">
	                <input type="text" class="span11" disabled="" placeholder="" value="<?= $value['PASSWORD']; ?>" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Email </label>
	              <div class="controls">
	                <input type="text"  class="span11" placeholder="" value="<?= $value['EMAIL']; ?>" disabled=""/>
	              </div>
	            </div>
	            <?php } ?>
	            <div class="form-actions">
	              <a href="<?= $this->base_url('ControlAdminUtama/editProfile/'.$value['USER_ID']);?>" type="submit" class="btn btn-primary">Edit</a>
	              <a href="<?= $this->base_url('AdminUtama/dashboard'); ?>" type="submit" class="btn btn-danger">Kembali</a>
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