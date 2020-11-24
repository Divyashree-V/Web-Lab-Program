<html>
<head>
    <title>PAttern Matching Using Python</title>
</head>
<body>
<?php
    $res=shell_exec("python states.py");
    $resArr =explode("\n",$res);
    echo "<h2>states are: $resArr[4]</h2>";
    echo "<h2>words that end with xas: $resArr[0]</h2>";
    echo "<h2>Word that Starts with k and end with s: $resArr[1]</h2>";
    echo "<h2>Word that Starts with m and end with s: $resArr[2]</h2>";
    echo "<h2>word in states that end in a: $resArr[3]</h2>";
?>
</body>
</html>