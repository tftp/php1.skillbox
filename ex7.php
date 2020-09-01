<?php
$arr = [];
for ($i=0; $i < 3; $i++) {
  for ($j=0; $j < 3; $j++) {
    $arr[$i][$j] = rand(0,3);
  }
}


foreach ($arr as $value) {
  echo implode('  ', $value) . '<br />';
}

$sum = 0;
foreach ($arr as $line) {
  foreach ($line as $value) {
    $sum += $value;
  }
}

var_dump($sum);
 ?>
