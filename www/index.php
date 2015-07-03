<?php

class Math {
// static обозначает что св-во принадлежит не объекту а классу
    public static $count = 0;

    public static function getSin($x) {
        self::$count++; //т.к. принадлежит не к объекту, а к классу. 
        return sin($x);
    }

    public static function getCos($x) {
        self::$count++;
        return cos($x);
    }

}

echo Math::getSin(1) . "<br />";
echo Math::getCos(1) . "<br />";
echo Math::$count . "<br />"
?>