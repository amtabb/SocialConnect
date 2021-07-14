<?php
include 'config/config.php';
$id = $_GET['id'];
//adding comments to users posts
$user = addslashes($_POST['user']);
$text = addslashes($_POST['text']);
$url = $_POST['url'];

//Roshan added
$sql = "INSERT INTO comments (user, post, text) VALUES ('$user', '$id', '$text')";


if ($con->query($sql) === TRUE) 
{
  echo "New record created successfully";
  header("location:index.php");
} else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}