
<?php 
include('comman/header.php');
?>
<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
header("Location:singin.php");
}
require_once 'comman/connect.php';
if(isset($_POST['submit'])) {
$uname = strip_tags($_POST['username']);
$pno = strip_tags($_POST['pno']);
$email = strip_tags($_POST['email']);
$upass = strip_tags($_POST['password']);
$uname = mysqli_real_escape_string($conn,$uname);
$pno = mysqli_real_escape_string($conn,$pno);
$email = mysqli_real_escape_string($conn,$email);
$upass = mysqli_real_escape_string($conn,$upass);
$pass=password_hash($upass,PASSWORD_DEFAULT);
$query="select * from register where email='$email'";
$check_email=mysqli_query($conn,$query);
$count=mysqli_num_rows($check_email);
if($count==0){
 $insert="insert into register set uname='$uname',phone='$pno',email='$email',password='$pass'";
if(mysqli_query($conn,$insert)){
$msg = "<div class='alert alert-success'>
<span class='glyphicon glyphicon-info-sign'></span>
&nbsp; successfully registered !
</div>";
}
else{
	$msg = "<div class='alert alert-danger'>
<span class='glyphicon glyphicon-info-sign'></span>
&nbsp; error while registering !
</div>";	
}
}
else{
	$msg="<div class='alert alert-danger'><span class='glyphicon glyphicon-info-sign'></span> &nbsp;
sorry email already taken !
</div>";
}
//$conn->close();
}
?>
<br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-sm-12">
<center>
<form class="form-signin" method="post">
 <h2 class="form-signin-heading">Sign Up</h2><hr>

 <?php
if (isset($msg)){
echo $msg;
}
?>
    <div class="form-group">
      <label for="name">User Name</label>
      <input type="text" class="form-control" id="abc" placeholder="Enter User Name" name="username">
    </div>
	  <div class="form-group">
  <label for="pno">Phone number</label>
  <input type="text" class="form-control" id="abc" placeholder="Enter phone number" name="pno">
</div>
	<div class="form-group">
      <label for="email id">Email Id</label>
      <input type="text" class="form-control" id="abc"  placeholder="Enter Email" name="email">
    </div>
	<div class="form-group">
      <label for="address">password</label>
      <input type="password" class="form-control" id="abc" placeholder="Enter Password" name="password">
    </div>
<button  name="submit" class="btn btn-primary">Create account&nbsp;&nbsp;<i class="fas fa-user-alt"></i></button>
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
</div>
</div>
<?php
include('comman/footer.php');
?>