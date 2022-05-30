<?php
require 'connect.php';
$id = $_POST['id'];

$sql = "DELETE FROM data WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Entry Updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 