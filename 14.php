<?php
$str = 'a';
    $needle ='a';//判断是否包含a这个字符
    $tmparray = explode($needle,$str);
    if(count($tmparray)>1){
       echo "包含违法字段";
    } else{
      echo  "不包含违法字段";
    }
