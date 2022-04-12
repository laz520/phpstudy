<?php
include ("config.php");

$user = trim($_POST['user']);
$pass = trim($_POST['pass']);
$id = $row['id'];
if ($user == null && $pass == null){
    die('<script>alert("未登陆")
window.location.href ="20.php"
</script>')

    ;
}

session_start();

//获取admin的表的id和user和pass
$sql ="SELECT * FROM admin WHERE user = '$user' and pass = '$pass'";

$result = $conn->query($sql);//处理$sql变量

$row  = $result ->fetch_assoc(); //从结果集中取得一行作为关联数组。


if (isset($user) &&  isset($pass)){
    if ($user == $row['user'] || $pass == $row['pass']){
        header("Location: 22.php");
        $_SESSION['user'] = $user;
        $_SESSION['id'] = $id;
        $_SESSION['islogin'] = 1;
        $remember = "yes";
        // 若勾选7天内自动登录,则将其保存到Cookie并设置保留7天
        if ($_POST['remember'] == "yes") {
            setcookie('name', $user, time() + 7 * 24 * 60 * 60);
            setcookie('code', md5($user . $pass), time() + 7 * 24 * 60 * 60);
            setcookie('name', $user, time() + 7 * 24 * 60 * 60);
            setcookie('code', md5($user . $pass), time() + 7 * 24 * 60 * 60);

        }}else{

            echo "<script>alert('密码错误呢')</script>";
        echo "<script>window.location.href = '20.php'</script>";
    }

}else{
    // 没有勾选则删除Cookie
    setcookie('user', '', time()-999);
    echo "<script>alert('你还没有输入账号和密码呢！')
window.location.assign('20.php');
</script>";
}

?>
