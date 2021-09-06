<?php

if(isset($_GET['id'])){
  $profile_id = $_GET['id'];
$file = "$profile_id";
if(file_exists($file)){
  
header("Content-type: image/jpeg");
  echo file_get_contents($file);
  
}else{
  echo "not exists: $file";
}

  
}