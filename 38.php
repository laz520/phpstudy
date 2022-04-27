<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<form>
    <input type="text" name="user" id="user">


</form>

</body>
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
</script>
<script>
    $("#user").on("keyup" ,function (){
        if ($(this).val()!==''){
            $.ajax({
                type:"POST",
                url :"ad.php",
                data :{ "n" :$(this).val()},
                dataType:'html'
            }).done(function (date){
                console.log(date)
            })

        }
    })
</script>

</html>