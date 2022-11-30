<?php
include 'connection.php';



$sql = "INSERT INTO tasks (title)
VALUES ('$_POST[title]')";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>