<?php
require('comman/connect.php');
?>
<?php
include("comman/bootheader.php");
$dir='uploads_audio/';
$dir1='uploads_img/';
$dir2='upload_audioimg/';
?>
<?php
$delid=$_REQUEST['del'];
if($delid!=''){
	$delete="delete from audio where id='$delid'";
    mysqli_query($conn,$delete) or die(mysqli_error());
	
}
?>

<br><br><br><br><br><br><br>
    <div class="container">

      
	<div class="row">
		<div class="col-md-12 col-sm-12 col-lg-12" >
			<center><h2 style="color:#e5e5e5;">Added Audios</h2></center>
			  <table class="table" >
	          <thead style="background:lightgreen;">
	            <tr>
	              <th>S.No</th>
	              <th>Genres</th>
	              <th>Album</th>
	              <th>Audio name</th>
	              <th>Audio file</th>
				  <th>Audio profile</th>
				  <th>singer name</th>
				  <th>Label name</th>
				  <th>label image</th>
				  <th>Action</th>
	            </tr>
	          </thead>
	          <tbody style="color:black;border:1px solid white;background:#c9e287;font-size:15px;">
	          <?php
          $a=1;
$sql="select * from audio";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
<tr>
<td><?php echo $a; ?>  </td>
<td> <?php echo $row['language']; ?> </td>
<td> <?php echo $row['album']; ?> </td>
<td> <?php echo $row['audio_name']; ?> </td>
<td> <?php echo $row['audio_file']?> </td>
<td> <img style="width:100px;height:100px;" src="<?php echo $dir2.$row['audio_img'];?>"> </td>
<td> <?php echo $row['singer_name']; ?> </td>
<td> <?php echo $row['label_name']; ?> </td>
<td> <img style="width:100px;height:100px;" src="<?php echo $dir1.$row['label_image'];?>"> </td>
<td><a  style="color:green;font-size:20px;" onclick='return confirm("you are sure to Edit?")'; href="edit.php?edit=<?php echo $row['id'];?>"><i class="fas fa-edit"></i></a>&nbsp;|&nbsp;
<a style="color:red;font-size:20px;" onclick='return confirm("you are sure to delete?")'; href="audio_table.php?del=<?php echo $row['id'];?>"><i class="fas fa-trash-alt"></i></a>
<?php $a++;} ?>

</tr>
	           
	          </tbody>
	         </table>
			 </div>
			 <div class="col-md-12">
&nbsp;
</div>
<div class="col-md-12">
&nbsp;
</div>
			 </div>
			 </div>


<?php
include('comman/bootfooter.php');
?>