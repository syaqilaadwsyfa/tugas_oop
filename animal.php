<?php
    class Animal {
        public $name;
        public $legs = 4;
        public $cold_blooded = "no";
    
        public function __construct($name) {
            $this->name = $name;
        }
    }
$sheep = new Animal("shaun");

echo "Nama : " . $sheep->name . "<br>"; // "shaun"       
echo "Legs : " . $sheep->legs . "<br>"; // 4
echo "Cold blooded : " . $sheep->cold_blooded . "<br>"; // "no"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>