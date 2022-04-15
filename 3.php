<?php

//$men =['首页' , '服务器','php','前端','小程序'];
//
//foreach ($men as $a){
//    echo '<li>';
//    echo  '<a>' . $a . '</a>';
//}
//<script>alert("存在严重漏洞")</script>

$user =$_POST['text'];
$a = htmlspecialchars($user, ENT_QUOTES);
echo $a; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

?>
<form action="3.php " method="post">
    <input type="text" name="text"  />
    <button>提交</button>
</form>