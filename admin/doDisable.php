<?php
//Abdul added logic
//Roshan provided sql
include 'head.php';
include 'db.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	
	$sql = "UPDATE users SET disabled='1' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "<br/><h1 class='text-danger'>User Disabled.";
} else {
  echo "Error updating record: " . $conn->error;
}
	
	
	
}