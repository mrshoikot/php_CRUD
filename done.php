<?php
include 'connection.php';



$sql = "UPDATE tasks SET is_done = '1' WHERE id = '$_GET[id]'";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>