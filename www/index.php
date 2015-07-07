<?php

class Auto {

    protected $x;
    protected $y;

    public function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function move($x, $y) {
        $this->strMove($x, $y);
    }

    protected function strMove($x, $y, $type = "") {
        if ($type == "") {
            echo "Двигаем авто из (" . $this->x . "; " . $this->y . ") в (" . $x . "; " . $y . ")<br />";
        } else {
            echo "Двигаем $type из (" . $this->x . "; " . $this->y . ") в (" . $x . "; " . $y . ")<br />";
        }
    }

}

class Car extends Auto {

    public function __construct($x = 0, $y = 0) {
        parent::__construct($x, $y);
    }

    public function move($x, $y) {
        $this->strMove($x, $y, "легковой");
    }

}

class Truck extends Auto {

    private $capacity;

    public function __construct($x = 0, $y = 0, $capacity = 5000) {
        parent::__construct($x, $y);
        $this->capacity = $capacity;
    }

    public function move($x, $y) {
        $this->strMove($x, $y, "грузовой");
    }

}

$auto = new Auto();
$car = new Car();
$truck = new Truck();
$auto->move(10, 7);
$car->move(10, 10);
$truck->move(10, 10)
?>