<?php
include("comman/bootheader.php");
?>
<br><br><br><br><br><br><br><br><br>
<?php
session_start();
$_SESSION['userSession'];
if(!isset($_SESSION['userSession'])){
	header('location:signin.php');
}
?>
<?php
require('comman/connect.php');
?>
<?php
$query="select * from register";
$sql=mysqli_query($conn,$query);
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
?>
<div class="container">
<center><h3 class="clr">Welcome In admin panel&nbsp;|<b class="clk">|&nbsp;<?php echo $row['uname'];?></b></h3><br>
 <img src="images/s.jpg" class="img-circle img-right" width="400" height="350"><br><br> 
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a style="display:inline-block;height:80x;width:100px;background:blue;color:white;text-decoration:none;"
		href="logout.php?logout">Logout</a>&nbsp;&nbsp;
      </div>
	  </div>
</center>
</div>
<?php
include('comman/bootfooter.php');
?>