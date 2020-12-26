<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DB Connection</title>
</head>
<body>
    <h1>Content of the Login Table:</h1>
    <table width="60%", align="center" border="1">
        <tr>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Username</th>
            <th>Password</th>
        </tr>

    <?php
        include 'sql.php';
        $str="select * from login where ActiveFlag=1";
        $res=mysqli_query($sql,$str);
        while($arr=mysqli_fetch_row($res)){
        ?>
            <tr>
                <td> <?php echo $arr['name'];?></td>
                <td> <?php echo $arr['mobile'];?></td>
                <td> <?php echo $arr['username'];?></td>
                <td> <?php echo $arr['password'];?></td>
            </tr>
        <?php } ?>
    ?>
    </table>
</body>
</html>