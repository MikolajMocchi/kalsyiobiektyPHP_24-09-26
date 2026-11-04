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
    public function __construct($type) {
        return parent::__construct($type)
    }

    public function move() {
        return "1";
    }
}

$car = new Car('sobowe');
echo $dog instanceofVehicle

