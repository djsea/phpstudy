<?php
/**
 * Created by PhpStorm.
 * User: dujun
 * Date: 2018/6/27
 * Time: 下午11:30
 */
session_start();
$_SESSION['name'] = 'jikexueyuan';
//echo session_id();
//session_destroy();
header('Location:a.php');
