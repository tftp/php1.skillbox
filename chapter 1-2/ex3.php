<?php
$a = 13466547;
$arr = [
  0 => 0,
  1 => 0,
  2 => 0,
  3 => 0,
  4 => 0,
  5 => 0,
  6 => 0,
  7 => 0,
  8 => 0,
  9 => 0
];
$l = strlen($a);
for ($i=0; $i < $l; $i++) {
    $num = $a % 10;
    $a = intdiv($a, 10);
    $arr[$num] += 1;
    echo "<br /> $num";
}
// var_dump(strlen($a));
// var_dump($arr);
 echo "<br />";
 var_dump($arr);

 $count = [];
 for ($i=0; $i < 10; $i++) {
   $count[] = 0;
 }

 foreach (str_split((string) $a) as $number) {
   $count[$number]++;
 }
 echo "<br />";
 var_dump($arr);
 
 ?>
