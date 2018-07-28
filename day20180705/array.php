<?php
/**
 * Created by PhpStorm.
 * User: dujun
 * Date: 2018/7/5
 * Time: 下午10:59
 */

$cars=array("Volvo","BMW","Toyota",array("1","2",'3'));
echo count($cars);
echo "<br>";

$car=array("Volvo","BMW","Toyota");
$arrlength=count($cars);


for($x=0;$x<$arrlength;$x++) {

    echo $car[$x];
    echo "<br>";
}