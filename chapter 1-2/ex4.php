<?php
$word = 'SELO';
var_dump($word);

$letter_last = substr($word, -1);
$letters_first = substr($word, 0, strlen($word) - 1);
var_dump($letter_last);
var_dump($letters_first);
var_dump($letter_last . $letters_first);

 ?>
