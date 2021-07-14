<?php

include 'head.php';
include 'db.php';

if(isset($_POST['body'])){
	
	
	
	$body 		= addslashes($_POST['body']);
	$username 	= $_POST['username'];
	
	$time = date("Y-m-d H:i:s");
	
	

$sql = "INSERT INTO posts (body, added_by, date_added, user_to, user_closed, deleted, likes)
VALUES ('$body','$username','$time', '$user_to', 'no', 'no','0')";

//$query = mysqli_query($this->con, "INSERT INTO posts (body, added_by, user_to, date_added, user_closed, deleted, likes) VALUES('$body', '$added_by', '$user_to', '$date_added', 'no', 'no', '0')");


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	
	
	
	
	
	
	
	exit;
}




?>

<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="post">
     <div class="form-group ">
      <label class="control-label " for="username">
       Username
      </label>

	  <select class="form-control" required="required" name="username">
	  <option selected disabled>Select a User</option>
	  <?php
	  
$sql = "SELECT username from users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  extract($row);
	  echo "<option value='$username'>$username</option>";
  }
}
	  
	  ?>
	  
	  
	  </select>
	  
	  
     </div>
     <div class="form-group ">
      <label class="control-label " for="body">
       Post Text
      </label>
      <textarea class="form-control" cols="40" id="body" required="required" name="body" rows="10"></textarea>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-success btn-sm " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
 </div>