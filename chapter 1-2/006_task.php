<?php

// Задание 6 - Сортировка массивов
// Возьмите предыдущую матрицу и отсортируйте четные строки по возрастанию, а нечетные по убыванию, и снова выведите массив в удобном формате
// (запрещено использовать встроенные в php функции сортировки *sort|asort|ksort|usort*)
// Пример вывода:
// 4 1 1 1
// 2 3 4 6
// 7 2 2 1
// 0 0 0 7
// 7 5 4 0

$m = rand(3,10);
$n = rand(3,10);
// var_dump($m, $n);
for ($i=0; $i < $m; $i++) {
  // code...
  for ($j=0; $j < $n; $j++) {
    // code...
    $matrix[$i][$j] = rand(0,9);
  }
}

foreach ($matrix as $line) {
  // code...
  echo implode(' ', $line) . '<br>';
}
echo "<br>";

foreach ($matrix as $key => $line) {
  // code...
  if($key % 2){
    for ($i=0; $i < count($line) - 1; $i++) {
      for ($j=$i+1; $j < count($line); $j++) {
        if($line[$i] < $line[$j]){
          [$line[$i], $line[$j]] = [$line[$j], $line[$i]];
        }
      }
    }
    $matrix[$key] = $line;
  } else {
    for ($i=0; $i < count($line) - 1; $i++) {
      for ($j=$i+1; $j < count($line); $j++) {
        if($line[$i] > $line[$j]){
          [$line[$i], $line[$j]] = [$line[$j], $line[$i]];
        }
      }
    }
    $matrix[$key] = $line;
  }
}

foreach ($matrix as $line) {
  // code...
  echo implode(' ', $line) . '<br>';
}
