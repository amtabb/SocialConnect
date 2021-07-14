<?php

error_reporting(0);
session_start();

if(!$_SESSION["admin"]){
	
	header("location:login.php");
	?>
	<script>
	window.location = "login.php"
	</script>
	<?php
	exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$db = "testsocial1";


// Create connection
$conn = new mysqli($servername, $username, $password,  $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
