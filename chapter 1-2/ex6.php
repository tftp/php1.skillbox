<?php
$arr = [];
for ($i=0; $i < 10; $i++) {
  $arr[] = rand(0,10);
}
$max = $arr[0];
foreach ($arr as $i => $value) {
  // code...
  if ($value > $max){
    $max = $value;
    $index = $i;
  }
}
var_dump($arr);
echo "<br /> index = $index";
echo "<br /> max = $max";

 ?>
