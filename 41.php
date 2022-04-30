<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Snackbar - 不同位置的 Snackbar</title>
    <link rel="stylesheet" href="https://cdn.w3cbus.com/library/mdui/1.0.2/css/mdui.min.css"/>
</head>

<body class="mdui-theme-accent-pink">

<div class="mdui-container">
    <button class="mdui-btn mdui-color-theme-accent mdui-ripple" id="example-bottom">bottom</button>
    <button class="mdui-btn mdui-color-theme-accent mdui-ripple" id="example-top">top</button>
    <button class="mdui-btn mdui-color-theme-accent mdui-ripple" id="example-left-top">left-top</button>
    <button class="mdui-btn mdui-color-theme-accent mdui-ripple" id="example-left-bottom">left-bottom</button>
    <button class="mdui-btn mdui-color-theme-accent mdui-ripple" id="example-right-top">right-top</button>
    <button class="mdui-btn mdui-color-theme-accent mdui-ripple" id="example-right-bottom">right-bottom</button>
</div>

<script src="https://cdn.w3cbus.com/library/mdui/1.0.2/js/mdui.min.js"></script>


<script>
    var $ = mdui.$;

    $('#example-top').on('click', function () {
        mdui.snackbar({
            message: 'top',
            position: 'top'
        });
    });

    $('#example-bottom').on('click', function () {
        mdui.snackbar({
            message: 'bottom',
            position: 'bottom'
        });
    });

    $('#example-left-top').on('click', function () {
        mdui.snackbar({
            message: 'left-top',
            position: 'left-top'
        });
    });

    $('#example-left-bottom').on('click', function () {
        mdui.snackbar({
            message: 'left-bottom',
            position: 'left-bottom'
        });
    });

    $('#example-right-top').on('click', function () {
        mdui.snackbar({
            message: 'right-top',
            position: 'right-top'
        });
    });

    $('#example-right-bottom').on('click', function () {
        mdui.snackbar({
            message: 'right-bottom',
            position: 'right-bottom'
        });
    });
</script>
</body>
</html>