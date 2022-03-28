<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "a";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "SELECT id,name FROM 22";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
