<?php
include('comman/header.php');
?>
<?php
include('comman/sidenav.php');
?>

<div class="col-md-10 col-sm-6 ">
<h4 class="head">Hollywood song </h4>
<?php 
require('comman/connect.php');
?> 
<?php 
$a=1;
$dir="admin/bootadmin/uploads_img/";
$dir1="admin/bootadmin/upload_audioimg/";
$select="select * from audio where language='english'";
$sql=mysqli_query($conn,$select);

while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){?>
<a href="playaudio.php?play=<?php echo $row['id'];?>"><div class="col-md-3 col-sm-12 col-xs-12" id="abcd">
<center><img src="<?php echo $dir1.$row['audio_img'];?>" class="img-rounded" height="200" width="280"></center><br>
 <div id="foot"> <?php echo $row['audio_name'];?></div>
  <div id="foot"> <?php echo $row['singer_name'];?></div>
<div id="foot"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_image'];?>" class="img-circle" height="30" width="30">
 </div>
</div></a>
<?php $a++;}?>
<div class="row">
<div class="col-md-12">
<h4 class="head">Bollywood song </h4>
<?php 
require('comman/connect.php');
?>
<?php 
$a=1;
$dir="admin/bootadmin/uploads_img/";
$dir1="admin/bootadmin/upload_audioimg/";
$select="select * from audio where language='hindi'";
$sql=mysqli_query($conn,$select);

while($row=mysqli_fetch_array($sql,MYSQLI_BOTH)){?>
<a href="playaudio.php?play=<?php echo $row['id'];?>"><div class="col-md-3 col-sm-12 col-xs-12" id="abcd">
<center><img src="<?php echo $dir1.$row['audio_img'];?>" class="img-rounded" height="200" width="280"></center><br>
 <div id="foot"> <?php echo $row['audio_name'];?></div>
  <div id="foot"> <?php echo $row['singer_name'];?></div>
<div id="foot"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_image'];?>" class="img-circle" height="30" width="30"></div> 
</div></a>
<?php $a++;}?>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h4 class="head">Pollywood song </h4>
<?php 
require('comman/connect.php');
?>
<?php 
$a=1;
$dir="admin/bootadmin/uploads_img/";
$dir1="admin/bootadmin/upload_audioimg/";
$select="select * from audio where language='punjabi'";
$sql=mysqli_query($conn,$select);

while($row=mysqli_fetch_array($sql,MYSQLI_BOTH)){?>
<a href="playaudio.php?play=<?php echo $row['id'];?>"><div class="col-md-3 col-sm-12 col-xs-12" id="abcd">
<center><img src="<?php echo $dir1.$row['audio_img'];?>" class="img-rounded" height="200" width="280"></center><br>
 <div id="foot"> <?php echo $row['audio_name'];?></div>
  <div id="foot"> <?php echo $row['singer_name'];?></div>
<div id="foot"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_image'];?>" class="img-circle" height="30" width="30">
  </div>
</div></a>
<?php $a++;}?>
</div>
</div>
</div>
</div>
</div>

<?php
include('comman/footer.php');
?>