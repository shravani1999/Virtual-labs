<?php
$servername = "localhost:3306";
$db_username = "root";
$password = "";
$dbname = "virtuallabsdsce";

// Create connection
$conn = new mysqli($servername, $db_username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$usn = $_POST['usn'];
$passwd = $_POST['password'];

$sql = "SELECT username FROM userdata where usn = \"$usn\" and passwd = \"$passwd\" ";
$result = $conn->query($sql);

if ($result->num_rows == 1)
{
    $row = $result->fetch_assoc();
    $_POST['name']=$row["username"];
} else {
    $_SESSION['login_error'] = "true";
    header("Location: login.php");
    exit;
}

$conn->close();
?>