<?php
$servername = "root@localhost";
$username = "root";
$password = "root";
$database = "goods";

// 연결 생성
$conn = mysqli_connect($root@localhost, $username, $password, $database);

// 연결 확인
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>