<?php
include("comman/bootheader.php");
?>
<?php
require('comman/connect.php');
//print '<pre>';
if(isset($_POST['submit'])){
$lang=$_POST['lang'];
$album=$_POST['album'];
$name=$_POST['vname'];
$video_file=$_FILES['vfile']['name'];
$tmp_loc=$_FILES['vfile']['tmp_name'];
$directory="uploads_video/";
$video_img=$_FILES['vimg']['name'];
$img1_tmp_loc=$_FILES['vimg']['tmp_name'];
$directory2="upload_videoimg/";
$singer=$_POST['sname'];
$lab=$_POST['label'];
$label_img=$_FILES['lfile']['name'];
$img_tmp_loc=$_FILES['lfile']['tmp_name'];
$directory1="uploads_img/";
$disc=$_POST['disc'];
echo  $insert="INSERT INTO video set language='$lang',album='$album',video_name='$name',video_file='$video_file',video_img='$video_img',
singer_name='$singer',label_name='$lab',label_img='$label_img',description='$disc'";
mysqli_query($conn,$insert) or die(mysqli_error());
move_uploaded_file($tmp_loc,$directory.$video_file);
move_uploaded_file($img1_tmp_loc,$directory2.$video_img);
move_uploaded_file($img_tmp_loc,$directory1.$label_img);

$img='<img src="images/loading-gif.svg" height=40>';
header('Refresh:3;video_tables.php');
}
?>
<br><br><br><br><br><br><br>
<div class="row" >
<center>
<h1 style="color:#e5e5e5;">Add video</h1>
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
      <label class="control-label col-sm-4" for="album" >Album</label>
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
      <label class="control-label col-sm-4">video name</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" name="vname" placeholder="Enter video name" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4">video file</label>
      <div class="col-sm-8">          
        <input type="file" class="form-control" name="vfile" accept="video/*" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4">Video Image</label>
      <div class="col-sm-8">          
        <input type="file" class="form-control" name="vimg" accept="image/*" required>
      </div>
	  
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-4" >Singer</label>
      <div class="col-sm-8">          
        <input type="name" class="form-control" name="sname" placeholder="Enter video name" required>
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
		 <br><br><br><br>
      </div>
	  </div>
	  
  </form>
</center>
</div>
<?php
include('comman/bootfooter.php');
?>