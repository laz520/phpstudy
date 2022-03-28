<form action="6.php" name="ac" method="post">
    <input type="text" name="x">
    <input type="file"  name="wj"/>
    <input type="submit" name="tj">


</form>
<?php
$wj =$_POST['wj'];
if($_POST['x'] != null){
    echo '真的';
}else{
    echo '空';
}