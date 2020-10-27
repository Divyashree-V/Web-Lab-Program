<html>
<head>
    <title>program 6</title>
    <style>
        h1,h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Welcome to my webpage </h1>
    <?php
        //file manipulation from count.txt
        $handle=fopen("count.txt","r");
        $count=fread($handle, 10);
        fclose($handle);
        $count=intval($count);
        //Visitors working time
        date_default_timezone_set('Asia/Kolkata');
        $cur_time= date("H");
        if ($cur_time > 9 && $cur_time < 17)
            $count += 1;

        echo "<h2>No of visitors who visited this page : $count </h2>";
        $handle=fopen("count.txt","w");
        fwrite($handle, $count);
        fclose($handle);

    ?>
</body>
</html>
