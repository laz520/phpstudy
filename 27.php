<?php

session_start();
include ("config.php");

if (isset($_SESSION['dr']) && $_SESSION['dr']== true && $_SESSION['user'] && $_SESSION['pass'])://判断Session的值是不是为空！
    $sqla = "SELECT * FROM admin WHERE user='" . $_SESSION['user'] . "'";
    $resulta = $conn->query($sqla);
    $rowa = mysqli_fetch_assoc($resulta);
?>

<style>
    *{
        margin: 0;
        padding: 0;

    }
    body{
        text-align: center;
    }
    h3{
        font-size: 40px;
        color: skyblue;
        margin: 50px;
    }
    div{
        line-height: 20px;
    }
</style>
<div><h3>一个简陋的后台</h3>
    <h5>恭喜你登入成功！</h5>
    <h6> 你的用户名是：<?php echo $_SESSION['user'] ?></h6>
    <h6>你的密码是：<?php echo $_SESSION['pass']?></h6>
    <h6>你的id是：<?php echo $rowa['id']?></h6>
    <br><img src='http://wx4.sinaimg.cn/mw690/006HJgYYgy1fsnwkmoqrkg305k05kwhs.gif'>
  <br><a href="2.php">登出</a>
</div>

<?php
else:
    echo "<script>alert('未登入')
window.location.href = '25.php'
</script>";
endif;
