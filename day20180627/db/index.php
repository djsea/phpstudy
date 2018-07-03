<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>连接数据库</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: dujun
 * Date: 2018/6/28
 * Time: 上午12:26
 */
$conn = mysqli_connect('localhost', 'root', 'root');
if ($conn) {
    echo '连接成功';
    mysqli_select_db('myapp', $conn);
    $result = mysqli_query("SELECT * FROM users");
    $result_arr = mysqli_fetch_array($result);
    print_r($result_arr);
} else {
    echo '连接失败';
}

?>
</body>
</html>


