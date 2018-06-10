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
	          <form action="<?= $this->base_url('ControlAdminUtama/updateProfile/'.$ambilData['USER_ID']);?>" method="POST" class="form-horizontal">
	            <div class="control-group">
	              <label class="control-label">Username </label>
	              <div class="controls">
	                <input type="text" name="USERNAME" class="span11" placeholder="" value="<?= $ambilData['USERNAME'];?>"/>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Password </label>
	              <div class="controls">
	                <input type="password" name="PASSWORD" class="span11" placeholder="" value="<?= $ambilData['PASSWORD'];?>" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Email </label>
	              <div class="controls">
	                <input type="text" name="EMAIL" class="span11" placeholder="" value="<?= $ambilData['EMAIL'];?>"/>
	              </div>
	            </div>
	            <div class="form-actions">
	              <input type="submit" name="submit" class="btn btn-success" value="Simpan User">
	            </div>
	          </form>
	        </div>
	    </div>
	</div>
</div>
</div>
</div>