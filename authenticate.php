<?php
$host = "localhost"; 
$dbname = "haunted_db"; 
$username = "root"; 
$password = ""; 

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$user = $_POST['username'];
$pass = $_POST['password'];


$query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";

$stmt = $conn->query($query);
if ($stmt->rowCount() > 0) {
    echo "Welcome, you have passed the spirits' test!";
    echo "<p>Flag found: hackoween{found me}</p>";
} else {
    echo "The spirits do not recognize you.";
}
?>
