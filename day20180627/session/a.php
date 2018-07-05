<?php
/**
 * Created by PhpStorm.
 * User: dujun
 * Date: 2018/6/27
 * Time: 下午11:32
 */

session_start();
if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
} else {
    echo 'No name';
}
//echo $_SESSION['name'];