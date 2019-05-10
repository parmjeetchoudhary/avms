<?php
include("comman/bootheader.php");
?>
<?php
require('comman/connect.php');
?>
<br><br><br><br><br><br><br>
    <div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-lg-12" >
			<center><h2 style="color:#e5e5e5;">User request</h2></center>
			 <table class="table" >
	          <thead style="background:lightgreen;">
			  <tr>
			  <th>s.no</th>
			  <th>Email</th>
			   <th>Name</th>
			   <th>Request</th>
			  </thead>
			  </tr>
			  <tbody style="color:black;border:1px solid white;background:#c9e287;font-size:15px;">
			  <?php
          $a=1;
$sql="select * from request";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
			  <tr>
			  <td><?php echo $a;?></td>
			  <td><?php echo $row['email'];?></td>
			  <td><?php echo $row['u_name'];?></td>
			  <td><?php echo $row['request'];?></td>
			   </tr>
			   <?php $a++;} ?>
			   </tbody>
			  </table>
			</div>
			</div>
			</div>
<?php
include('comman/bootfooter.php');
?>