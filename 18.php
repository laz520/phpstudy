<?php
$a = [['title' => '名字', 'qq' => '2104819596', 'weixing' => 'weiex']

    ,['title' => '名字', 'qq' => '2104819596', 'weixing' => 'weiex']

    ,['title' => '名字', 'qq' => '2104819596', 'weixing' => 'weiex']

    ,['title' => '名字', 'qq' => '2104819596', 'weixing' => 'weiex']

    ,['title' => '名字', 'qq' => '2104819596', 'weixing' => 'weiex']

    ,];

?>
<style>
    *{
        margin: 0;
        padding: 0;

    }

   .box1{
        width: 400px;
        height: 200px;
        background-color: skyblue;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        margin-bottom: 10px;

    }
</style>
<?php
foreach ($a as $c){
?>
<div class="box">
<div class="box1">
    <h3>一个个人简介</h3>
    <p><?php echo $c['title']?></p>
    <p><?php echo $c['qq']?></p>
    <p><?php echo $c['weixing']?></p>
</div>
</div>
<?php
}?>
