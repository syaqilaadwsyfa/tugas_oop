<?php
require_once 'animal.php'; 
echo "<br>";

require_once 'ape.php';
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // Output: "Auooo"
echo "<br>";

require_once 'frog.php';
$kodok = new Frog("buduk");
$kodok->jump(); // Output: "hop hop"
?>