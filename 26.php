<?php
session_start();
include("config.php");


$user = trim($_POST['user']);
$pass = trim($_POST['pass']);

$sql = "SELECT * FROM admin WHERE user = '$user' and pass = '$pass'";
$result = $conn->query($sql);//处理$sql变量

$row = $result->fetch_assoc(); //从结果集中取得一行作为关联数组。


if (isset($_POST['login'])) {
    if ($user == $row['user'] || $pass == $row['pass']) {
        $_SESSION['dr'] = true;
       $_SESSION['user'] = $user;
       $_SESSION['pass'] = $pass;

        echo "<script>alert('登入成功')
        window.location.href = '27.php'
        </script>";
    } else {
        $_SESSION['dr'] = false;
        echo "<script>alert('登入失败！')
        window.location.href = '25.php'
        </script>";
    }
} else {
    echo "<script>alert('你未输入账号和密码！')
        window.location.href = '25.php'
        </script>";
}

