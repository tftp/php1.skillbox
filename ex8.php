<?php
//$a * $x ** 2 + $b * $x + $c = 0
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
var_dump($a, $b, $c);

[$a, $b] = [$b, $a];
var_dump($a, $b, $c);
 ?>
