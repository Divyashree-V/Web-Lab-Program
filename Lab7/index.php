<html>
<head>
    <meta http-equiv="refresh" content="1">
    <title>Digital Clock</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
<h1>Digital Clock</h1>
<hr/>
    <?php
        date_default_timezone_set("Asia/Kolkata");
        echo "<h1>" .date("h:i:s A")."</h1>";
    ?>
</body>
</html>
