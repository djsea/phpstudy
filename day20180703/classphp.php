<?php
/**
 * Created by PhpStorm.
 * User: dujun
 * Date: 2018/7/3
 * Time: 下午11:28
 */

class Car
{
    var $color;
    function set_color($color="green"){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
}

$car = new Car();
$car->set_color('red');
echo $car->get_color();


