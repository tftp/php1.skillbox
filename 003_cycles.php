<pre>
  <?php

  // 1. Выведите числа от 0 до 9
    for ($i=0; $i < 10; $i++) {
      echo " $i";
    }

  // 2. Выведите 10 случайных числе от 1 до 10
  echo "<br />";
  for ($i=0; $i < 10; $i++) {
    $r = rand(1,10);
    echo " $r";
  }


  // 3. Создайте массив items из 10 случайных целых значений от 0 до 9
  $items = [];
  for ($i=0; $i < 10; $i++) {
    $r = rand(0,9);
    $items[] = $r;
  }
  var_dump($items);

  // 4. Добавляйте случайные целые числа от 1 до 9 в массив numbers до тех пор, пока сумма всех элементов этого массива меньше 100
  // А затем выведите сколько числе всего в массиве: "Длинна массива numbers = {}"
  $sum = 0;
  $numbers = [];
  do {
    $r = rand(1,9);
    $numbers[] = $r;
    $sum += $r;
  } while ($sum < 100);
  $countNumbers = count($numbers);
  echo "Длинна массива numbers = $countNumbers";

  // 5. Переберите массив $numbers, созданный ранее, и посчитайте сумму всех четных чисел в нем
  // Выведите следующие строки (как всегда вместо {} подставив нужные значения):
  // Общая сумма массива numbers = {}
  // Из нее часть, которая приходится на четные числа = {}
  // И часть из нечетных чисел = {}
  $sumEven = 0;
  $sumOdd = 0;
  $sumAll = 0;
  foreach ($numbers as $value) {
    $sumAll += $value;
    $value % 2 === 1 ? $sumOdd += $value : $sumEven += $value;
  }
  echo "<br /> Общая сумма массива numbers = $sumAll";
  echo "<br /> Из нее часть, которая приходится на четные числа = $sumEven";
  echo "<br /> И часть из нечетных чисел = $sumOdd";
  ?>
</pre>
<a href="/">Go Back</a>
