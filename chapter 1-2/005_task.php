<?php

// Задание 5 - Поиск max в двумерном массиве
// Матрица с числами должна быть прямоугольная, ее размер задается двумя случайными числами **m** и **n** от 3 до 10
// Создайте двумерный массив-матрицу matrix из случайных чисел от 0 до 9 размерности m x n
// Найдите в ней максимальное значение, и номер строки и столбца, где оно встречается первый раз.
// Выведите матрицу в удобном формате, а также это минимальное значение и номера строки и столбца, где оно встретилось первый раз
// Пример вывода:
// 1 4 1 1
// 4 2 6 3
// 1 7 2 2
// 0 0 0 7
// 4 5 7 0
// Минимальное значение: 7 на строке: 3 в столбце: 2

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
$max = $matrix[0][0];
$pos_line = 0;
$pos_col = 0;

foreach ($matrix as $key_line => $line) {
  // code...
  foreach ($line as $key_col => $number) {
    // code...
    if($max < $number){
      $max = $number;
      $pos_line = $key_line;
      $pos_col = $key_col;
    }
  }
}

echo "Максимальное значение: $max на строке: $pos_line в столбце: $pos_col";
