<?php
$arr = [];
for ($i=0; $i < 10; $i++) {
  $arr[] = rand(0,10);
}
echo implode(' ', $arr) . '<br />' ;
// $min = $arr[0];
for ($i=0; $i < count($arr) - 1; $i++) {
  $k = $i;
  for ($j=$i+1; $j < 10; $j++) {
    if($arr[$k] > $arr[$j]){
      [$arr[$k], $arr[$j]] = [$arr[$j], $arr[$k]];
    }
  }
}

echo implode(' ', $arr) ;
 ?>
