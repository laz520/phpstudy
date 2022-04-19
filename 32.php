<?php
$img = '';

$lj = "1/";//设置一个新的存放路径
move_uploaded_file($_FILES['file']['tmp_name'], $lj.$_FILES['file']['name']);
//把临时存放的文件夹放到我一开始设置的路径
$a=$_FILES['file']['name'];;//现在的文件名成赋值
$name = "1/1.png";//设置的文件的名称
$img = $lj.$_FILES['file']['name'];//把存放的路径赋值给img
$c = rename($img , $name);//把上传的文件名称重命名  renam函数重命名
?>

<form action="32.php" method="post" enctype="multipart/form-data">
    <img src="1/1.png" style="width: 69px;">
    <input  type="file" name="file" >
    <button>提交照片</button>
</form>
