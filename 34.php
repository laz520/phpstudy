<?php
include ("config.php");
function color($length = 6){
    $x = '0123456DEF';
    $a = strlen($x);
    $v = '';
    for ($i = 0;$i<$length;$i++){
        $v .= $x[rand(0,$a-1)];

    }
    return $v;
}

$sql ="SELECT   id , user , pass ,FROM admin ";
?>
<?php
$result = $conn ->query($sql);
if ($result->num_rows>0){
    while ($row =$result->fetch_assoc()){
     echo $row['user'];
    }
}