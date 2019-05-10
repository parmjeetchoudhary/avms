<?php 
include('comman/header.php');
?>
<?php
//print '<pre>';
session_start();
require_once 'comman/connect.php';
if(isset($_SESSION['userSession'])!=""){
	header('location:index.php');
	exit;
}
if(isset($_POST['submit'])){
	$email=strip_tags($_POST['eid']);
	$pass=strip_tags($_POST['pass']);
	$email=mysqli_real_escape_string($conn,$email);
	$pass=mysqli_real_escape_string($conn,$pass);
 $query="select * from register where email='$email'";
$sql=mysqli_query($conn,$query);
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
print_r($row);
$count=mysqli_num_rows($sql);
if(password_verify($pass,$row['password'])&&$count==1){
	$_SESSION['userSession']=$row['id'];
	header('location:index.php');
}
else{
	$msg = "<div class='alert alert-danger'>
<span class='glyphicon glyphicon-info-sign'></span> &nbsp;
Invalid Username or Password !
</div>";
}
//$conn->close();
}
?>
<br><br><br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
<center>
<form  class="form-signin" method="post" >
	<div class="form-group">
	 <h2 class="form-signin-heading">Sign In</h2><hr>
	 <?php if(isset($msg)){
echo $msg;
}
?>

      <label for="email id">Email Id</label>
      <input type="text" class="form-control" id="abc"  placeholder="Enter Email" name="eid">
    </div>
	
	<div class="form-group">
      <label for="address">password</label>
      <input type="password" class="form-control" id="abc" placeholder="Enter password" name="pass">
    </div>
<input type="submit" name="submit" class="btn btn-primary" value="Sign In">


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