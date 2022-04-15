<?php
if (isset($_POST['user'])){
    echo $_POST['user'];
}
?>
<form method="post" action="28.php"  >
    <input type="text" name="user"   />
<button> 提交</button>
</form>