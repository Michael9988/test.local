<?php

class Point {

    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function setY($y) {
        $this->x = $y;
    }

    public function setPoint($point) {
        $this->x = $point->x;
        $this->y = $point->y;
    }

    public function getDistance($point) {
        return sqrt($this->getPow2($point));
    }
    
    private function getPow2($point){
        return pow($this->x - $point->x, 2) + pow($this->y - $point->y, 2);
    }

    public function __toString() {
        return "Точка с координатами (" . $this->x . "; " . $this->y . ")";
    }

    public function __destruct() {
        echo "<br />Объект уничтожен!";
    }

}

$point = new Point(5, 7);
echo $point . "<br />";
$point->setX(10);
$point->setY(12);
echo $point . "<br />";
$point_1 = new Point(10, 10);
echo $point->getDistance($point_1) . "<br />";
?>