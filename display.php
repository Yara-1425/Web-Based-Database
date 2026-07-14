<style>
    body { background-color: #f9f9f9; text-align: center; font-family: sans-serif; }
    table { width: 80%; margin: 20px auto; border-collapse: collapse; background-color: #163225; color: #FFB4B4; }
    th, td { padding: 15px; border: 1px solid #FFB4B4; }
    .back-link { font-size: 40px; text-decoration: none; color: #163225; }
</style>

<?php
$servername = "#####";
$username = "#####";
$password = "#####";
$dbname = "#####";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, age FROM agestable";
$result = $conn->query($sql);

echo "<table><tr><th>name:</th><th>age:</th></tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td></tr>";
}
echo "</table>";
$conn->close();
?>

<a href="connect.html" class="back-link">⬅</a>
