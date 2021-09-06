<?php

//Abdul added logic
//Roshan provided sql
include 'head.php';
include 'db.php';

$sql = "select  * from users order by id desc";
if(isset($_GET['find'])){
$find = $_GET['find'];
$sql = "select  * from users where username like '%$find%' OR first_name like '%$find%' OR last_name like '%$find%'  OR id = '%$find%' order by id desc";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo '<table class="table table-hover">';
	echo '
	<thead>
	<tr>
	<th>Name</th>
	<th>User Name</th>
	<th>Email</th>
	<th>Signup Date</th>
	<th>Actions</th>
		</tr>
	</thead>
	<tbody>
	';
	
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	extract($row);
	?>
<tr>
<td><?=$first_name;?><?=$last_name;?></td>
<td><?=$username?></td>
<td><?=$email?></td>
<td><?=$signup_date?></td>
<td class="btn-group">
<a href="loginAs.php?user=<?=$username;?>" class="btn btn-info">Login as</a>
<?php if($disabled != 1){ ?>
<a href="doDisable.php?id=<?=$id;?>" class="btn btn-danger">Disable</a>
<?php } else { ?>
<a  href="doENable.php?id=<?=$id;?>" class="btn btn-success">Enable</a>

<?php } ?>
</td>
</tr>
	
	<?php
	
	
  }
  
  
  	echo '
	<tbody>
	</table>';

} else {
  echo "0 results";
}
$conn->close();