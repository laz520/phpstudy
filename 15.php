
<?php
header("Content-Type: text/html;charset=utf-8");
if (isset($_REQUEST['code'])){
    session_start();

    if ($_REQUEST['code'] == $_SESSION['code']){
        echo "输入正确";
    }else{
        echo "输入错误，请重新输入";
    }

    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> //这里不能少，不然乱码
    <title>验证码测试</title>
</head>
<body>
<form>
    <p>验证码:<img src="16.php" onClick="this.src='cap_sz.php?nocache='+Math.random()" style="cursor:hand" alt="点击换一张"/>点击图片可更换验证码</p>
    <p>请输入图片中的内容:<input type="text" name="code" value=""/></p>
    <p><input type="submit" width="20px" height=19px value="提交"></input></p>

</form>
</body>
</html>
