<?php
include("comman/bootheader.php");
?>
<?php
require('comman/connect.php');
//print '<pre>';
if(isset($_POST['submit'])){
$lang=mysqli_real_escape_string($conn,$_POST['lang']);
$album=mysqli_real_escape_string($conn,$_POST['album']);
$name=mysqli_real_escape_string($conn,$_POST['aname']);
$audio_file=$_FILES['afile']['name'];
$tmp_loc=$_FILES['afile']['tmp_name'];
$directory="uploads_audio/";
$audio_img=$_FILES['aimg']['name'];
$aimg_tmp_loc=$_FILES['aimg']['tmp_name'];
$directory2="upload_audioimg/";
$singer=mysqli_real_escape_string($conn,$_POST['sname']);
$lab=mysqli_real_escape_string($conn,$_POST['label']);
$label_img=$_FILES['lfile']['name'];
$img_tmp_loc=$_FILES['lfile']['tmp_name'];
$directory1="uploads_img/";
$disc=mysqli_real_escape_string($conn,$_POST['disc']);
 $insert="INSERT INTO audio set language='$lang',album='$album',audio_name='$name',audio_file='$audio_file',audio_img='$audio_img',singer_name='$singer',label_name='$lab',label_image='$label_img',description='$disc'";

mysqli_query($conn,$insert) or die(mysqli_error());
move_uploaded_file($tmp_loc,$directory.$audio_file);
move_uploaded_file($aimg_tmp_loc,$directory2.$audio_img);
move_uploaded_file($img_tmp_loc,$directory1.$label_img);

$img='<img src="images/loading-gif.svg" height=40>';
header('Refresh:3;audio_table.php');
}
?>
<br><br><br><br><br><br><br>
<div class="row" >
<center>
<h1 style="color:#e5e5e5;">Add Audio</h1>
<?php if(isset($insert)){ echo '<h2>Loading.....</h2>'.$img;} ?>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-4" for="1anguage">Genres</label>
	  <div class="col-sm-8">
      <select  class="form-control" name="lang" required>
		<option value="">Choose language</option>
		<option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Punjabi">Punjabi</option>
      </select>
	  </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="albumb" >Album</label>
	  <div class="col-sm-8">
       <select class="form-control" name="album" required>
		<option value="">Choose Album</option>
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
      <label class="control-label col-sm-4">Audio name</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" name="aname" placeholder="Enter song name" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4">Audio file</label>
      <div class="col-sm-8">          
        <input type="file" class="form-control" name="afile" accept="audio/*" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4">Audio image</label>
      <div class="col-sm-8">          
        <input type="file" class="form-control" name="aimg" accept="image/*" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4" >Singer</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" name="sname" placeholder="Enter Song name" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4">Label Name</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" name="label" placeholder="Enter label name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4">Label Image</label>
      <div class="col-sm-8">          
        <input type="file" class="form-control" name="lfile" accept="image/*" required>
      </div>
	  
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4">Discription</label>
      <div class="col-sm-8">          
        <textarea rows="5" cols="50" class="form-control" name="disc" placeholder="Enter password" ></textarea>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button name="submit" class="btn btn-success btn-left">Add</button>&nbsp;&nbsp;
		 <button name="back" class="btn btn-danger btn-right">Back</button>
      </div>
	  </div>
	  <div class="col-sm-12 col-md-12">
	  &nbsp;
	  </div>
	  <div class="col-sm-12 col-md-12">
	  &nbsp;
	  </div>
	  <div class="col-sm-12 col-md-12">
	  &nbsp;
	  </div>
	  
	  
  </form>
</center>
</div>
<?php
include('comman/bootfooter.php');
?>