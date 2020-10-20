<html>
<head>
    <title>program 6</title>
</head>
<body>
    <h1>Welcome to my webpage </h1>
    <?php
        //file manipulation from count.txt
        $handle=fopen("count.txt","r");
        $count=fread($handle, 10);
        fclose($handle);
        $count=intval($count);
        $count += 1;
        echo "<h2>No of visitors who visited this page : $count </h2>";

        $handle=fopen("count.txt","w");
        fwrite($handle, $count);
        fclose($handle);

    ?>
</body>
</html>
