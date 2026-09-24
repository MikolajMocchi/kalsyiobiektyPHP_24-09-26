<?php
class Wojownik {
    public $level;
    public $bron;
    public $name;

    public function __construct($level, $bron, $name){
        $this->level = $level;
        $this->bron = $bron;
        $this->name = $name;
        echo "Nick: $name . Broń $bron . Poziom $level\n";
    }
    
}

$hero = new Wojownik(99, "Topur", "NickEh30" );
echo $hero->level;
echo get_class($hero);
