<?php
include("comman/bootheader.php");
?>
<?php
require('comman/connect.php');
//print '<pre>';
error_reporting(~E_NOTICE);
 $id1=$_REQUEST['chngimg'];
if(isset($_POST['submit'])){
		
$audio_img=$_FILES['aimg']['name'];
$aimg_tmp_loc=$_FILES['aimg']['tmp_name'];
$directory2="upload_audioimg/";
$update="update audio set audio_img='$audio_img' where id='$id1'";
 
mysqli_query($conn,$update) or die(mysqli_error());
move_uploaded_file($aimg_tmp_loc,$directory2.$audio_img);

$img='<img src="images/loading-gif.svg" height=40>';
header('Refresh:3;audio_table.php');
}
?>
<?php 
if(isset($_POST['back'])){
header('location:edit.php');
}
?>
 <?php
 $dir="upload_audioimg/";
 $id=$_REQUEST['chngimg'];
 $fech="select * from audio where id='$id'";
 $sql=mysqli_query($conn,$fech);
 $row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 ?>
 <br><br><br><br><br><br><br>
<div class="row" >
<center>
<h1 style="color:#e5e5e5;">Change image here</h1>
<?php if(isset($update)){ echo '<h2>Loading.....</h2>'.$img;} ?>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
    
	 <div class="form-group">
      <label class="control-label col-sm-4">Audio name</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" name="aname" value="<?php echo $row['audio_name'];?>" readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4">audio Image</label>
      <img src="<?php echo $dir.$row['audio_img'];?>" height="180" width="180">
	  
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4">audio Image</label>
      <div class="col-sm-8">          
        <input type="file" class="form-control" name="aimg" required>
      </div><br>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button name="submit" class="btn btn-success btn-left">Update</button>&nbsp;&nbsp;
		 <button class="btn btn-danger btn-right">Back</button>
      </div>
	  </div>
	  
  </form>
</center>
</div>
<?php
include('comman/bootfooter.php');
?>