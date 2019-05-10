<?php
include("comman/bootheader.php");
?>
<?php
require('comman/connect.php');
//print '<pre>';
error_reporting(~E_NOTICE);
echo $id1=$_REQUEST['chng'];
if(isset($_POST['submit'])){
		
$audio_file=$_FILES['afile']['name'];
$tmp_loc=$_FILES['afile']['tmp_name'];
$directory="uploads_audio/";
$update="update audio set audio_file='$audio_file' where id='$id1'";
 
mysqli_query($conn,$update) or die(mysqli_error());
move_uploaded_file($tmp_loc,$directory.$audio_file);

$img='<img src="images/loading-gif.svg" height=40>';
header('Refresh:3;audio_table.php');
}
?>
 <?php
 $dir="uploads_audio/";
 $id=$_REQUEST['chng'];
 $fech="select * from audio where id='$id'";
 $sql=mysqli_query($conn,$fech);
 $row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 ?>
 <br><br><br><br><br><br><br>
<div class="row" >
<center>
<h1 style="color:#e5e5e5;">Change Audio file here</h1>
<?php if(isset($update)){ echo '<h2>Loading.....</h2>'.$img;} ?>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
    
	 <div class="form-group">
      <label class="control-label col-sm-4">Audio name</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" value="<?php echo $row['audio_name'];?>" readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4">Audio file</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" value="<?php echo $dir.$row['audio_file'];?>" readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4">Audio file</label>
      <div class="col-sm-8">          
        <input type="file" class="form-control" name="afile" required>
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