<?php
include("comman/bootheader.php");
?>
<?php
error_reporting(~E_NOTICE);
//print '<pre>';
include("comman/connect.php");
if(isset($_POST['submit'])){
$id1=$_REQUEST['edit'];
$lang=mysqli_real_escape_string($conn,$_POST['lang']);
$album=mysqli_real_escape_string($conn,$_POST['album']);
$video_name=mysqli_real_escape_string($conn,$_POST['vname']);
$singer_name=mysqli_real_escape_string($conn,$_POST['sname']);
$label_name=mysqli_real_escape_string($conn,$_POST['label']);
$update= "update video set language='$lang',album='$album',video_name='$video_name',singer_name='$singer_name',label_name='$label_name' where id='$id1'";

mysqli_query($conn,$update) or die(mysqli_error());

$img='<img src="images/loading-gif.svg" height=40>';
header('Refresh:3;video_tables.php');
}

?>
<?php 
if(isset($_POST['back'])){
header('location:video_tables.php');	
}
?>
 <?php
 $dir="uploads_img/";
 $dir1="uploads_video/";
 $dir2="upload_videoimg/";
 $id=$_REQUEST['edit'];
 $fech="select * from video where id='$id'";
 $sql=mysqli_query($conn,$fech);
 $row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 ?>
<br><br><br><br><br><br><br>
<div class="row" >
<center>
<h1 style="color:#e5e5e5;">Update added video</h1>
<?php echo $update;?>
<?php if(isset($update)){ echo '<h2>Loading.....</h2>'.$img;} ?>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-4" for="1anguage">Genres</label>
	  <div class="col-sm-8">
      <select  class="form-control" name="lang">
		<option value=""><?php echo $row['language'];?></option>
		<option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Punjabi">Punjabi</option>
      </select>
	  </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="album" >Album</label>
	  <div class="col-sm-8">
       <select class="form-control" name="album">
		<option value=""><?php echo $row['album'];?></option>
		<option value="Across the sky">Across the sky</option>
        <option value="Higher">Higher</option>
		<option value="parmanu">parmanu</option>
		<option value="Bhaggi 2">Bhaggi 2</option>
        <option value="Take a stand">Take a stand </option>
		 <option value="Con.Fi.Dential">Con.Fi.Dential</option>
		 <option value="Miti da bawa">Miti da bawa</option>
		 <option value="Ik tare wala">Ik tare wala</option>
		 <option value="new punjabi">new punjabi</option>
		 <option value="new hindi">new hindi</option>
		 <option value="new english">new English</option>
      </select>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4">video name</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" name="vname" value="<?php echo $row['video_name'];?>" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4">video file</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" name="vfile" value="<?php echo $row['video_file'];?>"required><br>
		<a class="cmna" href="chng_video.php?chng=<?php echo $row['id'];?>">Change Video file</a>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4">Video Image</label>
      <img src="<?php echo $dir2.$row['video_img'];?>" height="180" width="180">&nbsp;&nbsp;&nbsp;
	  <a class="cmna" href="img_vchng.php?vchng=<?php echo $row['id'];?>">change image</a>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4" >singer</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" name="sname" value="<?php echo $row['singer_name'];?>" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4">Label Name</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" name="label" value="<?php echo $row['label_name'];?>" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4">Label Image</label>
      <img src="<?php echo $dir.$row['label_img'];?>" height="180" width="180">&nbsp;&nbsp;&nbsp;
	  <a class="cmna" href="vchng_img.php?edit=<?php echo $row['id'];?>">change image</a>
	  
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button name="submit" class="btn btn-success btn-left">Update</button>&nbsp;&nbsp;
		 <button name="back" class="btn btn-danger btn-right">Back</button>
		 <br><br><br><br>
      </div>
	  </div>
	  
  </form>
</center>
</div>
<?php
include('comman/bootfooter.php');
?>