<?php //тринарный оператор
$a = 11;

if ($a > 10){
  $a *= $a;
};
var_dump($a);

if($a > 10 && $a < 20){
  $a *= $a;
} elseif($a == 13) {
  $a += 2;
} else {
  $a -= 5;
};

$a = "Яблоко";

switch ($a) {
  case "Яблоко":
  case "Апельсин":
    echo "Фрукт";
    break;
  case "Вишня":
    echo "Ягода";
    break;
  case "Картофель":
    echo "Овощ";
    break;
};

//цикл с предусловием
$i = 0;
while($i < 10){
  echo "$i ";
  $i++;
};

// постусловие: тело цикла выполнится хотябы один раз
$i = 0;
do {
  echo "$i ";
  $i++;
} while ($i < 10);

//цикл со счетчиком
for($i = 0; $i < 10; $i++){
  echo "$i ";
}

//цикл для перебора массивов foreach
$a = [1, 2, 'Three', true];
foreach ($a as $value) {
  // code...
    echo $value;
}

//приведение к boolean
// false
// inttruee- 0
// fltruelt - 0.var_dump((bool)[]);//fnullse

// string - "0", ""
// array - []
// NULL
// SimpleXML

var_dump((bool)10); //true
var_dump((bool)"10"); //true
var_dump((bool)""); //false
var_dump((bool)" "); //true
var_dump((bool)[]);//false
var_dump((bool)[false]);//true
var_dump((bool)[null]);//true
var_dump((bool)null);//false

$a = [1,2];
$b = ['key1' => 3, 'key2' => 4];
var_dump($a + $b);

// приведение типов
var_dump((int)"10"); //или intval("10");

var_dump((float)"10");//тоже что и real, double; floatval("10");
var_dump((real)"10");
var_dump((double)"10");

var_dump((bool)"10");
var_dump((string)10);//strval(10)
var_dump((array)"10");
var_dump((object)"10");
settype(10, 'string'); //приведение к заданному типу

?>
<a href="/">Go Back</a>
