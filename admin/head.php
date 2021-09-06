<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <style>
  body{
  color: blue;
  }
  </style>
 </head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style ="background-color: #0a3d62;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style = "border: 2px solid #fff; border-radius: 5px; padding:5px">SocialConnect</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="all.php">All Memebers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="posts.php">All Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.php">Create Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php">Create User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>

      </ul>
      <form class="d-flex" method="get" action ="all.php">
        <input class="form-control me-sm-2" value="<?php
		if(isset($_GET['find'])){echo $_GET['find'];} 
		?>" type="text" name ="find"  placeholder="Search members">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
