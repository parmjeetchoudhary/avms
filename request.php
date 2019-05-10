<?php
include('comman/header.php');
?>
<?php
include('comman/sidenav.php');
?>
<?php
require('comman/connect.php');
if(isset($_POST['submit'])){
$email=mysqli_real_escape_string($conn,$_POST['email']);
$name=mysqli_real_escape_string($conn,$_POST['name']);
$rqst=mysqli_real_escape_string($conn,$_POST['request']);
 $insert="insert into request set email='$email',u_name='$name',request='$rqst'";
mysqli_query($conn,$insert) or die(mysqli_error());
}
?>

<div class="col-md-10 col-sm-6 col-xl-6">
<center>
<h4 class="head">Users Request/Response performa</h4>
<form action="#" method="post">
    <div class="form-group">
      <label class="control-label col-sm-1">Email/Phone number</label>
      <div class="col-sm-11">          
        <input type="name" class="form-control" name="email" placeholder="Enter Your Email" required>
      </div>
    </div><br><br><br>
	<div class="form-group">
      <label class="control-label col-sm-1">Name</label>
      <div class="col-sm-11">          
        <input type="name" class="form-control" name="name" placeholder="Enter Your Name" required>
      </div>
    </div><br><br>
    <div class="form-group">
      <label class="control-label col-sm-1">Request</label>
      <div class="col-sm-11">          
        <textarea rows="5" cols="50" class="form-control" name="request" placeholder="Request/Response massage here" ></textarea>
      </div>
    </div><br>
	 <div class="form-group">        
      <div class="col-sm-12">
        <button name="submit" class="btn btn-info">Submit</button>
      </div>
	  </div>
	  <?php
	  if(isset($insert)){
		  echo "Your request is succesfully recorded";
	  }
	  ?>
	</form>
</center>
</div>
<div class="col-md-12">
&nbsp;
</div>
<div class="col-md-12">
&nbsp;
</div>
<div class="col-md-12">
&nbsp;
</div>
<div class="col-md-12">
&nbsp;
</div>
<div class="col-md-12">
&nbsp;
</div>
<div class="col-md-12">
&nbsp;
</div>
<div class="col-md-12">
&nbsp;
</div>
<div class="col-md-12">
&nbsp;
</div>
<div class="col-md-12">
&nbsp;
</div>
<div class="col-md-12">
&nbsp;
</div>
</div>
</div>
<?php
include('comman/footer.php');
?>