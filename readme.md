# php1.skillbox

## Магические константы PHP - [Источник](https://www.php.net/manual/ru/language.constants.magic.php)

```
__LINE__	    Текущий номер строки в файле.
__FILE__	    Полный путь и имя текущего файла с развёрнутыми симлинками. Если используется внутри подключаемого файла, то возвращается имя данного файла.
__DIR__	        Директория файла. Если используется внутри подключаемого файла, то возвращается директория этого файла. Это эквивалентно вызову dirname(__FILE__). Возвращаемое имя директории не оканчивается на слеш, за исключением корневой директории.
__FUNCTION__	Имя функции или {closure} в случае анонимной функции.
__CLASS__	    Имя класса. Это имя содержит название пространства имён, в котором класс был объявлен (например, Foo\Bar). При использовании в методах трейтов __CLASS__ является именем класса, в котором эти методы используется.
__TRAIT__	    Имя трейта. Это имя содержит название пространства имён, в котором трейт был объявлен (например, Foo\Bar).
__METHOD__	    Имя метода класса.
__NAMESPACE__	Имя текущего пространства имён.
ClassName::class	Полное имя класса.
```
## Суперглобальные переменные [Источник](https://www.php.net/manual/ru/language.variables.superglobals.php)


 - $GLOBALS — Ссылки на все переменные глобальной области видимости
 - $_SERVER - это массив, содержащий информацию, такую как заголовки, пути и местоположения скриптов. Записи в этом массиве    создаются веб-сервером.
 - $_GET — Переменные HTTP GET. Ассоциативный массив переменных, переданных скрипту через параметры URL (известные также как строка запроса). Обратите внимание, что массив не только заполняется для GET-запросов, а скорее для всех запросов со строкой запроса.
 - $_POST — Переменные HTTP POST. Ассоциативный массив данных, переданных скрипту через HTTP методом POST при использовании application/x-www-form-urlencoded или multipart/form-data в заголовке Content-Type запроса HTTP.
 - $_FILES — Переменные файлов, загруженных по HTTP. 
 - $_COOKIE
 - $_SESSION
 - $_REQUEST
 - $_ENV

## Подключение файлов
Подключает абсолютный путь от корня ОС:
```
include __DIR__ . '/var.php'
```
Используя данные сервера:
```
include $_SERVER['DOCUMENT_ROOT'] . '/var.php'
```
## Функции для работы с переменными, массивами, математические функции

```
is_array()
is_bool()

is_float()
is_double()
is_real()

is_int()
is_integer()
is_long()

is_null()

is_object()

is_scalar()

is_string()

isset()

empty()

empty([]) //true
empty($c) //true
empty([false]) //false
empty("")//true
empty("0")//true
empty(0)//true
empty(-1) //false
```
Познакомится с функциями массивов можно [здесь](https://www.php.net/manual/ru/ref.array.php)

Математические функции [здесь](https://www.php.net/manual/ru/ref.math.php)

Модули для работы с датой и временем [здесь](https://www.php.net/manual/ru/refs.calendar.php) и Функции даты и времени [здесь](https://www.php.net/manual/ru/ref.datetime.php#ref.datetime)

Функции для работы со строками [Здесь](https://www.php.net/manual/ru/ref.strings.php)

## Перевод стандартов PSR-0, PSR-1, PSR-2, PSR-3, PSR-4

 - [PSR-0](https://svyatoslav.biz/misc/psr_translation/#_PSR-0) – Стандарт автозагрузки
 - [PSR-1](https://svyatoslav.biz/misc/psr_translation/#_PSR-1) – Базовый стандарт оформления кода
 - [PSR-2](https://svyatoslav.biz/misc/psr_translation/#_PSR-2) – Рекомендации по оформлению кода
 - [PSR-3](https://svyatoslav.biz/misc/psr_translation/#_PSR-3) – Интерфейс протоколирования
 - [PSR-4](https://svyatoslav.biz/misc/psr_translation/#_PSR-4) – Улучшенная автозагрузка

## Протокол HTTP/HTTPS
 - [header](https://www.php.net/manual/ru/function.header) — Отправка HTTP-заголовка
 - [http_response_code](https://www.php.net/manual/ru/function.http-response-code.php) — Получает или устанавливает код ответа HTTP


