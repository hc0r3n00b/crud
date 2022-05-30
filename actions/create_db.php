<?php
require 'connect.php';
$name = $_POST['name'];
$message = $_POST['message'];

$sql = "INSERT INTO data (name, message) VALUES ('$name', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New entry created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 