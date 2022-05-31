<?php
require 'connect.php';
$id = $_POST['id'];

$sql = "DELETE FROM data WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Entry Deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 