
<pre>
  <?php
    $anyVar = 'Hello any var';
    echo $anyVar;

  var_dump($anyVar);

  $decimalInt = 150; //десятичное число
  $octimalInt = 0123; //восьмиричное число
  $hexadecInt = 0xAF3; //шестнадцатиричное число

  //определение чисел с плавающей точкой
  $simple = 1.34; //простой способ
  $power = 3.4e5; //3.4 * 10 в 5 степени
  $anotherPower = 3.4e-4 ;//можно так

  $stringWithDouble = "I have number $simple";
  ?>
</pre>
<ul>
  <li>
    <a href="001_variables.php">001_variables</a>
  </li>
  <li>
    <a href="002_variables.php">002_variables</a>
  </li>
  <li>
    <a href="arrays.php">Arrays</a>
  </li>
  <li>
    <a href="001_simple_arrays.php">001_simple_arrays</a>
  </li>
  <li>
    <a href="002_multy_arrays.php">002_multy_arrays</a>
  </li>
  <li>
    <a href="003_data_in_arrays.php">003_data_in_arrays</a>
  </li>
  <li>
    <a href="const.php">Константы</a>
  </li>
  <li>
    <a href="global_arrays.php">Глобальные массивы</a>
  </li>
  <li>
    <a href="operators.php">Операторы</a>
  </li>
  <li>
    <a href="conditions.php">Условия, циклы и т.п. конструкции</a>
  </li>
  <li>
    <a href="001_if_else.php">Д.з Управляющие конструкции 1</a>
  </li>
  <li>
    <a href="002_switch.php">Д.з Управляющие конструкции 1</a>
  </li>
  <li>
    <a href="003_cycles.php">Д.з Управляющие конструкции 1</a>
  </li>

</ul>
<form method="POST" action="sayhello.php">
Your Name: <input type="text" name="user" />
<br/>
<button type="submit"">Say Hello</button>
</form>
