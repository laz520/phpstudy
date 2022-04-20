<?php
include ("config.php");
//mysqli 的 查询语句

//SELECT    *    FROM   `list`;
// 查询   所有    从数据表   资料表

$sql  = "SELECT  * FROM list WHERE  id= 1";
//查询所有关于ID等于3的数据

$sqla = "SELECT user , pass FROM admin";
//查询出关于user ， 和pass的信息的list表






//mysqli的新增语句！

//INSERT INYO `list`   (`id` ,`pass` ,`user`)Value(null ,'123456','嘻嘻');
//  增加   到    资料表      资料表的内容的名称    值      具体的值的内容


$zj =  "INSERT INTO admin(`id` ,`user` ,`pass` ,`ip`)value(null, 'dasdas' ,'21312321','3213123')";
//$result = $conn->query($zj);
//if ($result === true) {
//    echo "插入成功";
//}else{
//    echo "插入失败",$conn->error;
//}


//mysqli的修改语句
//UPDATE  admin  SET `user` = 'xixixi' ,`pass`='我被修改了' WHERE `id` = 1;
//   更新    表名    修改                        内容            当    id   = 1


$id  =  $_POST['id'];
$xg = "UPDATE admin SET `user` = '嘻嘻嘻' , `pass` = '修改了一下内容' WHERE  `id` = $id";
//
//if (isset($id)){
//$result = $conn->query($xg);
//if ($result === true){
//    echo "修改成功";
//}else{
//    echo "修改失败";
//}}
//
//<!--<form action="35.php" method="post">-->
//<!--    <input type="text" name="id"  />-->
//<!--  <button>提交</button>-->
//<!--</form>-->



$sc = "DELETE FROM admin WHERE `id` = $id";
if (isset($id)) {
    $result = $conn->query($sc);
    if ($result === True) {
        echo "删除成功";
    } else {
        echo "删除失败", $conn->error;
    }
}
?>

<form action="35.php" method="post">
    <input  type="text" name="id">
 <button>提交</button>
</form>

