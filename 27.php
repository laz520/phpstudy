<?php
session_start();


if (isset($_SESSION['dr']) && $_SESSION['dr']== true && $_SESSION['user'] && $_SESSION['pass'])://判断Session的值是不是为空！

?>

<style>
    *{
        margin: 0;
        padding: 0;

    }
    body{
        text-align: center;
    }
</style>
<div><h3>一个简陋的后台</h3>
    <h5>恭喜你登入成功！</h5>
    <h6><?php echo $_SESSION['user'] ?></h6>
    <h6><?php echo $_SESSION['pass']?></h6>
    <br><img src='http://wx4.sinaimg.cn/mw690/006HJgYYgy1fsnwkmoqrkg305k05kwhs.gif'>
  <br><a href="2.php">登出</a>
</div>

<?php
else:
    echo "<script>alert('未登入')
window.location.href = '25.php'
</script>";
endif;
