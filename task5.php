<?php

define('SPEED_IN_CITY', 70);
define('SPEED_OUT_CITY', 90);

$city1 = rand(0, 1000);
$city1Radius = rand(0, 100);
$city2 = rand(0, 1000);
$city2Radius = rand(0, 100);

// var_dump ($city1, $city2, $city1Radius, $city2Radius);
$cars = [];
for ($i=1; $i < 11; $i++) {
    $cars[$i] = rand(0, 1000);
}

foreach ($cars as $number => $km) {
    if (($km > $city1 - $city1Radius && $km < $city1 + $city1Radius) ||
        ($km > $city2 - $city2Radius && $km < $city2 + $city2Radius)) {
        echo "Машина $number едет по городу на $km км со скоростью не более " . SPEED_IN_CITY . "<br>";
    } else {
        echo "Машина $number едет за городом на $km км со скоростью не более " . SPEED_OUT_CITY . "<br>";
    }
}
