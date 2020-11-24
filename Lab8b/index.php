<html>
<head>
    <title>Transpose of a Matrix</title>
</head>
<body>
<?php
    $arr1=Array(
                Array(1,2,3),
                Array(4,5,6)
    );
    $arr2=Array(
        Array(2,6,7),
        Array(4,1,8)
    );
    echo "<h3>Matrix A is: </h3>";
    for($i=0;$i<count($arr1);$i++){
       for($j=0;$j<count($arr1[0]);$j++){
            echo $arr1[$i][$j]. " ";
       }
       echo "<br/>";
    }
    echo "<h3>Matrix B is: </h3>";
    for($i=0;$i<count($arr2);$i++){
        for($j=0;$j<count($arr2[0]);$j++){
            echo $arr2[$i][$j]. " ";
        }
        echo "<br/>";
    }
    if(count($arr1)==count($arr2)&&count($arr1[0])==count($arr2[0])){
        echo "<h3>A + B = </h3>";
        $res=array();
        for($i=0;$i<count($arr2);$i++){
            for($j=0;$j<count($arr2[0]);$j++){
                echo $arr1[$i][$j] + $arr2[$i][$j]. " ";
            }
            echo "<br/>";
        }
    }
    else {
        echo "<h3>Dimensions doesn't Match</h3>";
    }

?>
</body>
</html>
