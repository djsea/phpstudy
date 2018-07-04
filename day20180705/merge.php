<?php
/**
 * Created by PhpStorm.
 * User: dujun
 * Date: 2018/7/5
 * Time: 上午12:31
 */
$a = (1 > 2) ? 'bing' : 'small';
$b = (3 > 4) ?: 'small';
$c = (1 > 2) ?: 'big';
$d = null ?? 2;
$e = 5 ?? 2;
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo $a, '<br/>';
echo $b, '<br/>';
echo $c, '<br/>';
echo $d, '<br/>';
echo $e, '<br/>';

