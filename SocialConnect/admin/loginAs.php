<?php
session_start();

include 'db.php';

if(isset($_GET['user'])){
$username = $_GET['user'];
$_SESSION['username'] = $username; // Storing username into session variable
header("Location: ../index.php"); 
}

