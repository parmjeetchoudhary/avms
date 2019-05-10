<?php
include('comman/header.php');
?>
<?php
include('comman/sidenav.php');
?>
<div class="col-md-10 col-sm-8 col-xs-12">
<?php 
require('comman/connect.php');
error_reporting(~E_NOTICE);
?> 
<?php
$a=1;
$dir="admin/bootadmin/uploads_img/";
$dir1="admin/bootadmin/upload_videoimg/";
$dir2="admin/bootadmin/uploads_video/";
$play=$_REQUEST['play'];
$query="select * from video where id='$play'";
$sql=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){?>

<div class="col-md-8 col-sm-8 col-xs-12" id="abcd" style="padding-top:10px;padding-bottom:10px;">
<div id="foot"><?php echo $row['video_name'];?></div>
<div id="foot"><?php echo $row['singer_name'];?></div>
<div id="foot"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_img'];?>" class="img-circle" height="30" width="30">
 </div>
 <h4 style="background:#a4291c;color:white;font-size:18px;border-radius:7px;text-align:center;"> Play Online</h4>
 <iframe src="<?php echo $dir2.$row['video_file'];?>" height="300px" width="500px">
 </iframe>
  <h4 style="background:#a4291c;color:white;font-size:18px;border-radius:7px;text-align:center;"> Download</h4>
  <a href="#" class="list-group-item"><span class="fas fa-music"></span> Download 320 kbps   <i class="fas fa-cloud-download-alt"></i></a>

<?php $a++;}?>
</div>
<div class="col-md-4 col-sm-4 col-xs-0">
&nbsp;
</div>
</div>
</div>
</div>
<?php
include('comman/footer.php');
?>