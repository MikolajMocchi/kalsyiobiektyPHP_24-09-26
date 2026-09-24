
<?php
class Person {
    public $age;
    public $name;

    public function __construct($age, $name){
        $this->age = $age;
        $this->name = $name;
        echo "Sigma $age\n";
        echo "  <br>";
    }


    public function greet($name,$age){
        echo "<br>";
        return "Pajapajacerka $name, Wbijam do main streamu jak na bomb site $age";
    }

    public function setAge($age){
        echo "<br>";
        return "$age";
    }
    public function isAdult($age){
        echo '<br>';
        if ($age >= 18){
            return True;

        }elseif ($age <= 18){
            return False;
        }
    }

}

$osoba = new Person(19,'Kubla');
echo $osoba->name;
echo $osoba->isAdult(20);
echo $osoba->setAge(mt_rand(10,20));
echo $osoba->greet('Gimson', 13);

echo "<br>";
class Circle {
    public function area($pi,$r){
        return $pi * $r ** 2;
        echo "<br>";
    }

    public static function square($x){
        echo '<br>';
        return $x * $x;
    }
}

$kolo = new Circle();
echo $kolo->area(3.14,6);
echo Circle::square(2);

echo "<br>";
