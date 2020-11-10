<html>
<head>
<!--    <meta http-equiv="refresh" content="1">-->
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
        if(!isset($_COOKIE['oldTime']))
            echo "visited First Time";
        else{
            $oldTime= $_COOKIE["oldTime"];
            $newTime= date("U");
            $timeDiff=$newTime-$oldTime;
            echo "<h1>You have visited after $timeDiff seconds";
        }
        setcookie("oldTime",date("U"),time()+30+24+60+60);
//        echo "<h1>" .date("h:i:s A")."</h1>";
    ?>
</body>
</html>
