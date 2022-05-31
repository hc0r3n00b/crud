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
    <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
    <button type="button" onclick="update(' . $row["id"].')" class="btn btn-warning">Update</button>
    <button type="button" onclick="del(' . $row["id"].')" class="btn btn-danger">Delete</button>
  </div></td>
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