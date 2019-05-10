<?php
include("comman/bootheader.php");
?>

<br><br><br><br><br><br>
<center>
<h1 style="color:#e5e5e5;">Account setting</h1>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Old Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="opwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">New Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="npwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success btn-left">Submit</button>&nbsp;&nbsp;
		 <button type="back" class="btn btn-danger btn-right">Back</button>
      </div>
	  </div>
	  
  </form>
</center>

<?php
include('comman/bootfooter.php');
?>