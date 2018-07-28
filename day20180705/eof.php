<?php
/**
 * Created by PhpStorm.
 * User: dujun
 * Date: 2018/7/5
 * Time: 下午10:23
 */

$name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;
?>