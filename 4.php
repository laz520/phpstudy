<?php
$a =[['title'=> 'xixi' ,'age'=> '12'],
    ['title'=> 'xixi' ,'age'=> '12'],
    ['title'=> 'xixi' ,'age'=> '12'],
    ['title'=> 'xixi' ,'age'=> '12'],
    ['title'=> 'xixi' ,'age'=> '12']



];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap5 实例</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
    <h2>多种颜色列表项</h2>
    <div class="list-group">
<?php
foreach($a as $c){



?>

     <a href="#" class="list-group-item list-group-item-action"><?php echo $c['title']?></a>

        <a href="#" class="list-group-item list-group-item-action"><?php echo $c['age']?></a>




<?php
}
?>


    </div>
</div>


</body>
</html>
