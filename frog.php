<?php
require_once 'animal.php';

class Frog extends Animal {
    public function jump() {
        echo "Jump : ";
        echo "Hop hop<br>";
    }
}
$kodok = new Frog("buduk");

echo "Nama : " . $kodok->name . "<br>"; // "shaun"       
echo "Legs : " . $kodok->legs . "<br>"; // 4
echo "Cold blooded : " . $kodok->cold_blooded . "<br>"; // "no"
?>