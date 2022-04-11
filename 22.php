<?php
session_start();
include("config.php");
//获取登陆的SESSION信息和数据库的name对比1
$sqla = "SELECT * FROM admin WHERE user='" . $_SESSION['user'] . "'";
$resulta = $conn->query($sqla);
$rowa = mysqli_fetch_assoc($resulta);
$user = $_SESSION['user'];
if (!isset($user)) {
    echo "<script> alert('你还未登陆')</script>";
    echo "<script>window.location.assign('20.php')</script>";
}

?>
<h3><span style="color: red">欢迎登陆</span> <br> 用户名：<?php echo $rowa['user'] ?>
    <br>你的密码是：<?php echo $rowa['pass'] ?>
    <br><img src='http://wx4.sinaimg.cn/mw690/006HJgYYgy1fsnwkmoqrkg305k05kwhs.gif'>
<br><a href="<?php setCookie("PHPSESSID","",time()-1,"/"); ?>">退出登入</a>
</h3>

<style>
    h3 {
        text-align: center;
    }
</style>

