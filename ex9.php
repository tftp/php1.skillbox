<?php
$arr = [];
for ($i=0; $i < 10; $i++) {
  $arr[] = rand(0,10);
}
echo implode(' ', $arr) . '<br />' ;
// $min = $arr[0];
for ($i=0; $i < 9; $i++) {
  for ($j=$i+1; $j < 10; $j++) {
    if($arr[$i] > $arr[$j]){
      [$arr[$i], $arr[$j]] = [$arr[$j], $arr[$i]];
    }
  }
}

echo implode(' ', $arr) ;
 ?>
