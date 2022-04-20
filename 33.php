<?php
//随机变换颜色函数
function color($length = 6){
    $x = '0123456DEF';
    $a = strlen($x);
    $v = '';
    for ($i = 0;$i<$length;$i++){
        $v .= $x[rand(0,$a-1)];

    }
    return $v;
}
?>
<div style="background-color: #<?php echo color() ?>; width: 50px;height: 50px" ></div>
