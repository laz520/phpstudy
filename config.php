<?php

$servername =  "localhost";//服务器地址
$username = "root" ;//数据库用户名
$pass = "root";//数据库密码
$db = "cs";//数据库名称

//创建链接
$conn = new mysqli($servername  ,$username , $pass ,$db);

//检测连接，连接失败就执行die语句
if($conn ->connect_errno){
    die("连接失败！" .$conn->connect_error);
}
//
//////获取登陆的SESSION信息和数据库的name对比1



    $sql = "SELECT * FROM `admin` WHERE 'user' = $user";
$resulet  = $conn->query($sql);

 $sx = " select * from  admin order by rand() limit 1";
 $re  = $conn->query($sx);
 $row = $re->fetch_assoc();
 echo  $row['id'];

