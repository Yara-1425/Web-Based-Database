<?php
$servername = "sql106.infinityfree.com";
$username = "if0_42361818";
$password = "Ymb123456";
$dbname = "if0_42361818_firstsql";
$name = $_GET['name'];
$age = $_GET['age'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO agestable (id, name, age)
VALUES (", '$name', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: display.php");
exit();

?>