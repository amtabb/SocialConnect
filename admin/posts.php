<?php
//Garvita created the html
//Abdul added logic
//Roshan provided sql
include 'head.php';
include 'db.php';

$sql = "select  * from posts where body !='' order by id desc";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo '<table class="table table-hover">';
	echo '
	<thead>
	<tr>
	<th>Posted by</th>
	<th>Post</th>
	<th>Date Time</th>
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
<td><?=$added_by?></td>
<td><?=$body?></td>
<td><?=$date_added?></td>
<td class="btn-group">
<a href="delete.php?id=<?=$id;?>" class="btn btn-danger btn-sm">Delete Post</a>
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