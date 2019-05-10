<?php
include('comman/header.php');
?>
<?php
include('comman/sidenav.php');
?>
<div class="col-md-10 col-sm-8 col-xs-12 ">

<div class="container-fluid">
<div class="col-md-12 col-sm-12 col-xs-12">
 <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	   <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

   
    <div class="carousel-inner">

      <div class="item active">
        <img src="image/b.jpg" alt="Los Angeles" style="height:200px;width:100%">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="image/a.jpg" alt="Chicago" style="height:200px;width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="image/c.jpg" alt="New York" style="height:200px;width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>new york is best country ever</p>
        </div>
      </div>
  <div class="item">
        <img src="image/d.jpg" alt="New York" style="height:200px;width:100%;">
        <div class="carousel-caption">
          <h3>Transportation job fair</h3>
          <p>We love the Big this job fair </p>
        </div>
      </div>
    </div>
	</div>-->
	</div>
	</div>
	<div class="row">
	<div class="col-md-12 col-sm-12">
	<h4 class="head">Hollywood songs </h4>
<?php 
require('comman/connect.php');
?>
<?php 
$a=1;
$dir="admin/bootadmin/uploads_img/";
$dir1="admin/bootadmin/upload_audioimg/";
$select="select * from audio where language='english'";
$sql=mysqli_query($conn,$select);

while($row=mysqli_fetch_array($sql,MYSQLI_BOTH)){?>
<a href="playaudio.php?play=<?php echo $row['id'];?>"><div class="col-md-3 col-sm-12 col-xs-12" id="abcd">
<center><img src="<?php echo $dir1.$row['audio_img'];?>" class="img-rounded" height="200" width="280"></center><br>
 <div id="foot"> <?php echo $row['audio_name'];?></div>
  <div style="color:white;font-weight:bold;font-size:15px;;font-family:times new roman"> <?php echo $row['singer_name'];?></div>
<div style="color:white;font-weight:bold;font-size:15px;;font-family:times new roman"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_image'];?>" class="img-circle" height="30" width="30"></div>
</div></a>
<?php $a++;}?>
<div class="row">
<div class="col-md-12 col-sm-12">

<h4 class="head">Hollywood videos </h4>
<?php
require('comman/connect.php');
?>
<?php 
$a=1;
$dir="admin/bootadmin/uploads_img/";
$dir1="admin/bootadmin/upload_videoimg/";
$select="select * from video where language='english'";
$sql=mysqli_query($conn,$select);

while($row=mysqli_fetch_array($sql,MYSQLI_BOTH)){?>
<a href="playvideo.php?play=<?php echo $row['id'];?>"><div class="col-md-3 col-sm-12 col-xs-12" id="abcd">
<center><img src="<?php echo $dir1.$row['video_img'];?>" class="img-rounded" height="200" width="280"></center><br>
 <div id="foot"> <?php echo $row['video_name'];?></div>
  <div style="color:white;font-weight:bold;font-size:15px;;font-family:times new roman"> <?php echo $row['singer_name'];?></div>
<div style="color:white;font-weight:bold;font-size:15px;font-family:times new roman"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_img'];?>" class="img-circle" height="30" width="30"></div> 
</div></a>
<?php $a++;}?>
</div>

</div>
<div class="row">
<div class="col-md-12 col-sm-12">
<h4 class="head">Bollywood songs </h4>
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
  <div style="color:white;font-weight:bold;font-size:15px;;font-family:times new roman"> <?php echo $row['singer_name'];?></div>
<div style="color:white;font-weight:bold;font-size:15px;;font-family:times new roman"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_image'];?>" class="img-circle" height="30" width="30"></div> 
</div></a>
<?php $a++;}?>
</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12">

<h4 class="head">Bollywood videos </h4>
<?php 
require('comman/connect.php');
?>
<?php 
$a=1;
$dir="admin/bootadmin/uploads_img/";
$dir1="admin/bootadmin/upload_videoimg/";
$select="select * from video where language='hindi'";
$sql=mysqli_query($conn,$select);

while($row=mysqli_fetch_array($sql,MYSQLI_BOTH)){?>
<a href="playvideo.php?play=<?php echo $row['id'];?>"><div class="col-md-3 col-sm-12 col-xs-12" id="abcd">
<center><img src="<?php echo $dir1.$row['video_img'];?>" class="img-rounded" height="200" width="280"></center><br>
 <div id="foot"> <?php echo $row['video_name'];?></div>
  <div style="color:white;font-weight:bold;font-size:15px;;font-family:times new roman"> <?php echo $row['singer_name'];?></div>
<div style="color:white;font-weight:bold;font-size:15px;font-family:times new roman"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_img'];?>" class="img-circle" height="30" width="30"></div> 
</div></a>
<?php $a++;}?>
</div>
</div>

<div class="row">
<div class="col-md-12 col-sm-12">
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
  <div style="color:white;font-weight:bold;font-size:15px;;font-family:times new roman"> <?php echo $row['singer_name'];?></div>
<div style="color:white;font-weight:bold;font-size:15px;;font-family:times new roman"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_image'];?>" class="img-circle" height="30" width="30">
  </div>
</div></a>
<?php $a++;}?>
</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12">

<h4 class="head">Pollywood videos </h4>
<?php 
require('comman/connect.php');
?>
<?php 
$a=1;
$dir="admin/bootadmin/uploads_img/";
$dir1="admin/bootadmin/upload_videoimg/";
$select="select * from video where language='punjabi'";
$sql=mysqli_query($conn,$select);

while($row=mysqli_fetch_array($sql,MYSQLI_BOTH)){?>
<a href="playvideo.php?play=<?php echo $row['id'];?>"><div class="col-md-3 col-sm-12 col-xs-12" id="abcd">
<center><img src="<?php echo $dir1.$row['video_img'];?>" class="img-roundeds" height="200" width="280"></center><br>
 <div id="foot"> <?php echo $row['video_name'];?></div>
  <div style="color:white;font-weight:bold;font-size:15px;;font-family:times new roman"> <?php echo $row['singer_name'];?></div>
<div style="color:white;font-weight:bold;font-size:15px;font-family:times new roman"> <?php echo $row['label_name'];?>  <img src="<?php echo $dir.$row['label_img'];?>" class="img-circle" height="30" width="30"></div> 
</div></a>
<?php $a++;}?>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

<?php
include('comman/footer.php');
?>