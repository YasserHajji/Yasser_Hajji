?php
include 'header.php';
require 'db.php'; 
$sql = "select * from studentsinfo";
$result = $conn->query($sql);?>
<table class="table">
<tr>
<th>ID</th><th>First Name</th><th>Last Name</th>
<th>City</th><th>Group ID</th> <th>Edit</th>
<th>Delete</th>
</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["fname"]; ?></td>
<td><?php echo $row["lname"]; ?></td>
<td><?php echo $row["city"]; ?></td>
<td><?php echo $row["groupid"]; ?></td>
<td><a href="updatesingle.php?id=<?php echo $row['id']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
<?php include 'footer.php' ?>