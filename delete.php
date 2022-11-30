<?php
include 'connection.php';



$sql = "DELETE FROM tasks WHERE id = '$_GET[id]'";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>