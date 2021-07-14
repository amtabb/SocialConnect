<?php
error_reporting(FALSE);
session_start();
if($_SESSION["admin"]){
header("location:all.php");
?>
<script>
window.location= 'all.php';
</script>
<?php } 

$error = '';
if(isset($_POST['username'])){
$username = strtolower($_POST['username']);
$password = $_POST['password'];
if($username == 'admin' AND $password == '123456'){


$_SESSION["admin"] = $username;
header("location:all.php");
?>
<script>
window.location= 'all.php';
</script>

<?php
exit;
}else{
		$error = "Invalid Login information";
		
	}
}


?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
 </head>
 <style>
body {
    background-image: url("../assets/images/backgrounds/bgimage.jpg");
  background-size: 100%;
  background-position: center;
  background-attachment: fixed;
  width: 100%;
  height: 100%;
  min-width: 950px;
}
</style>
 <br/>
 <br/>
 <br/>
 <br/>
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-3 col-sm-3">
   </div>
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="post">
     <div class="form-group ">
      <label class="control-label " for="username">
       Username
      </label>
      <input class="form-control" autofocus id="username" name="username" required='required' placeholder="Username for Admin" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="password">
       Password
      </label>
      <input class="form-control" id="password" name="password" required='required' placeholder="Password for Admin" type="password"/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " style="width:100%; margin-top:10px;" name="submit" type="submit">
        Submit
       </button>
	   <br/>
	   <br/>
	   <h2 class="text-center text-danger "><?=$error;?></h2>
	   
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>