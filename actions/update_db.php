<?php
require 'connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$message = $_POST['message'];

$sql = "UPDATE data SET name='$name', message='$message' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Entry Updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 