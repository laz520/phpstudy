<?php
//$user = 'admin';
//$pass = '123456';
//setcookie("cookie" ,md5($user . $pass), time()+60*200*48);
//;
//echo $_COOKIE['cookie'];
//
//
//if(!isset($_COOKIE['cookie'])){
//    die("空");
//}
session_abort();

$_SESSION['name'] = "小刘";
echo $_SESSION['name'];