<?php
include('comman/header.php');
?>
<?php
include('comman/sidenav.php');
?>
<div class="col-md-12 col-sm-6 col-xl-6">
<div class="col-md-8 col-sm-8>
<?php 
require('comman/connect.php');
error_reporting(~E_NOTICE);
?> 
<?php
$a=1;
$dir="admin/bootadmin/uploads_img/";
$dir1="admin/bootadmin/upload_audioimg/";
$dir2="admin/bootadmin/uploads_audio/";
$search=$_REQUEST['sc'];
	$search="select * from audio where audio_name like '%search%'";
	$sql=mysqli_query($conn,$search);

while($row=mysqli_fetch_array($sql,MYSQLI_BOTH)){?>
<a href="playaudio.php?play=<?php echo $row['id'];?>"><div class="col-md-3 col-sm-6" style="border-right:1px solid gray;background:white;">
<center><img src="<?php echo $dir1.$row['audio_img'];?>" class="img-rounded" height="200" width="280"></center><br>
 <div id="foot"> <?php echo $row['audio_name'];?></div>
  <div style="color:green;font-weight:bold;font-size:15px;;font-family:times new roman"> <?php echo $row['singer_name'];?></div>
<div style="color:green;font-weight:bold;font-size:15px;font-family:times new roman"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_image'];?>" class="img-circle" height="30" width="30"></div> 
</div></a>
<?php $a++;}?>
</div>

<div class="col-md-4 col-sm-4">
&nbsp;
</div>
</div>
</div>
<?php
include('comman/footer.php');
?>
