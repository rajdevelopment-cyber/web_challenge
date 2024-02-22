<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tjkt";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);


if ($result->num_rows == 1) {
    
    header("Location: beranda.html");
} else {
    header("Location: false.html");
}

$conn->close();
?>
