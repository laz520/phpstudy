<?php
session_start();
if ($_SESSION['user'] == true){
    echo "<script>alert('你已经登陆了！无需再登陆了！')
window.location.href = '27.php'
</script>";
}

if ($_SESSION['user'] == false):
?>
<form action="26.php" method="post">
    <input type="text" name="user"/><br>
    <input type="password" name="pass"><br>
    <button name="login">提交</button>
</form>
<?php
endif;

    ?>