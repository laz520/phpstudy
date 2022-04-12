<!DOCTYPE html>
<html>
<head>
    <title>小黄人的小后台</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        width: 100v;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container{
        width: 300px;
        border: 1px solid skyblue;
        padding: 50px;
        border-radius: 30px;
        box-shadow:
                7px 137px 102px -29px rgba(0, 0, 0, 0.56)
    ;
        }
</style>
<body>

<div class="container">
    <h2>小黄人的网站</h2>
    <form action="21.php" method="post">
        <div class="form-group">
            <label for="email">用户名</label>
            <input type="text" class="form-control"  name="user" >
        </div>
        <div class="form-group">
            <label for="pwd">密码:</label>
            <input type="password" class="form-control"  name="pass">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> 记住我的用户名
            </label>
        </div>
        <button type="submit" class="btn btn-primary">登入</button>
    </form>
</div>

</body>
</html>