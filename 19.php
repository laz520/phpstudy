<?php
$page = "index";//进入默认显示index
if (isset($_GET['page'])) {
    $page = $_GET['page'];// 判断不为空

}

//switch 语法来判断$page的值
switch ($page) {
    case 'index':
        $title = "首页";
        break;
    case 'lx':
        $title = "联系";
        break;
    case 'gy':
        $title = "关于";
        break;
    default:
        $title = "404";

}

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php  echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a <?php if ($page == "index") echo ' class="navbar-brand "'; ?> class="nav-link" href="?page=index">首页</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a <?php if ($page == "gy") echo ' class="navbar-brand "'; ?> class="nav-link" href="?page=gy">关于</a>
        </li>
        <li class="nav-item">
            <a <?php if ($page == "lx") echo ' class="navbar-brand "'; ?> class="nav-link" href="?page=lx">联系</a>
        </li>
    </ul>
</nav>

<?php if ($page == 'index'): ?>
    <div class="container-fluid" style="margin-top:80px">
        <h3>我是一个php的一个测试页面</h3>
        <p>我是首页</p>
    </div>

<?php elseif ($page == 'gy'): ?>
    <div class="container-fluid" style="margin-top:80px">
        <h3>这是一个关于页面</h3>
        <p>作者：黑色童年</p>

    </div>


<?php elseif ($page == 'lx'): ?>
    <div class="container-fluid" style="margin-top:80px">
        <h3>一个联系的页面</h3>
        <p>微信：laobiaoz</p>

    </div>
<?php else:
    ?>
    <h3>为查询到</h3>
<?php endif; ?>
</body>
</html>