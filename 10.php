<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
    <script>
        function showSite(str)
        {
            if (str=="")
            {
                document.getElementById("txtHint").innerHTML="";
                return;
            }
            if (window.XMLHttpRequest)
            {
                // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // IE6, IE5 浏览器执行代码
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","11.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
</head>
<body>

<form>
    <select name="users" onchange="showSite(this.value)">
        <option value="">选择一个网站:</option>
        <option value="1">Google</option>
        <option value="2">淘宝</option>
        <option value="3">菜鸟教程</option>
        <option value="4">微博</option>
        <option value="5">Facebook</option>
    </select>
</form>
<br>
<div id="txtHint"><b>网站信息显示在这里……</b></div>

</body>
</html>