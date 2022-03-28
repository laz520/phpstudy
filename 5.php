<?php
$title ='这是一个php网页';
$h = '这是一个小页面的介绍';
$lb =  ['导航' , '链接', '首页','关于',];

$wz = [['title'=> '黑色童年' ,'img'=>'https://tva3.sinaimg.cn/large/0072Vf1pgy1foxkipc63ij31hc0u0wv2.jpg','zzzz'=> '我的靓照','title1'=> '这是一个用php写的一个boorstrap网页'] ,
    ['title'=> '黑色童年' ,'img'=>'https://tva3.sinaimg.cn/large/0072Vf1pgy1foxkipc63ij31hc0u0wv2.jpg','zzzz'=> '我的靓照','title1'=> '这是一个用php写的一个boorstrap网页'] ,
    ['title'=> '黑色童年' ,'img'=>'https://tva3.sinaimg.cn/large/0072Vf1pgy1foxkipc63ij31hc0u0wv2.jpg','zzzz'=> '我的靓照','title1'=> '这是一个用php写的一个boorstrap网页'] ,
    ['title'=> '黑色童年' ,'img'=>"https://tva3.sinaimg.cn/large/0072Vf1pgy1foxkipc63ij31hc0u0wv2.jpg",'zzzz'=> '我的靓照','title1'=> '这是一个用php写的一个boorstrap网页'] ,
    ['title'=> '黑色童年' ,'img'=>'https://tva3.sinaimg.cn/large/0072Vf1pgy1foxkipc63ij31hc0u0wv2.jpg','zzzz'=> '我的靓照','title1'=> '这是一个用php写的一个boorstrap网页'] ,

    ];
$foot = '这是我的版权部分';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>php</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1><?php echo $title;?></h1>
    <p><?php echo $h;?></p>
</div>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">导航</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <?php
                foreach($lb as $c){



                ?>
                <a class="nav-link" href="#"><?php echo $c ?></a>
                <?php
                }


                ?>
            </li>

        </ul>
    </div>
</nav>

<div class="container" style="margin-top:30px">
    <div class="row">

        <div class="col-sm-4">
            <?php
            foreach ($wz as $a){
                ?>
            <h2><?php echo $a['title1']?></h2>
            <h5><?php echo $a['zzzz']?></h5>

            <div class="fakeimg"><img src="<?php $a['img'] ?>"></div>


            <hr class="d-sm-none">
                <?php
            }
            ?>
        </div>

    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p><?php
        echo $foot

        ?></p>
</div>

</body>
</html>