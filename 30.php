<?php
session_start();
$_SESSION['ip'] = $_SERVER["REMOTE_ADDR"];
