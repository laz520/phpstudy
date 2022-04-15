<?php
session_start();
include ("config.php");

echo $_SESSION['ip'];
$ip = $_SESSION['ip'];
$user =  "安东尼";
$pass= "1213213";
$id = '4';
$sql = "INSERT INTO `admin`(`id`,`user`,`pass`,`ip`)
VALUES ('$id','$user', '$pass','$ip')";//接收过来并且赋值给相应的数据

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
