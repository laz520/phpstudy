<?php
include ("config.php");
$c = "a";
$user  = hasname($_POST['n']);
if ($user){
    echo "yes";
}else{
    echo "no";
}
