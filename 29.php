<?php

$img = '';

    echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
    echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    $xi  = "1/";
    move_uploaded_file($_FILES['file']['tmp_name'] , $xi .$_FILES['file']['name']);
   $a=$_FILES['file']['name'];
   $tmp = "1/1.jpg";
    //重命名
   $img = $xi.$_FILES['file']['name'];
   $c= rename($img , $tmp);

?>

<form action="29.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" />
    <button>提交</button>
    <img  src="<?php echo $img ?>" >
</form>

