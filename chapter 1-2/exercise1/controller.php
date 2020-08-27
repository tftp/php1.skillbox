<?php

//форма заполнена и отправлена
if (isset($_POST['solve_problem'])) {

  $op1 = $_POST['op1'];
  $op2 = $_POST['op2'];
  $sum = $_POST['sum'];

  if(is_numeric($op1) && is_numeric($op2) && is_numeric($sum)){

    $equationString = $op1 . "+" . $op2 . "=" . $sum; //готовим пример для вывода

    if($op1 + $op2 == $sum) {

      $success = "Вы успешно решили задачу";

    } else {
      $error = "Задача решена неверно";
    }
  } else {
    $error = "Введены неверные данные!";
  }
}
if(!isset($error)) {
  $sourceOperator1 = rand(0,10);
  $sourceOperator2 = "";
  $sourceSum = rand(0,10);
} else {
  $sourceOperator1 = $op1;
  $sourceOperator2 = "";
  $sourceSum = $sum;
}

?>
