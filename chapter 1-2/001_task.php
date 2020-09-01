<?php

// Задание 1 - Подсчет различных букв в слове
// Дано слово или предложение (поместите любой текст в переменную line), необходимо подсчитать сколько раз в нем встречается каждый различный символ (большие и маленькие буквы считать за разные символы).
// например: "Student, hello!"
// S - 1
// t - 2
// u - 1
// d - 1
// e - 2
// n - 1
// , - 1
//   - 1
// h - 1
// l - 2
// o - 1
// ! - 1
$line = 'Hello World';
$arr = str_split($line);
echo implode(' ', $arr) . '<br>';

foreach ($arr as $letter) {
  // code...
  if (!isset($letters[$letter])) {
    $letters[$letter] = 0;
  }
  $letters[$letter] += 1;
}

foreach ($letters as $key => $value) {
  // code...
  echo "$key - $value <br>";
}
