<?php
require_once 'animal.php';

class Ape extends Animal {
    public $legs = 2;
    
    public function yell() {
        echo "Yell : ";
        echo "Auooo<br>";
    }
}

$sungokong = new Ape("kera sakti");

echo "Nama : " . $sungokong->name . "<br>"; // "shaun"       
echo "Legs : " . $sungokong->legs . "<br>"; // 4
echo "Cold blooded : " . $sungokong->cold_blooded . "<br>"; // "no"

?>