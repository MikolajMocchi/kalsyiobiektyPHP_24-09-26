<?php
class Animal {
    public $name;
    
    public function __constrcut($name){
        $this->name = $name;
    }

    public function eat(){
        return '';
    }

}

class Dog extends Animal {
    public $race;

    public function __constrcut($name, $race){
        $this->race = $race;
        return parent::__constrcut($name);

    }

    public function eat(){
        return 'Blam, am ';
    }

}

class Cat extends Animal {
    public $race;

    public function __constrcut($name, $race){
        $this->race = $race;
        return parent::__constrcut($name);
    }

    public function eat(){
        return 'Nlam, am ';
    }
    
}

$dog = new Dog('Bezimieny','coin ');
echo $dog->name;
echo $dog->eat();
echo $dog->race;

$cat = new Cat('Nyancat', 'nyan ');
echo $dog->name;
echo $dog->eat();
echo $dog->race;
