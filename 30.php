<?php
session_start();
$_SESSION['ip'] = $_SERVER["REMOTE_ADDR"];
$ip = $_SESSION['ip'];
echo md5($ip);
