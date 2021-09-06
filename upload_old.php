<?php 

//Garvita created and worked
//Abdul added code
//Roshan provided sql

include("includes/header.php");

$profile_id = $user['username'];

if(isset($_FILES['image']['name'])){	


$tempName = $_FILES['image']['tmp_name'];

$userImagePath = "assets/profile_pics/$profile_id.jpg";

if(copy($tempName,$userImagePath)){



$sql = "UPDATE users SET profile_pic='$userImagePath' WHERE username='$profile_id'";

if ($con->query($sql) === TRUE) {
  echo "<br/>
  <center>
  <img src='$userImagePath'  class='img-thumbnail' style='height:500px;'>
  <h2 class='text-success'>Profile Pic Updated</h2>
  ";
} else {
  echo "Error updating record: " . $conn->error;
}




}




}else{ ?>
<center>
<br>
<br>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image" accept="image/*" class="form-control" required />
<br/>
<input type="submit" class="btn btn-info btn-block">
</form>
	
<?php } ?>