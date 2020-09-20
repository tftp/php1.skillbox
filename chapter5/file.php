<?php

var_dump(file_exists(__DIR__ . '/text.txt')); //проверка файла на существование
var_dump(is_writable(__DIR__ . '/text.txt')); //проверяет можно ли записать в файл
$fileName = __DIR__ . '/text.txt';

$file = fopen($fileName, 'w');
if ($file) {
    $success = fwrite($file, 'Hello textfile! !' . PHP_EOL); //PHP_EOL добавляет идентификатор конца сторки её значение разное для Windows и Linux
    if ($success === 'false') {
        echo 'Не удалось записать' . PHP_EOL;
    }
    fclose($file);
}

//Функции для записи
file_put_contents($fileName, 'Hello', FILE_APPEND);//заменяет fopen, fwrite, fclose, второй аргумент или строка или массив, FILE_APPEND если есть то файл не перезаписывается

//Функции для чтения
// $content = fread($file, filesize($fileName));
// Второй параметр количество байт для считывания и чтобы считать весь файл используем filesize

// $content = fgets($file);
// считывает построчно, чтобы вывести все строчки используем feof($file) - вернет true когда конец файла
// while (!feof($file)) {
//     $line = fgets($file);
// }


// $content = file_get_contents($fileName);
// считает всё из файла

// unlink(), copy(), rename()
// для удаления, копирования, переименования файла
//
// rewind(), ftell(), feof()
// считывание указателя файла
//
// fileatime(), filemtime(), file_size(), file_tipe()
// получение управления свойствами файла

// Функции работы с директориями
// getcwd()
// возвращает путь к директории скрипта

// chdir()
//смена лиректории

// opendir()
// открывает каталог и возвращает дискриптор каталога

// closedir()
// закрывает каталог

// readdir(), scandir(__DIR__)
// получает содержимое каталога

// dirname  - возвращает родительский каталог

// id_dir  - проверяет на каталог

// mkdir, rmdir  -  создает удаляет каталог



 ?>
