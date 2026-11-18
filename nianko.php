<?php

abstract class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }


    abstract public function speak();

    public function describe() {
        return 'siema jestem kotem   ';
    }
}

class Cat extends Animal {
    public $voice;

    public function __construct($name, $voice) {
        parent::__construct($name);
        $this->voice = $voice;
    }

    public function speak() {
        return 'wiam';
    }
}

$kot = new Cat("xd",'');
echo $kot->name;
echo $kot->speak();
