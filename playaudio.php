<?php
include('comman/header.php');
?>
<?php
include('comman/sidenav.php');
?>
<div class="col-md-10 col-sm-6 col-xl-6">
<?php 
require('comman/connect.php');
error_reporting(~E_NOTICE);
?> 
<?php
$a=1;
$dir="admin/bootadmin/uploads_img/";
$dir1="admin/bootadmin/upload_audioimg/";
$dir2="admin/bootadmin/uploads_audio/";
$play=$_REQUEST['play'];
$query="select * from audio where id='$play'";
$sql=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){?>
<div class="col-md-4 col-sm-12 col-xs-12" id="abcd" >
<center><img src="<?php echo $dir1.$row['audio_img'];?>" class="img-rounded" height="350" width="380" style="paddding-top:10px;"></center><br>
</div>
<div class="col-md-4 col-sm-12 col-xs-12" id="abcd" style="padding-bottom:102px;padding-top:20px;">
<div id="foot"><?php echo $row['audio_name'];?></div>
<div id="foot"><?php echo $row['singer_name'];?></div>
<div id="foot"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_image'];?>" class="img-circle" height="30" width="30">
 </div>
 <h4 style="background:#a4291c;color:white;font-size:18px;border-radius:7px;text-align:center;"> Play Online</h4>
 <audio controls>
 <source src="<?php echo $dir2.$row['audio_file'];?>">
 </audio>
  <h4 style="background:#a4291c;color:white;font-size:18px;border-radius:7px;text-align:center;"> Download</h4>
  <a href="download.php?filename=<?php echo $dir2.$row['audio_file'];?>" class="list-group-item"><span class="fas fa-music"></span> Download 320 kbps   <i class="fas fa-cloud-download-alt"></i></a>

<?php $a++;}?>
</div>
</div>
<div class="col-md-12 col-sm-12 " >
&nbsp;
</div>
<div class="col-md-12 col-sm-12">
&nbsp;
</div>
<div class="col-md-12 col-sm-12">
&nbsp;
</div>

</div>
</div>
<?php
include('comman/footer.php');
?>