<?php
$a = [['title' => '名字', 'qq' => '2104819596', 'weixing' => 'weiex']

    ,['title' => '名字', 'qq' => '2104819596', 'weixing' => 'weiex']

    ,['title' => '名字', 'qq' => '2104819596', 'weixing' => 'weiex']

    ,['title' => '名字', 'qq' => '2104819596', 'weixing' => 'weiex']

    ,['title' => '名字', 'qq' => '2104819596', 'weixing' => 'weiex']

    ,];
foreach ($a  as $c){
    echo  $c['title']  , '<br> ';
    echo  $c['qq'] , '<br>';
    echo $c['weixing'];
}