<?php 
require 'connect.php';
$sql = "SELECT * FROM data";
$result = $conn->query($sql);
echo '<table class="table">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Message</th>
    <th scope="col">Timestamp</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>';
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<tr>
    <th scope="row">'. $row["id"].'</th>
    <td>' . $row["name"].'</td>
    <td>' . $row["message"].'</td>
    <td>' . $row["timestamp"].'</td>
    <td><a class="btn btn-primary" onclick="update(' . $row["id"].')" role="button">Update</a>
    <a class="btn btn-primary" onclick="del(' . $row["id"].')" role="button">Delete</a></td>
  </tr>';
  }
} else {
    echo '<tr>
    <th colspan="5">No Entrys Found</th>
  </tr>';
}
echo '</tbody>
</table>';
$conn->close();
?> 