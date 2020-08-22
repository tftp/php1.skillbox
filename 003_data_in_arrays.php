<pre>
  <?php
  // Полезные массивы с данными
  // научимся хранить данные в массивах
  // Для хранения однородных структурированных данных очень хорошо подходят ассоциативный массивы


  // 1. Создайте ассоциативный массив животных animals
  // данные: мышь - это животное грызун, конь - скачет по полям, хрюшка - кушает желуди
  $animals = [
    'мышь' => 'животное грызун',
    'конь' => 'скачет по полям',
    'хрюшка' => 'кушает желуди'
  ];

  // 2. Доработаем этот массив, добавим в него больше данных, теперь для каждого животного у нас будет не только описание, но и другие параметры:
  // мышь - это животное грызун, 4 лапы, хвост: лысый
  // конь - скачет по полям, 4 ноги, хвост: пушистый
  // хрюшка - кушает желуди, 4 ноги, хвост: крючком
  $animals = [
    'мышь' => ['животное грызун', '4 лапы', 'хвост: лысый'],
    'конь' => ['скачет по полям', '4 ноги', 'хвост: пушистый'],
    'хрюшка' => ['кушает желуди', '4 ноги', 'хвост: крючком']
  ];


  // 3. еще одно уточнение теперь мы знаем, чуть больше о хвостах:
  // хвост мыши - лысый, 10 см
  // хвост коня - пушистый, 50 см
  // хвост хрюшки - крючком, 4 см
  $animals = [
    'mouse' => ['what' => 'животное грызун', 'paw' => 4, 'tail' => ['лысый', '10 см']],
    'horse' => ['what' => 'скачет по полям', 'paw' => 4, 'tail' => ['пушистый', '50 см']],
    'pig' => ['what' => 'кушает желуди', 'paw' => 4, 'tail' => ['крючком', '4 см']]
  ];
  // var_dump($animals);
  // 4. А теперь опишем ферму на которой живут животные, на ферме есть разные домики для зверьков
  // создайте массив с buildings описанием домов, ключом сделайте название дома на английском языке, на ферме следующие дома:
  // Жилой дом, этажей 2, цвет - синий
  // Стойла, этаже 1, цвет - зеленый
  // Будка, этажей 1, цвет - красный
  // Элитный-гараж, этажей 5, цвет - черный
  $bildings = [
    'house' => [
      'flat' => 2,
      'color' => 'blue'
    ],
    'stalls' => [
      'flat'  =>  1,
      'color' =>  'green',
    ],
    'booth' => [
      'flat'  =>  1,
      'color' =>  'red',
    ],
    'garage' => [
      'flat'  =>  5,
      'color' =>  'black'
    ]
  ];
  // 5. Теперь нам нужно расселить животных по домам, добавьте каждому животному поле - в котором укажите где оно живет
  // мышь живет в жилом доме
  // конь живет в стойле
  // хрюшка тоже живет в стойле
  $animals['mouse']['bilding'] = 'house';
  $animals['horse']['bilding'] = 'stalls';
  $animals['pig']['bilding'] = 'stalls';
//  var_dump($animals['mouse']);
  // 6. Теперь нам нужно поделиться информацией о всей ферме с кем-то, но на почте нам сказали, что мы можем отправить только одну переменную
  // создайте переменную farm с двумя полями animals и buildings и поместите в них значения из соответствующих массивов
  $farm['animals'] = $animals;
  $farm['bildings'] = $bildings;
  // 7. Почта наконец пришла и вы открыли конверт, а там массив farm используя этот массив:
  // выведите сколько лап у хрюшки
  var_dump($farm['animals']['pig']['paw']);
  // выведите какого цвета будка
  var_dump($farm['bildings'][$farm['animals']['pig']['bilding']]);

  // выведите длину хвоста местных коней
  var_dump($farm['animals']['horse']['tail'][1]);

  // создайте переменную animal и поместите в нее имя одно из названий животных, на английском (один из ключей массива $animals)
  // Выведите описание животного, которое помещено в переменной $animal
  $animal = 'mouse';
  var_dump( $farm['animals'][$animal]);
  // Выведите название помещения, в котором живет мышь
  var_dump($animals[$animal]['bilding'])
  ?>
</pre>
<a href="/">Go Back</a>
