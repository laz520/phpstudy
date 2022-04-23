<?php
include ("config.php");
$sql = "SELECT user ,id , pass FROM admin ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//foreach ($men as $a){
//    echo '<li>';
//    echo  '<a>' . $a . '</a>';
//}
