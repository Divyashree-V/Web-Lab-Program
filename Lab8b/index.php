<html>
<head>
    <title>Transpose of a Matrix</title>
</head>
<body>
<?php
    $arr=Array(
                Array(1,2,3),
                Array(4,5,6)
    );
    echo "<h3>Matrix is: </h3>";
    for($i=0;$i<count($arr);$i++){
       for($j=0;$j<count($arr[0]);$j++){
            echo $arr[$i][$j]. " ";
       }
       echo "<br/>";
    }
    echo "<h3>Transpose of the Matrix is: </h3>";
    for($i=0;$i<count($arr[0]);$i++){
        for($j=0;$j<count($arr);$j++){
            echo $arr[$j][$i]. " ";
        }
        echo "<br/>";
    }

?>
</body>
</html>
