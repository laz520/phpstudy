<?php
$arr= [['title'=>'首页' , 'link'=>'https://www.03html.com'],
    ['title'=>'友情连接', 'link'=>'https://www.03html.com'],
    ['title'=>'关于', 'link'=>'https://www.03html.com'],
    ['title'=>'地图', 'link'=>'https://www.03html.com'],
    ['title'=>'赞助', 'link'=>'https://www.03html.com'],
    ];
?>
<!DOCTYPE html>
<html>
<head>
  <title>这是一个测试forech遍历demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>关于我的首页</h3>
  <p>这是我的一个小页面。</p>
</div>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
      <?php
    foreach ($arr as $a){


      ?>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo $a['link'] ?>"><?php echo $a['title'] ?></a>
    </li>
 <?php
}