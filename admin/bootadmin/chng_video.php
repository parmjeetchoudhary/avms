<?php
include("comman/bootheader.php");
?>
<?php
require('comman/connect.php');
//print '<pre>';
error_reporting(~E_NOTICE);
echo $id1=$_REQUEST['chng'];
if(isset($_POST['submit'])){
		
$video_file=$_FILES['vfile']['name'];
$tmp_loc=$_FILES['vfile']['tmp_name'];
$directory="uploads_video/";
$update="update video set video_file='$video_file' where id='$id1'";
 
mysqli_query($conn,$update) or die(mysqli_error());
move_uploaded_file($tmp_loc,$directory.$video_file);

$img='<img src="images/loading-gif.svg" height=40>';
header('Refresh:3;video_tables.php');
}
?>
 <?php
 $dir="uploads_video/";
 $id=$_REQUEST['chng'];
 $fech="select * from video where id='$id'";
 $sql=mysqli_query($conn,$fech);
 $row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 ?>
 <br><br><br><br><br><br><br>
<div class="row" >
<center>
<h1 style="color:#e5e5e5;">Change Video file here</h1>
<?php if(isset($update)){ echo '<h2>Loading.....</h2>'.$img;} ?>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
    
	 <div class="form-group">
      <label class="control-label col-sm-4">video name</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" value="<?php echo $row['video_name'];?>" readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4">Video file</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" value="<?php echo $dir.$row['video_file'];?>" readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4">Video file</label>
      <div class="col-sm-8">          
        <input type="file" class="form-control" name="vfile" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button name="submit" class="btn btn-success btn-left">Update</button>&nbsp;&nbsp;
		 <button name="back" class="btn btn-danger btn-right">Back</button>
      </div>
	  </div>
	  
  </form>
</center>
</div>
<?php
include('comman/bootfooter.php');
?>