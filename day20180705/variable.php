<?php
/**
 * Created by PhpStorm.
 * User: dujun
 * Date: 2018/7/5
 * Time: 上午12:47
 */

$x=5;
function myTest(){
    $y=10;
    global $x;
    echo '<p>Test variables inside the function:<p>';
    echo "Variable x is:".$x;
    echo "<br/>";
    echo "Variable y is:$y";
}
myTest();
echo "<p>Test variables outside the function:<p>";
echo "Variable x is:".$x;
echo "<br>";
echo "Variable y is:$y";