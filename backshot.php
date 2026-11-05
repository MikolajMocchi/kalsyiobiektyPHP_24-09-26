<?php
class Vehicle {
    public $type;
    public $brand;

    public function __construct($type, $brand){
        $this->type = $type;
        $this->brand = $brand;
    }

    public function move() {
        return "";
    }
}

class Car extends Vehicle {
    public function __construct($type, $brand) {
        return parent::__construct($type, $brand);
    }

    public function move() {
        return "1";
    }
}

class Truck extends Vehicle {
    public function __construct($type, $brand){
        return parent::__construct($type, $brand);
    }

    public function move() {
        return '2';
    }
}

$car = new Car('BMW ', 'wum ');
echo $car->brand;
echo $car->type;
echo $car->move();

$truck = new Truck('inne ', 'muw ');
echo $truck->brand;
echo $truck->type;
echo $truck->move();



if (is_a($car, 'Vehicle')) {
    echo ' Rzeżnik bije kobiety';
}


